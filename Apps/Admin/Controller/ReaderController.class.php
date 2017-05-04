<?php
namespace Admin\Controller;
use Think\Controller;
class ReaderController extends Controller {
    public function readerlist(){
		
		//建立数据模型
		$reader = D('Reader');
		//获取记录总条数
		$total = $reader -> count();
		//设置每页展示数据条数
		$per = 3;
		//实例化分页对象
		$page = new \Component\Page($total, $per); //autoload
		//拼装sql语句获取每页的记录
		$sql = "select * from tp_reader ".$page->limit;
		$info = $reader -> query($sql);
        //4. 获得页码列表
        $pagelist = $page -> fpage();
		
		//show_bug($info);

		$this -> assign('info', $info);
        $this -> assign('pagelist', $pagelist);
        $this -> display();
    }
	public function addreader(){
		//获取当前时间
		$now_time = date('Y-m-d H:i:s',time());
		
		$uid = $_POST['uid'];
		$reader_IDcard =$_POST['reader_IDcard'];
        $reader = D('reader');
		//查询注册的用户是否注册过
		$quchong['uid'] = $uid;
		$quchong['reader_IDcard'] = $reader_IDcard ;
		$re1 = $reader -> where($quchong)->select();
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
					$reader_id = $z;
					$result1 = $reader ->where($reader_id)-> save($data1);
					$sqlreader_uname = "select uid from tp_reader where reader_id = ' ".$reader_id."'";
					$uname = $reader -> query($sqlreader_uname);					
					$arr1 = array_map('array_shift', $uname);   
					$uname= $arr1[0];
					$user = D('user');
					$ar = array(
							'uid'=> $reader_id,
							'uname'=> $uname,
							'password'=> 123456,
							'now_time' => $now_time
						);
					$result2 = $user->add($ar); 	
				
				} else {
					
					echo "error";
				}
			}else{
				$this -> display();
			}
		}
        
    }
	public function edit(){
		
		 //查询被修改商品的信息并传递给模板展示$		
        $readers = D("reader");
				
        //两个逻辑：展示表单、收集表单
        if(!empty($_POST)){
            $readers -> create();
			
            $result = $readers -> save();
            if($result != false){
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

}