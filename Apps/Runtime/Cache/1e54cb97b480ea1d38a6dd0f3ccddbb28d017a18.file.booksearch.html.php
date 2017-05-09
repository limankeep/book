<?php /* Smarty version Smarty-3.1.6, created on 2017-05-07 10:59:38
         compiled from "../Apps/Home/View\Book\booksearch.html" */ ?>
<?php /*%%SmartyHeaderCode:20153590d5803de6967-19740842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e54cb97b480ea1d38a6dd0f3ccddbb28d017a18' => 
    array (
      0 => '../Apps/Home/View\\Book\\booksearch.html',
      1 => 1494125976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20153590d5803de6967-19740842',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_590d580408413',
  'variables' => 
  array (
    'start_time' => 0,
    'end_time' => 0,
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590d580408413')) {function content_590d580408413($_smarty_tpl) {?><!DOCTYPE html>
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
		<script type="text/javascript" src="/Public/Admin/Js/WdatePicker.js"></script>
	</head>
	<body class="book-search">
		<!--<header></header>-->
		<h3>阅读是你更快乐</h3>
		<ul class="header-nav tc fwb">
			<li><a href="../Index/index.html">首页</a></li>
			<li><a href="../Center/center.html">个人中心</a></li>
			<li class="active"><a href="javascript:;">图书搜索</a></li>
			<li><a href="../Reader/reader.html">读后感</a></li>
			<li><a href="../About/aboutus.html">关于我们</a></li>
		</ul>
		<div class="book-content mgt-20 radius">	        
			<div class="book-sidebar">
				<div class="collaspeContent" id="collaspeContent">
					<h4 data-collaspe="collaspe1">图书搜索</h4>
					
					<h4 data-collaspe="collaspe2">一级菜单</h4>
					<ul data-collaspe="collaspe2">
						<li><a href="javascript:;" class=" on">二级菜单</a></li>
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
			            <form role="form" class="form-horizontal form-inline" action="<?php echo @__SELF__;?>
" method="post">
				            <div class="form-group col-sm-5 col-xs-5">
							    <label class="control-label col-sm-4 col-xs-4 tc">图书名称</label>
							    <div class="col-sm-7 col-xs-7 pd-0">
							        <input type="text" name="book_name" id="book_name" class="form-control input-sm">
							    </div>
							</div>
							<div class="form-group col-sm-7 col-xs-7">
								<label class="control-label col-sm-2 col-xs-2 tc">时间</label>
							    <div class="col-sm-10 col-xs-10 pd-0">
							        <input type="text" name="start_time" id="countTimestart" onfocus="selecttime(1)" value="<?php echo $_smarty_tpl->tpl_vars['start_time']->value;?>
" size="17" class="date form-control input-sm"  style="width:120px;">
							        	-
							        <input type="text" name="end_time" id="countTimeend" onfocus="selecttime(2)" value="<?php echo $_smarty_tpl->tpl_vars['end_time']->value;?>
" size="17"  class="date form-control input-sm" style="width:120px;">
							    </div>
							</div>
							<button class="btn btn-primary btn-sm" type="submit">查询</button>
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
		        	<?php if ($_smarty_tpl->tpl_vars['info']->value!=''){?>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['v']->value['book_id'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['v']->value['book_name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['v']->value['book_type'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['v']->value['press'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['v']->value['total_amount'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['v']->value['now_amount'];?>
</td>
							
						</tr>
					<?php } ?>
					<?php }elseif($_smarty_tpl->tpl_vars['info']->value==''){?>
						<tr><td>暂无数据</td><tr>
					<?php }?>

				
		        	
		        </table>
		        <!--分页-->
				<div class="pagination clearfix">

				<ul>
					<?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

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
			function selecttime(flag){
				if(flag==1){
					var endTime = $("#countTimeend").val();
					if(endTime != ""){
						WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss',maxDate:endTime});
					}else{
						WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'});
					}
				}else{
					var startTime = $("#countTimestart").val();
					if(startTime != ""){
						WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss',minDate:startTime});
					}else{
						WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'});
					}    
				}
			}
			
		</script>
	</body>
</html>

<?php }} ?>