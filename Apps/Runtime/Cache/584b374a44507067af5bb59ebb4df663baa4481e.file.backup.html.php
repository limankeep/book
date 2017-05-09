<?php /* Smarty version Smarty-3.1.6, created on 2017-05-06 19:40:01
         compiled from "../Apps/Admin/View\System\backup.html" */ ?>
<?php /*%%SmartyHeaderCode:10183590db6113266a8-57379571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '584b374a44507067af5bb59ebb4df663baa4481e' => 
    array (
      0 => '../Apps/Admin/View\\System\\backup.html',
      1 => 1493603429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10183590db6113266a8-57379571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_590db61146c6e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590db61146c6e')) {function content_590db61146c6e($_smarty_tpl) {?><!DOCTYPE html>
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
        <h3 id="myModalLabel">图书信息</h3>
    </div>
   <form action="<?php echo @__SELF__;?>
" method="post" class="definewidth m20">
<table class="table table-bordered table-hover definewidth m10">
                <input type="hidden" name="book_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['book_id'];?>
" />
	<tr>
        <td class="tableleft">图书名</td>
        <td><input type="text" name="book_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['book_name'];?>
"/></td>
    </tr>
	<tr>
        <td class="tableleft">作者</td>
        <td><input type="text" name="author" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['author'];?>
"/></td>
    </tr>
	<tr>
        <td class="tableleft">图书类别</td>
        <td><input type="text" name="book_type" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['book_type'];?>
"/></td>
    </tr>
    <tr>
        <td class="tableleft">出版社</td>
        <td><input type="text" name="press" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['press'];?>
"/></td>
    </tr>
    <tr>
        <td class="tableleft">价格</td>
        <td><input type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['price'];?>
"/></td>
    </tr>
	<tr>
        <td class="tableleft">入库数目</td>
        <td><input type="text" name="total_amount" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['total_amount'];?>
 "/></td>
    </tr>
	<tr>
        <td class="tableleft">当前数目</td>
        <td><input type="text" name="now_amount" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['total_amount'];?>
"/></td>
     </tr>
	<tr>
        <td class="tableleft">图书详情介绍</td>
        <td><input type="text" name="book_detail"  value="<?php echo $_smarty_tpl->tpl_vars['info']->value['book_detail'];?>
"/></td>
    </tr>
    <tr>
        <td class="tableleft">状态</td>
        <td>
            <input type="radio" name="status" value="1" checked/> 上架
           <input type="radio" name="status" value="0"/> 不上架
        </td>
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