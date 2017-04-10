<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>登录</title>
		<!-- Bootstrap -->
    <link href="<?php echo (PUBLIC_URL); ?>/Css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo (PUBLIC_URL); ?>/Css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?php echo (PUBLIC_URL); ?>/Css/bootstrap-responsive.css" rel="stylesheet">
    <script src="<?php echo (PUBLIC_URL); ?>/Js/jquery.js"></script>
    <script src="<?php echo (PUBLIC_URL); ?>/Js/jquery.min.js"></script>
    <script src="<?php echo (PUBLIC_URL); ?>/Js/bootstrap.min.js"></script>
    <script src="<?php echo (PUBLIC_URL); ?>/Js/bootstrap.js"></script>
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
    </style>
	</head>
	<body>
		<div id="wrap">
			<div class="container">
				<form class="form-signin" action="<?php echo U('Login/login');?>" method="post">
					<p><h1 class="form-signin-heading">登录</h1></p>
					<div>账号：<input type="text" name="name" value="请输入账号"  id="LoginId" class="input-block-level" placeholder="Email address" /></div>
					
					<div>密码：<input type="password" name="password" value="请输入密码" id="LoginPassword" class="input-block-level" placeholder="Password" /></div>
					
					<div><input type="button" name="LoginBtn" value="登录" id="LoginBtn" class="btn btn-success btn-lmedium btn-primary "/></div>
					
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
</html>