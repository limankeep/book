<?php /* Smarty version Smarty-3.1.6, created on 2017-05-11 09:25:02
         compiled from "../Apps/Home/View\Login\login.html" */ ?>
<?php /*%%SmartyHeaderCode:4925913bd6ed10dc4-95736630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99716e86f5016c5bd37668b3b79316b0b8d6bee9' => 
    array (
      0 => '../Apps/Home/View\\Login\\login.html',
      1 => 1494408144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4925913bd6ed10dc4-95736630',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5913bd6ee2cb8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5913bd6ee2cb8')) {function content_5913bd6ee2cb8($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>登录</title>
		<!-- Bootstrap -->
    <link href="<?php echo @PUBLIC_URL;?>
/Css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo @PUBLIC_URL;?>
/Css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?php echo @PUBLIC_URL;?>
/Css/bootstrap-responsive.css" rel="stylesheet">
    <script src="<?php echo @PUBLIC_URL;?>
/Js/jquery.js"></script>
    <script src="<?php echo @PUBLIC_URL;?>
/Js/jquery.min.js"></script>
    <script src="<?php echo @PUBLIC_URL;?>
/Js/bootstrap.min.js"></script>
    <script src="<?php echo @PUBLIC_URL;?>
/Js/bootstrap.js"></script>
    <style type="text/css">
	
      body {
        padding-top: 50px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
        
      }
       #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 100px auto 80px;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }
      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }
	.CopyRight{
		
	}
	.container {
        width: auto;
        max-width: 680px;
      }
      .container .credit {
        margin: 20px 0;
      }
	  .TxtValidateCodeCssClass{
		width:80px;
	  }
	  #pad-top{
		display:block;
		line-height:34px;
		margin:2px;
	  }
	  #captcha{
		margin:2px;
	  }
	  
    </style>
	</head>
	<body>
		<div id="wrap">
			<div class="container">
				<form class="form-signin" action="<?php echo @__MODULE__;?>
/Login/login" method="post">
					<p><h1 class="form-signin-heading">登录</h1></p>
					<div>账号：<input type="text" name="uname" id="LoginId" class="input-block-level" placeholder="请输入账号" /></div>
					
					<div>密码：<input type="password" name="password" id="LoginPassword" class="input-block-level" placeholder="请输入密码" /></div>
					
					<div class="clearfix">
						<span class="pull-left" id="pad-top">验证码：</span>
						
						<input class="TxtValidateCodeCssClass pull-left" id="captcha" name="captcha" type="text">
                        <img src="<?php echo @__CONTROLLER__;?>
/verifyImg"  alt="" id="verify_img" class="pull-left">
						
					</div>
					
					<div><input type="submit" name="LoginBtn" value="登录" id="LoginBtn" class="btn btn-success btn-lmedium btn-primary "/></div>
					
					<label class="checkbox">
          				<input type="checkbox" value="remember-me" name="auto">记住密码
        			</label>
        		
					<div><a>忘记密码</a></div>
					
				</form>
				 <div id="push"></div>
			</div>
		</div>
		<div id="footer footer-fixed-bottom" class="CopyRight muted credit">&copy;本站三峡学院制作，盗版必究！</div>
		<script>
		 
		</script>
	</body>
	<script>
	
		$("#verify_img").click(function() {
			var verifyURL = "<?php echo @__CONTROLLER__;?>
/verifyImg";
    		var time = new Date().getTime();
    		$("#verify_img").attr({
			"src" : verifyURL + "/" + time
    		});
 		});
		

		 
	
	</script>
</html>
<?php }} ?>