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
		$re1 = $reader -> where()
        if(!empty($_POST)){
			
            $reader  -> create(); //收集post表单数据
						
            $z = $reader -> add();
            if($z){
                //
                echo "success";//每次借书后书本数减少一				
				$data1['password'] = 123456;
				$data1['create_time'] = $now_time;
				$reader_id = $z;
				$result1 = $reader ->where($reader_id)-> save($data1); 
				$user = D('user');
				$ar = array(
							'uid'=> $reader_id,
							'uname'=> 11,
							'password'=> 123456,
							'now_time' => $now_time
						);
				$result2 = $user->add($ar); 	
				
            } else {
                //$this ->error('添加书籍失败', U('Goods/showlist'));
                echo "error";
            }
        }else {
            $this -> display();
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