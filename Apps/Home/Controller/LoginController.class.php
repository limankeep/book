<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    function login(){
        if(!empty($_POST)){
            //验证码校验
            $verify = new \Think\Verify();
            if(!$verify->check($_POST['captcha'])){
                echo "验证码错误";
            } else {
                //判断用户名和密码，在model模型里边制作一个专门方法进行验证
                $login = new \Model\LoginModel();
                $rst = $login -> checkNamePwd($_POST['uname'],$_POST['password']);
                if($rst === false){
                    echo "用户名或密码错误";
                } else {
                    //登录信息持久化$_SESSION
                    session('uname',$rst['uname']);
                    session('uid',$rst['uid']);
                    //$this ->redirect($url, $params, $delay, $msg)
                    //$this -> redirect('Index/index',array('id'=>100,'name'=>'tom'),2,'用户马上登陆到后台');
                    $this -> redirect('Index/index');
                }
            }
        } 
        $this -> assign('lang',L());
        $this -> display();
    }
    //退出系统
    function logout(){
        session(null);
        $this -> redirect("Login/login");
    }
    //制作专门方法实现验证码生成
    function verifyImg(){
        //以下类Verify在之前并没有include引入
        //走自动加载Think.class.php  autoload()
        $config = array(
            'imageH'    => 35,               // 验证码图片高度
            'imageW'    => 105, 
            'fontSize'  => 16,
            'fontttf'   => '4.ttf',              // 验证码字体，不设置随机获取
            'length'    => 4,               // 验证码位数
        );
        $verify = new \Think\Verify($config);
        $verify -> entry();
    }
	//ajax异步更新验证码
	public function check_verify($code, $id = ''){
		
         $verify = new \Think\Verify();
		 
         $res = $verify->check($code, $id);
		 
         $this->ajaxReturn($res, 'json');
    }
}