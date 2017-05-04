<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.6, created on 2017-05-02 20:16:04
=======
<?php /* Smarty version Smarty-3.1.6, created on 2017-05-02 11:32:32
>>>>>>> f2ed431902361750018034b30002f461cba1e717
         compiled from "../Apps/Admin/View\Reader\readerlist.html" */ ?>
<?php /*%%SmartyHeaderCode:132565907fdd0219191-94228477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6af1a5b792d95f0838c1ab2f3aab2f15c7de0eef' => 
    array (
      0 => '../Apps/Admin/View\\Reader\\readerlist.html',
      1 => 1493727362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132565907fdd0219191-94228477',
  'function' => 
  array (
  ),
<<<<<<< HEAD
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5907fdd0335b6',
=======
>>>>>>> f2ed431902361750018034b30002f461cba1e717
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5907fdd0335b6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5907fdd0335b6')) {function content_5907fdd0335b6($_smarty_tpl) {?><!DOCTYPE html>
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
<form class="form-inline definewidth m20" action="<?php echo @__SELF__;?>
" method="post">    
    用户名称：
    <input type="text" name="uname" id="username"class="abc input-default" placeholder="" value="">&nbsp;&nbsp;  
    <button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp; <button type="button" class="btn btn-success" id="addnew">新增用户</button>
</form>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
		<th>读者编号</th>
        <th>用户id</th>
        <th>真实姓名</th>
        <th>性别</th>
		<th>家庭住址</th>
        <th>最后登录时间</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['reader_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['reader_name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['sex'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['reader_address'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['create_time'];?>
</td>
            <td>
                <a href="<?php echo @__MODULE__;?>
/Reader/edit/reader_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['reader_id'];?>
" type="button" class="edit_btn btn btn-primary" data-toggle="modal" id="edit_btn1" value="php">编辑</a>
                <button type="submit" class="btn btn-primary">详情</button>				
            </td>
        </tr>	
	<?php } ?>
</table>
<!--分页-->
<div class="pagination">

  <ul>
  <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

  </ul>
</div>
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