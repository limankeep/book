<?php /* Smarty version Smarty-3.1.6, created on 2017-05-06 22:07:31
         compiled from "../Apps/Admin/View\System\editinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:1286590db60f19cf39-31782107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b149ea88253e320d010a875f3e6d9ce31778bcda' => 
    array (
      0 => '../Apps/Admin/View\\System\\editinfo.html',
      1 => 1494079641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1286590db60f19cf39-31782107',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_590db60f2b35f',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590db60f2b35f')) {function content_590db60f2b35f($_smarty_tpl) {?><!DOCTYPE html>
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
        <h3 id="myModalLabel">个人信息</h3>
    </div>
   <form action="<?php echo @__SELF__;?>
" method="post" class="definewidth m20">
<table class="table table-bordered table-hover definewidth m10">
                <input type="hidden" name="book_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['book_id'];?>
" />
	<tr>
        <td class="tableleft">姓名</td>
        <td><input type="text" name="book_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['book_name'];?>
"/></td>
    </tr>
	<tr>
        <td class="tableleft">身份</td>
        <td><input type="text" name="author" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['author'];?>
"/></td>
    </tr>
	<tr>
        <td class="tableleft">家庭住址</td>
        <td><input type="text" name="book_type" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['book_type'];?>
"/></td>
    </tr>
    <tr>
        <td class="tableleft">电子邮箱</td>
        <td><input type="text" name="press" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['press'];?>
"/></td>
    </tr>
    <tr>
        <td class="tableleft">联系电话</td>
        <td><input type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['price'];?>
"/></td>
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