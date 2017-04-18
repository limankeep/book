<?php /* Smarty version Smarty-3.1.6, created on 2017-04-18 19:56:46
         compiled from "../Apps/Admin/View\Borrow\addborrow.html" */ ?>
<?php /*%%SmartyHeaderCode:705358e91040a07435-60590796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd27b6269d2219b3e22e803fda49ab8636ba20aa5' => 
    array (
      0 => '../Apps/Admin/View\\Borrow\\addborrow.html',
      1 => 1492515346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '705358e91040a07435-60590796',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58e91040ba9a9',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e91040ba9a9')) {function content_58e91040ba9a9($_smarty_tpl) {?><!DOCTYPE html>
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

<form action="<?php echo @__SELF__;?>
" method="post" class="definewidth m20" enctype="multipart/form-data">
<table class="table table-bordered table-hover definewidth m10">
    <tr>
        <td width="10%" class="tableleft">图书编号</td>
        <td><input type="text" name="book_name"/></td>
    </tr>
    <tr>
        <td class="tableleft">图书名</td>
        <td><input type="text" name="book_id"/></td>
    </tr>
    <tr>
        <td class="tableleft">读者id</td>
        <td><input type="text" name="uid"/></td>
    </tr>
    <tr>
        <td class="tableleft">读者编号</td>
        <td ><input type="text" name="reader_id"/></td>
    </tr>
    <tr>
        <td width="10%" class="tableleft">现在添加的一行东西</td>
        <td width="30%"><input type="text" name="username"/></td>
    </tr>
    <tr>
        <td class="tableleft">状态</td>
        <td>
            <input type="radio" name="status" value="1" checked/> 启用
           <input type="radio" name="status" value="0"/> 禁用
        </td>
    </tr>
    <tr>
        <td class="tableleft">角色</td>
        <td>>33</td>
    </tr>
    <tr>
        <td class="tableleft"></td>
        <td>
            <a href="#myModal" data-toggle="modal" type="button" class="btn btn-primary"  id="tijiao">保存 </a>&nbsp;&nbsp;<a type="button" class="btn btn-success" name="backid" id="backid" href="<?php echo @__MODULE__;?>
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
        <button type="submit" class="btn btn-info">确定</button>
    </div>
</div>
</form>


</body>
</html>
<script>
    $(function () {       
		$('#backid').click(function(){
				window.location.href="list.html";
		 });

    });
    
</script><?php }} ?>