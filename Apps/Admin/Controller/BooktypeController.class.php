<?php
namespace Admin\Controller;
use Think\Controller;
class BooktypeController extends Controller {
    public function booktypelist(){
		
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
	public function addbook(){
			
            $this -> display();
 
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