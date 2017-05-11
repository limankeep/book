<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;

class LoginController extends Controller {
	function login(){
        if(!empty($_POST)){
            //验证码校验
            $verify = new \Think\Verify();
            if(!$verify->check($_POST['captcha'])){
                echo "验证码错误";
            } else {
                //判断用户名和密码，在model模型里边制作一个专门方法进行验证
                $user = new \Model\LoginModel();
                $rst = $user -> checkNamePwd($_POST['uname'],$_POST['password']);
				//$arr['flag']=1;
                if($rst === false){
                    echo "用户名或密码错误";
					//$arr['flag']=1;  
  
					//进行数据封装  
  
					//$this->ajaxReturn($arr,json)
                } else {
                    //登录信息持久化$_SESSION
					$sql = "select * from tp_login where uname = '".$_POST['uname']."' and type = '1'";
					$result = $user -> query($sql);
					if($result){
						session('uname',$rst['uname']);
						session('uid',$rst['uid']);
						//$this->ajaxReturn($arr,json)
						$this -> redirect('Index/index');
					}
						echo "请输入管理员账号登录";
                }
            }
        } 
        $this -> assign('lang',L());
        $this -> display();
    }
	public function check_user(){
		
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