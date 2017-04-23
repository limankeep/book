<?php /* Smarty version Smarty-3.1.6, created on 2017-04-24 22:08:34
         compiled from "../Apps/Home/View\Book\book_search.html" */ ?>
<?php /*%%SmartyHeaderCode:2568258fe06e20a0302-60561926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec3bddd3ee902e4aba76f8640993d15da4cbe8b0' => 
    array (
      0 => '../Apps/Home/View\\Book\\book_search.html',
      1 => 1493042911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2568258fe06e20a0302-60561926',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58fe06e21d154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fe06e21d154')) {function content_58fe06e21d154($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>图书搜索</title>
		<link rel="stylesheet" href="<?php echo @HOME_URL;?>
/pub-ui/css/pc-common.css" />
		<link rel="stylesheet" href="<?php echo @HOME_URL;?>
/pub-ui/asset/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo @HOME_URL;?>
/pub-ui/css/main.css" />
	</head>
	<body class="book-search">
		<!--<header></header>-->
		<h3>阅读是你更快乐</h3>
		<ul class="header-nav tc fwb">
			<li><a href="index.html">首页</a></li>
			<li><a href="center.html">个人中心</a></li>
			<li class="active"><a href="javascript:;">图书搜索</a></li>
			<li><a href="reader.html">读后感</a></li>
			<li><a href="aboutus.html">关于我们</a></li>
		</ul>
		<div class="book-content mgt-20 radius">	        
			<div class="book-sidebar">
				<div class="collaspeContent" id="collaspeContent">
					<h4 data-collaspe="collaspe1">一级菜单</h4>
					<ul data-collaspe="collaspe1">
						<li><a href="javascript:;">二级菜单</a></li>
						<li><a href="javascript:;">二级菜单</a></li>
					</ul>
					<h4 data-collaspe="collaspe2">一级菜单</h4>
					<ul data-collaspe="collaspe2">
						<li><a href="javascript:;" class=" on">二级菜单</a></li>
						<li><a href="javascript:;">二级菜单</a></li>
					</ul>
					<h4 data-collaspe="collaspe3">一级菜单</h4>
					<ul data-collaspe="collaspe3">
						<li><a href="javascript:;">二级菜单</a></li>
					</ul>
					<h4 data-collaspe="collaspe5">一级菜单</h4>
					<ul data-collaspe="collaspe5">
						<li><a href="javascript:;">二级菜单</a></li>
					</ul>
				</div>
			</div>
			<div class="book-list pd-20">
				<div class="panel panel-default">
				    <div class="panel-heading">
				        <h3 class="panel-title">搜索</h3>
				    </div>
				    <div class="panel-body clearfix pd-10">		
			            <form role="form" class="form-horizontal form-inline">
				            <div class="form-group col-sm-5 col-xs-5">
							    <label class="control-label col-sm-4 col-xs-4 tc">图书编号</label>
							    <div class="col-sm-7 col-xs-7 pd-0">
							        <input type="text" name="num" class="form-control input-sm">
							    </div>
							</div>
							<div class="form-group col-sm-7 col-xs-7">
								<label class="control-label col-sm-2 col-xs-2 tc">时间</label>
							    <div class="col-sm-10 col-xs-10 pd-0">
							        <input type="text" name="start" class="form-control input-sm">
							        	-
							        <input type="text" name="end" class="form-control input-sm">
							    </div>
							</div>
							<button class="btn btn-primary btn-sm" type="button">查询</button>
						</form>
				    </div>
				</div>
				<table class="table table-hover tc mgt-20">
		        	<thead>
		        		<tr>
		        			<th class="tc fwb">图书编号</th>
			        		<th class="tc fwb">图书名称</th>
			        		<th class="tc fwb">分类</th>
			        		<th class="tc fwb">作者</th>
			        		<th class="tc fwb">价格</th>
			        		<th class="tc fwb">总数量</th>
			        		<th class="tc fwb">在馆数量</th>
			        		<th class="tc fwb">上架时间</th>
		        		</tr>
		        	</thead>
		        	<tr>
		        		<td>1231231</td>
		        		<td>金瓶梅</td>
		        		<td>111</td>
		        		<td>李二狗子</td>
		        		<td>22.2</td>
		        		<td>333</td>
		        		<td>111</td>
		        		<td>2012-12-12</td>
		        	</tr>
		        	<tr>
		        		<td>1231231</td>
		        		<td>金瓶梅</td>
		        		<td>111</td>
		        		<td>李二狗子</td>
		        		<td>22.2</td>
		        		<td>333</td>
		        		<td>111</td>
		        		<td>2012-12-12</td>
		        	</tr>
		        	<tr>
		        		<td>1231231</td>
		        		<td>金瓶梅</td>
		        		<td>111</td>
		        		<td>李二狗子</td>
		        		<td>22.2</td>
		        		<td>333</td>
		        		<td>111</td>
		        		<td>2012-12-12</td>
		        	</tr>
		        	<tr>
		        		<td>1231231</td>
		        		<td>金瓶梅</td>
		        		<td>111</td>
		        		<td>李二狗子</td>
		        		<td>22.2</td>
		        		<td>333</td>
		        		<td>111</td>
		        		<td>2012-12-12</td>
		        	</tr>
		        	<tr>
		        		<td>1231231</td>
		        		<td>金瓶梅</td>
		        		<td>111</td>
		        		<td>李二狗子</td>
		        		<td>22.2</td>
		        		<td>333</td>
		        		<td>111</td>
		        		<td>2012-12-12</td>
		        	</tr>
		        	<tr>
		        		<td>1231231</td>
		        		<td>金瓶梅</td>
		        		<td>111</td>
		        		<td>李二狗子</td>
		        		<td>22.2</td>
		        		<td>333</td>
		        		<td>111</td>
		        		<td>2012-12-12</td>
		        	</tr>
		        	<tr>
		        		<td>1231231</td>
		        		<td>金瓶梅</td>
		        		<td>111</td>
		        		<td>李二狗子</td>
		        		<td>22.2</td>
		        		<td>333</td>
		        		<td>111</td>
		        		<td>2012-12-12</td>
		        	</tr>
		        	<tr>
		        		<td>1231231</td>
		        		<td>金瓶梅</td>
		        		<td>111</td>
		        		<td>李二狗子</td>
		        		<td>22.2</td>
		        		<td>333</td>
		        		<td>111</td>
		        		<td>2012-12-12</td>
		        	</tr>
		        	<tr>
		        		<td>1231231</td>
		        		<td>金瓶梅</td>
		        		<td>111</td>
		        		<td>李二狗子</td>
		        		<td>22.2</td>
		        		<td>333</td>
		        		<td>111</td>
		        		<td>2012-12-12</td>
		        	</tr>
		        	<tr>
		        		<td>1231231</td>
		        		<td>金瓶梅</td>
		        		<td>111</td>
		        		<td>李二狗子</td>
		        		<td>22.2</td>
		        		<td>333</td>
		        		<td>111</td>
		        		<td>2012-12-12</td>
		        	</tr>
		        </table>
		        <div class="clearfix">
		        	<p class="pull-left">显示<label>1-10</label>条，共<label>20</label>条</p>
		        	<ul class="pagination pull-right">
						<li class="previous"><a href="javascript:;">&laquo;</a></li>
						<li class="active"><a href="javascript:;">1</a></li>
						<li><a href="javascript:;">2</a></li>
						<li><a href="javascript:;">3</a></li>
						<li><a href="javascript:;">4</a></li>
						<li><a href="javascript:;">5</a></li>
						<li class="next"><a hhref="javascript:;">&raquo;</a></li>
					</ul>
		        </div>
			</div>
		</div>
		<hr>
		<p class="tc">&copy;三峡枫叶图书馆<a href="#" class="mgl-10 mgr-10">关于我们</a>联系电话1234567890</p>
		<script type="text/javascript" src="<?php echo @HOME_URL;?>
/pub-ui/js/jquery.min.js" ></script>
		<script type="text/javascript" src="<?php echo @HOME_URL;?>
/pub-ui/js/ui.js" ></script>
		<script>
		
			$(function(){
				$("#collaspeContent").mcollaspe({contentWrapper:"#collaspeContent ul",activeName:"collaspe1"});
			})
			
		</script>
	</body>
</html>

<?php }} ?>