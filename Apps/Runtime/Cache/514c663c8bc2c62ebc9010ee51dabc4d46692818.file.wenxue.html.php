<?php /* Smarty version Smarty-3.1.6, created on 2017-04-09 15:45:28
         compiled from "../Apps/Admin/View\Typebook\wenxue.html" */ ?>
<?php /*%%SmartyHeaderCode:2489858e9e698ef93d9-14119050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '514c663c8bc2c62ebc9010ee51dabc4d46692818' => 
    array (
      0 => '../Apps/Admin/View\\Typebook\\wenxue.html',
      1 => 1491654776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2489858e9e698ef93d9-14119050',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Think' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58e9e6990d5d3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e9e6990d5d3')) {function content_58e9e6990d5d3($_smarty_tpl) {?><!DOCTYPE html>
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
        <th>图书编号</th>
        <th>图书名称</th>
        <th>出版社</th>
        <th>入库总数</th>
		<th>入库日期</th>
		<th>当前数目</th>
		<th>操作</th>
    </tr>
    </thead>
	     <tr>
            <td>2</td>
            <td>php操作手册</td>
            <td>计算机</td>
            <td>中华出版社</td>
			<td>10</td>
			<td>5</td>
            <td>
                <a href="edit.html">编辑</a>                
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