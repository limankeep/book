<?php /* Smarty version Smarty-3.1.6, created on 2017-05-04 17:07:00
         compiled from "../Apps/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1349659094d1aebbe88-51359852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '354059abbd6bbc061365ed3db49b47139539c431' => 
    array (
      0 => '../Apps/Home/View\\Index\\index.html',
      1 => 1493878085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1349659094d1aebbe88-51359852',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59094d1b0b3c4',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59094d1b0b3c4')) {function content_59094d1b0b3c4($_smarty_tpl) {?><!DOCTYPE html>
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
			<li><a href="../Center/center.html">个人中心</a></li>
			<li><a href="../Book/booksearch.html">图书搜索</a></li>
			<li><a href="../Reader/reader.html">读后感</a></li>
			<li><a href="../About/aboutus.html">关于我们</a></li>
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
						<p>应我校图书馆和研究生院的邀请，科睿唯安公司高级数据分析师阳小涛先生将来我校做专题学术讲座，欢迎广大师生参加！报告的具体安排如下：
						报告题目：Web of Science和ESI数据库的分析和利用——评价学科绩效、追踪前沿研究报 告 人：阳小涛报告时间：2017年5月2日（周二）16:30</p>
					</ul>
					<a href="javascript:;" class="btn btn-default">view details</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 radius">
					<h4>书籍推荐</h4>
					<ul class="mgb-20">
						<li>1、php入门指南</li>
						<li>2、大明王朝</li>
						<li>3、我的兄弟顺溜</li>
						<li>4、java从入门到放弃</li>
						<li>5、万历十五年</li>
					</ul>
					<a href="javascript:;" class="btn btn-default">view details</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 radius">
					<h4>最新图书</h4>
					<ul class="mgb-20 list-num">
						<li>1、格林童话</li>
						<li>2、安徒生童话</li>
						<li>3、伊索寓言</li>
						<li>4、斗破苍穹</li>
						<li>5、高数</li>
					</ul>
					<a href="javascript:;" class="btn btn-default">view details</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 radius">
					<h4>图书分类</h4>
					<ul class="mgb-20 list-num">
						<li>文学</li>
						<li>计算机</li>
						<li>小说</li>
						<li>历史</li>
						<li>生物</li>
					</ul>
					<a href="javascript:;" class="btn btn-default">view details</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 radius">
					<h4>最新文章</h4>
					<ul class="mgb-20 list-num">
						<li>1、我的兄弟叫顺溜</li>
						<li>2、我为什么喜欢这篇文章</li>
						<li>3、大唐王朝的新衰</li>
						<li>4、狄公断案</li>
						<li>5、后现代的哥德巴赫</li>
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