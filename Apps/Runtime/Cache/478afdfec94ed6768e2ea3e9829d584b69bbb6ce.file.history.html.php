<?php /* Smarty version Smarty-3.1.6, created on 2017-04-23 10:57:54
         compiled from "../Apps/Admin/View\Typebook\history.html" */ ?>
<?php /*%%SmartyHeaderCode:1769758fc1832a9fd59-29737651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '478afdfec94ed6768e2ea3e9829d584b69bbb6ce' => 
    array (
      0 => '../Apps/Admin/View\\Typebook\\history.html',
      1 => 1492676231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1769758fc1832a9fd59-29737651',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58fc1832b973a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fc1832b973a')) {function content_58fc1832b973a($_smarty_tpl) {?><!DOCTYPE html>
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