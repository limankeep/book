<?php /* Smarty version Smarty-3.1.6, created on 2017-05-11 08:59:09
         compiled from "../Apps/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:130625913b75d17c3f7-26921381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '354059abbd6bbc061365ed3db49b47139539c431' => 
    array (
      0 => '../Apps/Home/View\\Index\\index.html',
      1 => 1494344831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130625913b75d17c3f7-26921381',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'announcement_list' => 0,
    'v' => 0,
    'recommendlist' => 0,
    'k' => 0,
    'booklist' => 0,
    'booktypelist' => 0,
    'articlelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5913b75d369c8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5913b75d369c8')) {function content_5913b75d369c8($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>首页</title>
		<link rel="stylesheet" href="<?php echo @HOME_URL;?>
/pub-ui/css/pc-common.css" />
		<link rel="stylesheet" href="<?php echo @HOME_URL;?>
/pub-ui/asset/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo @HOME_URL;?>
/pub-ui/css/main.css" />
	</head>
	<body>
		<h3>阅读是你更快乐</h3>
		<ul class="header-nav tc fwb">
			<li class="active"><a href="javascript:;">首页</a></li>
			<li><a href="<?php echo @__MODULE__;?>
/Center/center">个人中心</a></li>
			<li><a href="<?php echo @__MODULE__;?>
/Book/booksearch">图书搜索</a></li>
			<li><a href="<?php echo @__MODULE__;?>
/Article/read_after">读后感</a></li>
			<li><a href="<?php echo @__MODULE__;?>
/About/aboutus">关于我们</a></li>
		</ul>
		<div id="myCarousel" class="carousel slide bg-success">
		    <!-- 轮播（Carousel）指标 -->
		    <ol class="carousel-indicators">
		        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		        <li data-target="#myCarousel" data-slide-to="1"></li>
		        <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>   
		    <!-- 轮播（Carousel）项目 -->
		    <div class="carousel-inner">
		        <div class="item active" style="height: 200px;">
		            <img src="/wp-content/uploads/2014/07/slide1.png" alt="First slide">
		            <div class="carousel-caption">标题 1</div>
		        </div>
		        <div class="item" style="height: 200px;">
		            <img src="/wp-content/uploads/2014/07/slide2.png" alt="Second slide">
		            <div class="carousel-caption">标题 2</div>
		        </div>
		        <div class="item" style="height: 200px;">
		            <img src="/wp-content/uploads/2014/07/slide3.png" alt="Third slide">
		            <div class="carousel-caption">标题 3</div>
		        </div>
		    </div>
		    <!-- 轮播（Carousel）导航 -->
		    <a class="carousel-control left" href="#myCarousel" 
		        data-slide="prev">&lsaquo;
		    </a>
		    <a class="carousel-control right" href="#myCarousel" 
		        data-slide="next">&rsaquo;
		    </a>
		</div>
		<hr />
		<div class="container-fluid">
			<div class="row content-box mgb-30">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 radius">
					<h4>公告</h4>
					
					<ul class="mgb-20">
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['announcement_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<p><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</p>
					<?php } ?>
					</ul>
					<a href="javascript:;" class="btn btn-default">view details</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 radius">
					<h4>书籍推荐</h4>
					<ul class="mgb-20">
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['recommendlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<li><a><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
、<?php echo $_smarty_tpl->tpl_vars['v']->value['book_name'];?>
</a></li>
						
					<?php } ?>
					</ul>
					<a href="javascript:;" class="btn btn-default">view details</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 radius">
					<h4>最新图书</h4>
					<ul class="mgb-20 list-num">
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['booklist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<li><a><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
、<?php echo $_smarty_tpl->tpl_vars['v']->value['book_name'];?>
</a></li>
						
					<?php } ?>
					</ul>
					<a href="javascript:;" class="btn btn-default">view details</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 radius">
					<h4>图书分类</h4>
					<ul class="mgb-20 list-num">
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['booktypelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<li><a><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
、<?php echo $_smarty_tpl->tpl_vars['v']->value['booktype_name'];?>
</a></li>
						
					<?php } ?>
					</ul>
					<a href="javascript:;" class="btn btn-default">view details</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 radius">
					<h4>最新文章</h4>
					<ul class="mgb-20 list-num">
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['articlelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<li><a><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
、<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
						
					<?php } ?>
					</ul>
					<a href="javascript:;" class="btn btn-default">view details</a>
				</div>
			</div>
		</div>
		<hr>
		<p class="tc">&copy;三峡枫叶图书馆<a href="#" class="mgl-10 mgr-10">关于我们</a>联系电话1234567890</p>
		<script type="text/javascript" src="<?php echo @HOME_URL;?>
/pub-ui/js/jquery.min.js" ></script>
		<script type="text/javascript" src="<?php echo @HOME_URL;?>
/pub-ui/asset/js/bootstrap.min.js" ></script>
		<script>
			$(function(){
				$(".carousel").carousel();
			});
			
		</script>
	</body>
</html>
<?php }} ?>