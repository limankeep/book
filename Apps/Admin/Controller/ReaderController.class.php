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
		
		$this -> display();
    }
	public function editreader(){
		
		$this -> display();
    }

}