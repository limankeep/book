<?php
namespace Admin\Controller;
use Think\Controller;
class ReaderController extends Controller {
    public function readerlist(){
		
		//获取当前时间
		$now_time = date('Y-m-d H:i:s',time());
		//传入post参数  book_name reader_id start_time end_time
		$reader_name = $_POST['reader_name'];
		$start_time = $_POST['start_time'];
		$end_time = $_POST['end_time'];
		$reader = D('reader');		 
		//获取记录总条数
		$total = $reader -> count();
		//设置每页展示数据条数
		$per = 8;
		$page = new \Component\Page($total, $per);
		//名称为空时
		if(empty($reader_name)){
			if(empty($start_time) && empty($end_time)){				
				//名称和时间为空		
				$sql = "select * from tp_reader ".$page->limit;
			}
			if(!empty($start_time) && !empty($end_time)){
				//名称为空，时间不为空
				$sql = "select * from tp_reader where create_time between '".$start_time."' and '".$end_time."'".$page->limit;
			}			
		}
		//名称不为空
		if(!empty($reader_name)){
			if(empty($start_time) && empty($end_time)){			
				//按照名称去查询
				$sql = "select * from tp_reader where reader_name like '%".$reader_name."%'" .$page->limit;			
			}
			if(!empty($start_time) && !empty($end_time)){
				//按照名称和时间去查询
				$sql = "select * from tp_reader where (create_time between '".$start_time."' and '".$end_time."') And (reader_name like '%".$reader_name."%')".$page->limit;
			}			
		}
						
		 //select book_name from tp_borrow where create_time between '".$start_time."' and '".$end_time."';
		//拼装sql语句获取每页的记录		
		$info = $reader -> query($sql);
		//$art=$article->where($where)->order("ID desc")->select();
				
		if(!empty($info)){
			$pagelist = $page -> fpage();		
			//show_bug($info)
			$this -> assign('info', $info);
			$this -> assign('pagelist', $pagelist);
			$this -> display();
		}
		else{
			$info = 0 ;
			$this -> assign('info', $info);
			
			$this -> display();
		}
    }
	public function addreader(){
		$this -> display();
    }
	public function add(){
		//获取当前时间
		$now_time = date('Y-m-d H:i:s',time());
		
		$uid = $_POST['uid'];
		$reader_idcard =$_POST['reader_idcard'];
        $reader = D('reader');
		//查询注册的用户是否注册过
		$quchong['uid'] = $uid;
		$quchong['reader_idcard'] = $reader_idcard ;
		$quchongsql = "select * from tp_reader where uid = '".$uid."' or reader_idcard = '".$reader_idcard."'";
		$re1 = $reader -> query($quchongsql);
		if($re1){
			echo '信息已被注册，请重新注册';
		}else{
			if(!empty($_POST)){
			
				$reader  -> create(); //收集post表单数据
						
				$z = $reader -> add();
				if($z){
					//
					echo "success";
					//同步登录的表格
					//初始密码统一设为123456
					$data1['password'] = 123456;
					$data1['create_time'] = $now_time;
					$data1['total_amount'] = 10 ;
					$data1['now_amount'] =  10 ;
					$readeridsql = "select reader_id from tp_reader where uid = '".$uid."'";
					$reader_id = $reader -> query($readeridsql);
					$arr3 = array_map('array_shift', $reader_id );   
					$reader_id  = $arr3[0];
					$result1 = $reader ->where($reader_id)-> save($data1);
					$sqlreader_uid = "select uid from tp_reader where reader_id = ' ".$reader_id."'";
					$uid = $reader -> query($sqlreader_uid);					
					$arr1 = array_map('array_shift', $uid);   
					$uid= $arr1[0];
					$login = D('login');
					$ar = array(
							'uid'=> $reader_id,
							'uname'=> $uid,
							'password'=> 123456,
							'now_time' => $now_time
						);
					$result2 = $login->add($ar); 	
				
				} else {
					
					echo "error";
				}
			}else{
				$this -> display();
			}
		}
        
    }
	public function edit($reader_id){
		
		 //查询被修改商品的信息并传递给模板展示$		
        $readers = D("reader");
				
        //两个逻辑：展示表单、收集表单
        if(!empty($_POST)){
            $readers -> create();
			
            $result = $readers-> save();
            if($result !== false){
                echo "success";
            } else {
                echo "failure";
            }
        } else {
            $info = $readers->find($reader_id); //一维数组
            $this -> assign('info', $info);
            $this -> display();
        }
    }
	public function del($reader_id){
		$reader = D("reader");//造对象
		$reader_id = $reader_id;
		$sql = "select * from tp_reader where reader_id = '".$reader_id."' And (total_amount = now_amount)";
		$result= $reader -> query($sql);
		
		if($result){
			$r = $reader -> delete($reader_id);//调用删除方法，直接把主键值作为参数放在（）里面就可以。
			if($r){
				echo "删除成功";
			}else{
				echo "删除失败";
			}
		}else{
			echo "还有图书未归还";
		}		
	}
	public function detail($reader_id){
		//建立数据模型
		$reader = D('reader');
		$reader = $reader;
		$sql="select * from tp_reader where reader_id = '".$reader_id."' ";
		$info = $reader -> query($sql);
		$this -> assign('info',$info);
		$this -> display();
	}

}