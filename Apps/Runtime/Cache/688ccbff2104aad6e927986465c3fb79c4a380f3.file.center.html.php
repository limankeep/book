<?php /* Smarty version Smarty-3.1.6, created on 2017-05-06 15:45:44
         compiled from "../Apps/Home/View\Center\center.html" */ ?>
<?php /*%%SmartyHeaderCode:259590d5771ce5829-89697714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '688ccbff2104aad6e927986465c3fb79c4a380f3' => 
    array (
      0 => '../Apps/Home/View\\Center\\center.html',
      1 => 1494056704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259590d5771ce5829-89697714',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_590d577204179',
  'variables' => 
  array (
    'readerinfo' => 0,
    'v' => 0,
    'borrowinfo' => 0,
    'articleinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590d577204179')) {function content_590d577204179($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>个人中心</title>
		<link rel="stylesheet" href="<?php echo @HOME_URL;?>
/pub-ui/css/pc-common.css" />
		<link rel="stylesheet" href="<?php echo @HOME_URL;?>
/pub-ui/asset/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo @HOME_URL;?>
/pub-ui/css/main.css" />
	</head>
	<body>
		<!--<header></header>-->
		<h3>阅读是你更快乐</h3>
		<ul class="header-nav tc fwb">
			<li><a href="../Index/index.html">首页</a></li>
			<li class="active"><a href="JavaScript:;">个人中心</a></li>
			<li><a href="../Book/booksearch.html">图书搜索</a></li>
			<li><a href="../Reader/reader.html">读后感</a></li>
			<li><a href="../About/aboutus.html">关于我们</a></li>
		</ul>
		<div class="center-content pdl-10 pdr-30 pdb-30 mgt-20 radius">
			<div class="reader-info pdt-10 noborder">
				<img src="<?php echo @HOME_URL;?>
/pub-ui/img/2.png" class="reader-img block mgb-20" alt="touxiang"/>
				<p>id：<span class="reader-id">李二狗</span></p>
				<p>上次登录时间:&nbsp;<span class="reader-text">2015-12-22</span></p>
				<ul class="center-list radius mgt-40">
					<li class="active">我的信息</li>
					<li>我的借阅</li>
					<li>我的文章</li>
					<li>修改密码</li>
				</ul>
			</div>
			<div class="center-box vt">
				<div class="read-search clearfix mgt-40 mgb-40">
		            <div class="input-group fr">
		                <input type="text" class="form-control">
		                <span class="input-group-btn">
		                    <button class="btn btn-primary" type="button">搜索</button>
		                </span>
		            </div>
		        </div>
		        <div class="wrapper pd-30">
			        <div class="center-info">
			        	<table class="table mgt-20 ">
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['readerinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				        		<tr>
				        			<td class=" fwb tableleft">读者编号:<?php echo $_smarty_tpl->tpl_vars['v']->value['reader_id'];?>
</td>
				        		</tr>
								<tr>
									<td class=" fwb tableleft">登录名:<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</td>	
								</tr>
								<tr>
									<td class=" fwb tableleft">姓名:<?php echo $_smarty_tpl->tpl_vars['v']->value['reader_name'];?>
</td>
								</tr>
								<tr>
									<td class=" fwb tableleft">性别:<?php echo $_smarty_tpl->tpl_vars['v']->value['sex'];?>
</td>
								</tr>
								<tr>
									<td class=" fwb tableleft">家庭地址:<?php echo $_smarty_tpl->tpl_vars['v']->value['reader_address'];?>
</td>
								</tr>
								<tr>
									<td class=" fwb tableleft">电子邮箱:<?php echo $_smarty_tpl->tpl_vars['v']->value['reader_email'];?>
</td>
								</tr>
								<tr>
									<td class=" fwb tableleft">身份证号:<?php echo $_smarty_tpl->tpl_vars['v']->value['reader_idcard'];?>
</td>
								</tr>
								<tr>
									<td class=" fwb tableleft">可借图书总数:<?php echo $_smarty_tpl->tpl_vars['v']->value['total_amount'];?>
</td>
								</tr>
								<tr>
									<td class=" fwb tableleft">已借图书数:<?php echo $_smarty_tpl->tpl_vars['v']->value['now_amount'];?>
</td>
								</tr>
								<tr>
									<td class=" fwb tableleft">上次登录时间:<?php echo $_smarty_tpl->tpl_vars['v']->value['create_time'];?>
</td>
								</tr>
								<?php } ?>
				        	
				        	
				        </table>
				        <!--div class="clearfix">
				        	<ul class="pagination pull-right">
								<li class="previous"><a href="javascript:;">&laquo;</a></li>
								<li class="active"><a href="javascript:;">1</a></li>
								<li><a href="javascript:;">2</a></li>
								<li><a href="javascript:;">3</a></li>
								<li><a href="javascript:;">4</a></li>
								<li><a href="javascript:;">5</a></li>
								<li class="next"><a hhref="javascript:;">&raquo;</a></li>
							</ul>
				        </div-->
			        </div>
			        <div class="center-info">
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
					        		<th class="tc fwb">借阅时间</th>
				        		</tr>
				        	</thead>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['borrowinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				        	<tr>
							
				        		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['book_id'];?>
</td>
				        		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['book_name'];?>
</td>
				        		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['book_type'];?>
</td>
				        		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
</td>
				        		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
</td>
				        		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
</td>
				        		<td>111</td>
				        		<td>2012-12-12</td>
				        	</tr>
				        	<?php } ?>
				        </table>
				        <div class="clearfix">
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
			        <div class="center-info">
			        	<table class="table table-hover tc mgt-20">
				        	<thead>
							
				        		<tr>
				        			
					        		<th class="tc fwb">文章标题</th>
					        		
					        		<th class="tc fwb">作者</th>
					        		<th class="tc fwb">创建时间</th>
					        		
				        		</tr>
				        	</thead>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['articleinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				        	<tr>
				        		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
				        		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['author'];?>
</td>
				        		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['create_time'];?>
</td>
				        		
				        	</tr>
				        	<?php } ?>
				        </table>
				        <div class="clearfix">
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
			        <div class="center-info">
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
				        	
				        </table>
				        <div class="clearfix">
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
			</div>
		</div>
		<hr>
		<p class="tc">&copy;三峡枫叶图书馆<a href="#" class="mgl-10 mgr-10">关于我们</a>联系电话1234567890</p>
		<script type="text/javascript" src="<?php echo @HOME_URL;?>
/pub-ui/js/jquery.min.js" ></script>
		<script type="text/javascript" src="<?php echo @HOME_URL;?>
/pub-ui/js/ui.js" ></script>
		<script type="text/javascript" src="<?php echo @HOME_URL;?>
/pub-ui/asset/js/bootstrap.min.js" ></script>
	</body>
</html>
<?php }} ?>