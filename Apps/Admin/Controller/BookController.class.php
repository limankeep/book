<?php
namespace Admin\Controller;
use Think\Controller;
class BookController extends Controller {
    public function booklist(){
		
		//获取当前时间
		$now_time = date('Y-m-d H:i:s',time());
		//传入post参数  book_name reader_id start_time end_time
		$book_name = $_POST['book_name'];
		$start_time = $_POST['start_time'];
		$end_time = $_POST['end_time'];
		$book = D('book');		 
		//获取记录总条数
		$total = $book -> count();
		//设置每页展示数据条数
		$per = 8;
		$page = new \Component\Page($total, $per);
		//名称为空时
		if(empty($book_name)){
			if(empty($start_time) && empty($end_time)){				
				//名称和时间为空		
				$sql = "select * from tp_book ".$page->limit;
			}
			if(!empty($start_time) && !empty($end_time)){
				//名称为空，时间不为空
				$sql = "select * from tp_book where create_time between '".$start_time."' and '".$end_time."'".$page->limit;
			}			
		}
		//名称不为空
		if(!empty($book_name)){
			if(empty($start_time) && empty($end_time)){			
				//按照名称去查询
				$sql = "select * from tp_book where book_name like '%".$book_name."%'" .$page->limit;limit;				
			}
			if(!empty($start_time) && !empty($end_time)){
				//按照名称和时间去查询
				$sql = "select * from tp_book where (create_time between '".$start_time."' and '".$end_time."') And (book_name like '%".$book_name."%')".$page->limit;
			}			
		}
						
		 //select book_name from tp_borrow where create_time between '".$start_time."' and '".$end_time."';
		//拼装sql语句获取每页的记录		
		$info = $book -> query($sql);
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
	public function addbook(){
		 
		//两个逻辑① 展现表单 ② 接收表单数据
        $book = D('Book');
        if(!empty($_POST)){
            //tp框架有方法实现数据收集 数据模型对象->create()
            $book  -> create(); //收集post表单数据
            $z = $book -> add();
            if($z){
                //展现一个提示页面，并做页面跳转
                //success(提示信息，跳转的url路由地址)
                //$this ->success('添加书籍成功', U('Goods/showlist'));
                echo "success";
            } else {
                //$this ->error('添加书籍失败', U('Goods/showlist'));
                echo "error";
            }
        }else {
            $this -> display();
        }
    }
	public function editbook(){
		
		$this -> display();
    }
	public function yuqibook(){
		
		$this -> display();
    }
	public function update(){
		
	}
}