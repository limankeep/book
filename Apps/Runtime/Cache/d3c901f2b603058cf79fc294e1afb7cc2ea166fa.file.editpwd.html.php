<?php /* Smarty version Smarty-3.1.6, created on 2017-05-06 22:04:40
         compiled from "../Apps/Admin/View\System\editpwd.html" */ ?>
<?php /*%%SmartyHeaderCode:9185590db60abef404-59187042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3c901f2b603058cf79fc294e1afb7cc2ea166fa' => 
    array (
      0 => '../Apps/Admin/View\\System\\editpwd.html',
      1 => 1494079476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9185590db60abef404-59187042',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_590db60ad3338',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590db60ad3338')) {function content_590db60ad3338($_smarty_tpl) {?><!DOCTYPE html>
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
	<script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/Js/layer.js"></script>
</head>
<body>
<!-- 弹出框提示 -->
<!-- Button to trigger modal -->
<!--a href="#myModal" role="button" class="btn" data-toggle="modal">弹出框</a-->
 
<!-- Modal -->
<!-- 二级弹窗图书修改页 -->
<div id="myModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">密码修改</h3>
    </div>
   <form action="<?php echo @__SELF__;?>
" method="post" class="definewidth m20">
<table class="table table-bordered table-hover definewidth m10">
                <input type="hidden" name="book_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['book_id'];?>
" />
	<tr>
        <td class="tableleft">原始密码</td>
        <td><input type="text" name="book_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['book_name'];?>
"/></td>
    </tr>
	<tr>
        <td class="tableleft">新密码</td>
        <td><input type="text" name="author" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['author'];?>
"/></td>
    </tr>
	<tr>
        <td class="tableleft">再次输入</td>
        <td><input type="text" name="author" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['author'];?>
"/></td>
    </tr>
    </tr>
    <tr>
        <td class="tableleft"></td>
        <td>
            <a href="#myModal2" data-toggle="modal" type="submit" class="btn btn-primary" type="button">保存</a> &nbsp;&nbsp;
			<a href="<?php echo @__MODULE__;?>
/System/demo" type="button" class="btn btn-success" name="backid" id="backid">返回列表</a>
        </td>
    </tr>
	<!-- 弹出框提示 -->
<!-- Button to trigger modal -->
<!--a href="#myModal" role="button" class="btn" data-toggle="modal">弹出框</a-->
 
<!-- Modal -->
<div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">系统提示</h3>
    </div>
    <div class="modal-body">
    <p>您确定保存该图书吗？</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
        <button type="submit" class="btn btn-info">确定</button>
    </div>
</div>
</table>
</form>
</div>
</body>
</html>
<script>
  
</script>
<?php }} ?>