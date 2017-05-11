<?php /* Smarty version Smarty-3.1.6, created on 2017-05-11 09:16:19
         compiled from "../Apps/Admin/View\Borrow\addborrow.html" */ ?>
<?php /*%%SmartyHeaderCode:81305913bb6351ea14-04734439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd27b6269d2219b3e22e803fda49ab8636ba20aa5' => 
    array (
      0 => '../Apps/Admin/View\\Borrow\\addborrow.html',
      1 => 1494428823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81305913bb6351ea14-04734439',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5913bb636e14e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5913bb636e14e')) {function content_5913bb636e14e($_smarty_tpl) {?><!DOCTYPE html>
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
	<link rel="stylesheet" href="<?php echo @PUBLIC_URL;?>
/Css/easyform.css">
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
	<script src="<?php echo @PUBLIC_URL;?>
/Js/easyform.js"></script>

 

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


<form action="<?php echo @__SELF__;?>
" method="post" class="definewidth m20" enctype="multipart/form-data" id="form1">
<table class="table table-bordered table-hover definewidth m10">
    <tr>
        <td width="10%" class="tableleft">图书编号</td> 

        <td width="30%"><input type="text" name="book_id"  data-easyform="length:4 12;number;real-time;" data-message="编号必须为4到12数字" data-easytip="disappear:lost-focus;theme:blue;"/></td>

    </tr>
  
    <tr>
        <td class="tableleft">读者编号</td>
 
        <td width="30%"><input type="text" name="reader_id" data-easyform="length:4 12;number;real-time;" data-message="编号必须为4到12数字" data-easytip="disappear:lost-focus;theme:blue;"/></td>
    </tr>
 
 
    <tr>
        <td class="tableleft"></td>
        <td>
            <input href="#myModal" data-toggle="modal" type="submit" class="btn btn-primary"  id="tijiao" value="订阅">&nbsp;&nbsp;
			<a type="button" class="btn btn-success" name="backid" id="backid" href="<?php echo @__MODULE__;?>
/Borrow/borrowlist">返回列表</a>
        </td>
    </tr>  
</table>
<!-- 弹出框提示 -->
<!-- Button to trigger modal -->
<!--a href="#myModal" role="button" class="btn" data-toggle="modal">弹出框</a-->
 
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">系统提示</h3>
    </div>
    <div class="modal-body">
    <p>您确定借阅该图书吗？</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
        <input type="submit" class="btn btn-info" value="确定" id="tijiao22"></input>
    </div>
</div>
</form>


</body>
</html>
<script>
$(document).ready(function(){
	$('#form1').easyform();
});

</script><?php }} ?>