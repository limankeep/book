<?php
namespace Admin\Controller;
use Think\Controller;
class BookController extends Controller {
    public function booklist(){
		
		//建立数据模型
		$book = D('Book');
		//获取记录总条数
		$total = $book -> count();
		//设置每页展示数据条数
		$per = 3;
		//实例化分页对象
		$page = new \Component\Page($total, $per); //autoload
		//拼装sql语句获取每页的记录
		$sql = "select * from tp_book ".$page->limit;
		$info = $book -> query($sql);
        //4. 获得页码列表
        $pagelist = $page -> fpage();
		
		//show_bug($info);

		$this -> assign('info', $info);
        $this -> assign('pagelist', $pagelist);
        $this -> display();
    }
	public function addbook(){
		echo( U('Borrow/addborrow'));
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