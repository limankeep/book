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
	public function editpwd($reader_id){
		//两个逻辑① 展现表单 ② 接收表单数据

		$reader = D('reader');
		$reader_id = intval($reader_id);
		var_dump($reader_id);
		$uid = session('uname');
		echo $uid;
		$user = D('login');
		$password = $_POST['password'];
		echo $password;
		
        if(!empty($_POST)){
            
			
			$updatepwd1 = $reader->where($reader_id) ->  setField('password',$password);
			var_dump($updatepwd1);
            if($updatepwd1){
                //展现一个提示页面，并做页面跳转
                //success(提示信息，跳转的url路由地址)
                //$this ->success('添加书籍成功', U('Goods/showlist'));
				$sqlpwd2 = "update tp_login SET password = '".$_POST['password']."' where uname = '".$uid."'";
				$updatepwd2 = $user -> execute($sqlpwd2);
                echo "success";
            } else {
                //$this ->error('添加书籍失败', U('Goods/showlist'));
                echo "error";
            }
        }else {

            $this -> display();
        }
	}
	public function editarticle($uid){
		//两个逻辑① 展现表单 ② 接收表单数据
		//获取当前时间
		$now_time = date('Y-m-d H:i:s',time());
        $article = D('article');
		echo $uid;
        if(!empty($_POST)){
            $article -> create(); 

			$article -> create_time = $now_time;
            $z = $article -> add();
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
}