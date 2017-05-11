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
				$sql = "select * from tp_book where book_name like '%".$book_name."%'" .$page->limit;		
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
		//获取当前时间
		$now_time = date('Y-m-d H:i:s',time());
		//两个逻辑① 展现表单 ② 接收表单数据
        $book = D('Book');
		$booktype = D('booktype');
		//获取图书分类
		$sql = "select * from tp_booktype";				
		$booktypeinfo = $booktype -> query($sql);
		$this -> assign('booktypeinfo', $booktypeinfo);
        if(!empty($_POST)){
            
            $book  -> create();
			$book -> now_amount = $_POST['total_amount'];
			$book -> create_time = $now_time;
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
	public function edit($book_id){
		//获取当前时间
		$now_time = date('Y-m-d H:i:s',time());
		//两个逻辑① 展现表单 ② 接收表单数据
        $book = D('Book');
		$booktype = D('booktype');
		//获取图书分类
		$sql = "select * from tp_booktype";				
		$booktypeinfo = $booktype -> query($sql);
		$this -> assign('booktypeinfo', $booktypeinfo);

        //两个逻辑：展示表单、收集表单
        if(!empty($_POST)){
            $book -> create();
            $result = $book -> save();
            if($result !== false){
                echo "success";
            } else {
                echo "failure";
            }
        } else {
            $info = $book->find($book_id); //一维数组
            $this -> assign('info', $info);
            $this -> display();
        }
    
    }
	public function booktype(){
		
		//建立数据模型
		$booktype = D('booktype');
		//获取记录总条数
		$total = $booktype -> count();
		//设置每页展示数据条数
		$per = 10;
		//实例化分页对象
		$page = new \Component\Page($total, $per); //autoload
		//拼装sql语句获取每页的记录
		$sql = "select * from tp_booktype ".$page->limit;
		$info = $booktype -> query($sql);
		//4. 获得页码列表
		$pagelist = $page -> fpage();
		
		//show_bug($info);

		$this -> assign('info', $info);
		$this -> assign('pagelist', $pagelist);
		$this -> display();
    }
	public function addbooktype(){
		//获取当前时间
		$now_time = date('Y-m-d H:i:s',time());
		$booktype_name = $_POST['booktype_name'];
		//两个逻辑① 展现表单 ② 接收表单数据
        $booktype = D('booktype');
		$sql ="select * from tp_booktype where booktype_name = '".$booktype_name."'";
		$result = $booktype -> query($sql);
		echo $booktype_name;
		if(!empty($result)){
			echo "图书类型已存在，请勿重复添加";
		}else{
			if(!empty($_POST)){
            
				$booktype  -> create(); 
				//$book ->now_amount = $book['total_amount'];
				$booktype -> create_time = $now_time;
				$z = $booktype-> add();
				if($z){
					//展现一个提示页面，并做页面跳转
					//success(提示信息，跳转的url路由地址)
					//$this ->success('添加书籍成功', U('Goods/showlist'));				
					$this -> display();
					echo "success";
				} else {
					//$this ->error('添加书籍失败', U('Goods/showlist'));
					echo "error";
				}
			}else {
			
				$this -> display();
			}
		}
        echo $booktype_name;
	}
	public function del($book_id){
		$book = D("book");//造对象
		$book_id = $book_id;
		$sql = "select * from tp_book where book_id = '".$book_id."' And (total_amount = now_amount)";
		$result= $book -> query($sql);
		
		if($result){
			$r = $book -> delete($book_id);//调用删除方法，直接把主键值作为参数放在（）里面就可以。
			if($r){
				echo "删除成功";
			}else{
				echo "删除失败";
			}
		}else{
			echo "还有图书未归还";
		}
	}
	public function detail($book_id){
		//建立数据模型
		$book = D('book');
		$book_id = $book_id;
		$sql ="select * from tp_book where book_id = '".$book_id."' ";
		$info = $book ->query($sql);
		$this -> assign('info',$info);
		$this -> display();
	}
}