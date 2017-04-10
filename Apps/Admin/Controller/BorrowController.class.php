<?php
namespace Admin\Controller;
use Think\Controller;
class BorrowController extends Controller {
    public function borrowlist(){
		$borrow = D('Borrow');
		$info = $borrow ->select();
		show_bug($info);
		$this -> assign('info',$info);
		$this -> display();
    }
	public function addborrow(){
		
		$this -> display();
    }
	public function editborrow(){
		
		$this -> display();
    }
	public function returnborrow(){
		
		$this -> display();
    }
}
