<?php /* Smarty version Smarty-3.1.6, created on 2017-05-11 08:52:02
         compiled from "../Apps/Admin/View\Book\booktype.html" */ ?>
<?php /*%%SmartyHeaderCode:116015913b5b20981b3-26584648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1918efacd4b3c6d151a35c9a9d14ec230a6fbf86' => 
    array (
      0 => '../Apps/Admin/View\\Book\\booktype.html',
      1 => 1494438235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116015913b5b20981b3-26584648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5913b5b2216a9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5913b5b2216a9')) {function content_5913b5b2216a9($_smarty_tpl) {?><!DOCTYPE html>
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
<form class="form-inline definewidth m20" action="" method="">    
 <a href="<?php echo @__MODULE__;?>
/Book/addbooktype" type="button" class="btn btn-success">新增分类</a>
</form>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>类别编号</th>
        <th>类别名</th>
        <th>类别描述</th>
        <th>添加时间</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['booktype_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['booktype_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['booktype_detail'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['create_time'];?>
</td>
            <td>
                <a type = "button" class= "btn btn-warning" href="edit.html">编辑</a>                
            </td>
        </tr>	
	<?php } ?>
</table>
</body>
</html>
<script>
 
</script><?php }} ?>