<?php /* Smarty version Smarty-3.1.6, created on 2017-04-16 23:03:37
         compiled from "../Apps/Admin/View\Book\booklist.html" */ ?>
<?php /*%%SmartyHeaderCode:1544158f383ac582e80-80333574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '672dac25eb7beff8d6cdaf46a20b362deaecc7d8' => 
    array (
      0 => '../Apps/Admin/View\\Book\\booklist.html',
      1 => 1492355014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1544158f383ac582e80-80333574',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58f383ac66408',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f383ac66408')) {function content_58f383ac66408($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo @PUBLIC_URL;?>
/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo @PUBLIC_URL;?>
/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo @PUBLIC_URL;?>
/Css/style.css" />
    <script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/Js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/Js/jquery.sorted.js"></script>
    <script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/Js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/Js/ckform.js"></script>
    <script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/Js/common.js"></script>

 

    <style type="text/css">
	
        body {
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }

	
    </style>
</head>
<body>
<form class="form-inline definewidth m20" action="index.html" method="get">    
    用户名称：
    <input type="text" name="username" id="username"class="abc input-default" placeholder="" value="">&nbsp;&nbsp;  
    <button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp; <button type="button" class="btn btn-success" id="addnew">新增用户</button>
</form>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>图书编号</th>
        <th>图书名称</th>
		<th>作者</th>
        <th>图书分类</th>
        <th>出版社</th>
		<th>价格</th>
        <th>入库总数</th>
		<th>当前数目</th>
		<th>操作</th>
    </tr>
    </thead>
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
            <td>
                <a href="edit.html" type="button" class="btn btn-primary">编辑</a>
				<a href="edit.html" type="button" class="btn btn-error">删除</a>                
            </td>
        </tr>
	<?php } ?>
</table>
</body>
</html>
<script>
    $(function () {
        

		$('#addnew').click(function(){

				window.location.href="add.html";
		 });


    });

	function del(id)
	{
		
		
		if(confirm("确定要删除吗？"))
		{
		
			var url = "index.html";
			
			window.location.href=url;		
		
		}
	
	
	
	
	}
</script><?php }} ?>