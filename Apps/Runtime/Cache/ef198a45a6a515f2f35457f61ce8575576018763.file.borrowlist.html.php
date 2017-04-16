<?php /* Smarty version Smarty-3.1.6, created on 2017-04-16 21:09:30
         compiled from "../Apps/Admin/View\Borrow\borrowlist.html" */ ?>
<?php /*%%SmartyHeaderCode:2958958e910a40e60b3-37681576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef198a45a6a515f2f35457f61ce8575576018763' => 
    array (
      0 => '../Apps/Admin/View\\Borrow\\borrowlist.html',
      1 => 1492348167,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2958958e910a40e60b3-37681576',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58e910a41e421',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e910a41e421')) {function content_58e910a41e421($_smarty_tpl) {?><!DOCTYPE html>
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
        .pagination{
            margin:30px;
        }
    
    </style>
</head>
<body>
<form class="form-inline definewidth m20" action="index.html" method="get">    
    借阅名称：
    <input type="text" name="username" id="username"class="abc input-default" placeholder="" value="">&nbsp;&nbsp; 
     时间：
    <input type="text" name="username" id="username"class="abc input-default" placeholder="" value="">&nbsp;&nbsp; 
     时间：
    <input type="text" name="username" id="username"class="abc input-default" placeholder="" value="">&nbsp;&nbsp;  
    <button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp; <button type="button" class="btn btn-success" id="addnew" >新增借阅</button>
</form>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>借阅编号</th>
        <th>图书名称</th>
        <th>图书分类</th>
        <th>借阅人</th>
        <th>借阅人id</th>
        <th>借阅日期</th>
        <th>应该归还日期</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['borrow_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['book_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['book_type'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['reader_id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['create_time'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['finish_time'];?>
</td>
            <td>
                <a href="edit.html">编辑</a>                
            </td>
        </tr>
	<?php } ?> 
</table>
<!--分页-->
<div class="pagination">
  <ul>
    <li><a href="#">前一页</a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">下一页</a></li>
  </ul>
</div>
</body>
</html>
<script>

    $(function () {
        

		$('#addnew').click(function(){

				window.location.href="addborrow.html";
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