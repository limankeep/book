<?php /* Smarty version Smarty-3.1.6, created on 2017-04-09 00:49:03
         compiled from "../Apps/Admin/View\Reader\readerlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1290858e9147f478f16-95983484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6af1a5b792d95f0838c1ab2f3aab2f15c7de0eef' => 
    array (
      0 => '../Apps/Admin/View\\Reader\\readerlist.html',
      1 => 1491654784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1290858e9147f478f16-95983484',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Think' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58e9147f57600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e9147f57600')) {function content_58e9147f57600($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['Think']->value['const']['PUBLIC_URL'];?>
/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['Think']->value['const']['PUBLIC_URL'];?>
/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['Think']->value['const']['PUBLIC_URL'];?>
/Css/style.css" />
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Think']->value['const']['PUBLIC_URL'];?>
/Js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Think']->value['const']['PUBLIC_URL'];?>
/Js/jquery.sorted.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Think']->value['const']['PUBLIC_URL'];?>
/Js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Think']->value['const']['PUBLIC_URL'];?>
/Js/ckform.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Think']->value['const']['PUBLIC_URL'];?>
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
        <th>用户id</th>
        <th>用户名称</th>
        <th>真实姓名</th>
		<th>是否有逾期图书</th>
        <th>最后登录时间</th>
        <th>操作</th>
    </tr>
    </thead>
	     <tr>
            <td>2</td>
            <td>admin</td>
            <td>管理员</td>
			<td>you</td>
            <td></td>
            <td>
                <a href="edit.html">编辑</a> 
                <button type="submit" class="btn btn-primary">详情</button>				
            </td>
        </tr>	
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