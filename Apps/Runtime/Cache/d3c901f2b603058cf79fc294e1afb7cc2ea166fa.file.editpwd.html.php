<?php /* Smarty version Smarty-3.1.6, created on 2017-05-11 12:58:08
         compiled from "../Apps/Admin/View\System\editpwd.html" */ ?>
<?php /*%%SmartyHeaderCode:110745913b7ce677150-50796121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3c901f2b603058cf79fc294e1afb7cc2ea166fa' => 
    array (
      0 => '../Apps/Admin/View\\System\\editpwd.html',
      1 => 1494478683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110745913b7ce677150-50796121',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5913b7ce76265',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5913b7ce76265')) {function content_5913b7ce76265($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo @PUBLIC_URL;?>
/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo @PUBLIC_URL;?>
/Css/style.css" />
	<link href="<?php echo @PUBLIC_URL;?>
/Css/easyform.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/Js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/Js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/Js/ckform.js"></script>
    <script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/Js/common.js"></script>

	<script src="<?php echo @PUBLIC_URL;?>
/Js/easyform.js"></script>
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
" method="post" class="definewidth m20" id="form1">
<table class="table table-bordered table-hover definewidth m10">
                <input type="hidden" name="manager_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['manager_id'];?>
" />

	<tr>
        <td class="tableleft">新密码</td>
        <td><input type="password" name="password" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['password'];?>
" id="psw1" data-easyform="length:6 16;"
                               data-message="密码必须为6—16位"
                               data-easytip="class:easy-blue;"/></td>
    </tr>
	<tr>
        <td class="tableleft">再次输入</td>
        <td><input type="password" name="newpwd" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['newpwd'];?>
" data-easyform="equal:#psw1;" data-message="输入不一致"
                               data-easytip="position:top;class:easy-blue;"/></td>
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
	$(document).ready(function(){
			$('#form1').easyform();
		});
</script>
<?php }} ?>