<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function _initialize(){  
          $this-> login_check();
      } 
    public function index(){
		
		//建立数据模型
		$book = D('book');
		$article = D ('article');
		$announcement = D('announcement');
		$this -> display();
    }
	public function login_check(){
        if (session('uname')) {
            $this->uname = session('uname');
        }else{
            $this->redirect('Login/login');
        }
	}
}