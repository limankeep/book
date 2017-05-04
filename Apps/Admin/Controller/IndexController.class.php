<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function _initialize(){  
          $this-> login_check();
      } 
    public function index(){
		
		$this ->display();
    }
	public function login_check(){
        if (session('uname')) {
            $this->uname = session('uname');
        }else{
            $this->redirect('Login/login');
        }
	}
}