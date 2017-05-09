<?php
namespace Home\Controller;
use Think\Controller;
class CenterController extends Controller {
	public function _initialize(){  
          $this-> login_check();
    }
    public function center(){
		
		//获取登录的session
		$uname = session('uname');
		
		$reader = D('reader');
		$user = D('login');
		$borrow = D('borrow');
		$article = D('article');
		$uname = session('uname');
		
		echo $uname;
		//获取读者详细
		$readersql = "select * from tp_reader where uid = '".$uname."'";
		$readerinfo = $reader -> query($readersql);
		$this -> assign('readerinfo',$readerinfo);
		//获取读者借阅信息
		$borrowsql = "select * from tp_borrow where uid = '".$uname."'";
		$borrowinfo = $borrow -> query($borrowsql);
		$this -> assign('borrowinfo',$borrowinfo);
		//获取读者文章信息
		$articlesql = "select * from tp_article where uid = '".$uname."'";
		$articleinfo = $article -> query($articlesql);
		$this -> assign('articleinfo',$articleinfo);
		//var_dump($readerinfo);
		$this -> display();
    }
	public function login_check(){
        if (session('uname')) {
            $this->uname = session('uname');
        }else{
            $this->redirect('Login/login');
        }
	}
	//读者修改该密码
	public function editpwd(){
		
	}
}