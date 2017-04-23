<?php /* Smarty version Smarty-3.1.6, created on 2017-04-24 21:58:20
         compiled from "../Apps/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2840958fe047ce86ff8-79266398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '354059abbd6bbc061365ed3db49b47139539c431' => 
    array (
      0 => '../Apps/Home/View\\Index\\index.html',
      1 => 1493042193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2840958fe047ce86ff8-79266398',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58fe047d11c82',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fe047d11c82')) {function content_58fe047d11c82($_smarty_tpl) {?><!DOCTYPE html>
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
			<li><a href="center.html">个人中心</a></li>
			<li><a href="book-search.html">图书搜索</a></li>
			<li><a href="reader.html">读后感</a></li>
			<li><a href="aboutus.html">关于我们</a></li>
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
						<li>1、xxxxxxxxxxx</li>
						<li>2、xxxxxxxxxxxxxxxxx</li>
						<li>3、xxxxxxxxxxx</li>
						<li>4、xxxxxxxxxxxxxxxxxx</li>
						<li>5、我的儿子弘扬我的儿子弘扬我的儿子弘扬我的儿子弘扬我的儿子弘扬</li>
					</ul>
					<a href="javascript:;" class="btn btn-default">view details</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 radius">
					<h4>书籍推荐</h4>
					<ul class="mgb-20">
						<li>1、我的儿子弘扬</li>
						<li>2、我的孙儿弘扬</li>
						<li>3、我的弟弟弘扬</li>
						<li>4、XXXXXXXXXXXXXXXXXXXXXXXXXXXXX</li>
						<li>5、jingcai</li>
					</ul>
					<a href="javascript:;" class="btn btn-default">view details</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 radius">
					<h4>最新图书</h4>
					<ul class="mgb-20 list-num">
						<li>1、我的儿子弘扬</li>
						<li>2、我的孙儿弘扬</li>
						<li>3、我的弟弟弘扬</li>
						<li>4、XXXXXXXXXXXXXXXXXXXXXXXXXXXXX</li>
						<li>5、jingcai</li>
					</ul>
					<a href="javascript:;" class="btn btn-default">view details</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 radius">
					<h4>图书分类</h4>
					<ul class="mgb-20 list-num">
						<li>科学</li>
						<li>狗屎</li>
						<li>我的弟弟弘扬</li>
						<li>XXXXXXXXXXXXXXXXXXXXXXXXXXXXX</li>
						<li>jingcai</li>
					</ul>
					<a href="javascript:;" class="btn btn-default">view details</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 radius">
					<h4>最新文章</h4>
					<ul class="mgb-20 list-num">
						<li>1、我的儿子弘扬</li>
						<li>2、我的孙儿弘扬</li>
						<li>3、我的弟弟弘扬</li>
						<li>4、XXXXXXXXXXXXXXXXXXXXXXXXXXXXX</li>
						<li>5、jingcai</li>
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