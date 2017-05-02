<?php
namespace Admin\Controller;
use Think\Controller;
class SystemController extends Controller {
    public function demo(){
		if(empty($_POST['book_name'])){
			
		}
		$book_name = $_POST['book_name'];
		echo $str;
		//建立数据模型
		$book = D('book');
		 
		//获取记录总条数
		$total = $book -> count();
		//设置每页展示数据条数
		$per = 8;
		//实例化分页对象
		$page = new \Component\Page($total, $per); //autoload
		//拼装sql语句获取每页的记录
		$sql = "select * from tp_book where book_name like '%".$book_name."%' order by create_time desc ".$page->limit;
		
		$info = $book -> query($sql);
		
		//$art=$article->where($where)->order("ID desc")->select();
        //4. 获得页码列表
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
	public function edit($book_id){
		 //查询被修改商品的信息并传递给模板展示$		
        $books = D("Book");
				
        //两个逻辑：展示表单、收集表单
        if(!empty($_POST)){
            $books -> create();
			
            $result = $books -> save();
            if($result != false){
                echo "success";
            } else {
                echo "failure";
            }
        } else {
            $info = $books->find($book_id); //一维数组
            $this -> assign('info', $info);
            $this -> display();
        }
    }
	
}