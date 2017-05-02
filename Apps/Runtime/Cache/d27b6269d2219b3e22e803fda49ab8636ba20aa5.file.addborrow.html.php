<?php /* Smarty version Smarty-3.1.6, created on 2017-05-02 13:16:01
         compiled from "../Apps/Admin/View\Borrow\addborrow.html" */ ?>
<?php /*%%SmartyHeaderCode:32046590730e8b7bb61-57470761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd27b6269d2219b3e22e803fda49ab8636ba20aa5' => 
    array (
      0 => '../Apps/Admin/View\\Borrow\\addborrow.html',
      1 => 1493702155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32046590730e8b7bb61-57470761',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_590730e8c797f',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590730e8c797f')) {function content_590730e8c797f($_smarty_tpl) {?><!DOCTYPE html>
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
        <td width="30%"><input type="text" name="book_id"  data-easyform="length:2 8;char-normal;real-time;" data-message="编号必须为必须为12位的英文字母或数字" data-easytip="disappear:lost-focus;theme:blue;"/></td>
    </tr>
  
    <tr>
        <td class="tableleft">读者编号</td>
        <td width="30%"><input type="text" name="reader_id" data-easyform="length:2 8;char-normal;real-time;" data-message="用户名必须为12位的shuzi " data-easytip="disappear:lost-focus;theme:blue;"/></td>
    </tr>
 
 
    <tr>
        <td class="tableleft"></td>
        <td>
            <input href="#myModal2222" data-toggle="modal" type="submit" class="btn btn-primary"  id="tijiao" value="提交申请">&nbsp;&nbsp;
			<a type="button" class="btn btn-success" name="backid" id="backid" href="<?php echo @__MODULE__;?>
/Borrow/borrowlist">返回列表</a>
        </td>
    </tr>
	<tr>
        <td colspan="2" align="center">
        <input type="submit" value="添加">
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
        <input type="submit" class="btn btn-info" value="确定"></input>
    </div>
</div>
</form>


</body>
</html>
<script>
$("#tijiao").click(function(){
	

        $("#form1").easyform();


});


    
</script><?php }} ?>