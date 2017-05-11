<?php /* Smarty version Smarty-3.1.6, created on 2017-05-11 09:04:09
         compiled from "../Apps/Home/View\About\aboutus.html" */ ?>
<?php /*%%SmartyHeaderCode:3225913b8899b58a6-30958824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be136c7340e9e0721cfb991218f7b1869f83485a' => 
    array (
      0 => '../Apps/Home/View\\About\\aboutus.html',
      1 => 1494344820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3225913b8899b58a6-30958824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5913b889a7746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5913b889a7746')) {function content_5913b889a7746($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>关于我们</title>
		<link rel="stylesheet" href="<?php echo @HOME_URL;?>
/pub-ui/css/pc-common.css" />
		<link rel="stylesheet" href="<?php echo @HOME_URL;?>
/pub-ui/asset/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo @HOME_URL;?>
/pub-ui/css/main.css" />
	</head>
	<body>
		<h3>阅读是你更快乐</h3>
		<ul class="header-nav tc fwb">
			<li><a href="<?php echo @__MODULE__;?>
/Index/index">首页</a></li>
			<li><a href="<?php echo @__MODULE__;?>
/Center/center">个人中心</a></li>
			<li><a href="<?php echo @__MODULE__;?>
/Book/booksearch">图书搜索</a></li>
			<li><a href="<?php echo @__MODULE__;?>
/Article/read_after">读后感</a></li>
			<li class="active"><a href="javascript:;">关于我们</a></li>
		</ul>
		<hr />
		<!--主体-->
		<div class="us-content pd-30">
			<div class="content-box mg-30 pd-20">
				<h3 class="text-center">关于我们</h3>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<?php echo stripslashes(htmlspecialchars_decode($_smarty_tpl->tpl_vars['v']->value['content']));?>

				<?php } ?>
				<p class="ti-2">本系统由三峡学院信管班的同学制作，翻版必究</p>
				
			</div>
		</div>
		<!--主体-->
		<hr>
		<p class="tc">&copy;三峡枫叶图书馆<a href="#" class="mgl-10 mgr-10">关于我们</a>联系电话1234567890</p>
		<script type="text/javascript" src="<?php echo @HOME_URL;?>
/pub-ui/js/jquery.min.js" ></script>
		<script type="text/javascript" src="<?php echo @HOME_URL;?>
/pub-ui/asset/js/bootstrap.min.js" ></script>
		<script>			
		</script>
	</body>
</html>
<?php }} ?>