<?php /* Smarty version Smarty-3.1.6, created on 2017-05-11 09:15:32
         compiled from "../Apps/Admin/View\Reader\addreader.html" */ ?>
<?php /*%%SmartyHeaderCode:283245913ba570f2070-26078217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a713a0b6534aef1f39a32f4aea39cf801332a66' => 
    array (
      0 => '../Apps/Admin/View\\Reader\\addreader.html',
      1 => 1494465324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283245913ba570f2070-26078217',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5913ba5729805',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5913ba5729805')) {function content_5913ba5729805($_smarty_tpl) {?><!DOCTYPE html>
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
<form action="<?php echo @__MODULE__;?>
/Reader/add" method="post" class="definewidth m20" id="form1">
<table class="table table-bordered table-hover definewidth m10">
        <tr>
            <td width="10%" class="tableleft">登录名</td>
            <td><input type="text" name="uid" data-easyform="length:1 12;char-normal;real-time;" data-message="不能为空" data-easytip="disappear:lost-focus;theme:blue;"></td>
        </tr>
		<tr>
            <td width="10%" class="tableleft">姓名</td>
            <td><input type="text" name="reader_name" data-easyform="length:1 12;char-chinese;real-time;" data-message="不能为空" data-easytip="disappear:lost-focus;theme:blue;"/></td>
        </tr>
		<tr>
            <td width="10%" class="tableleft">性别</td>
            <td><input type="text" name="sex" data-easyform="length:1 12;char-normal;real-time;" data-message="不能为空" data-easytip="disappear:lost-focus;theme:blue;"/></td>
        </tr>
		<tr>
            <td width="10%" class="tableleft">家庭住址</td>
            <td><input type="text" name="reader_address" data-easyform="length:1 12;char-normal;real-time;" data-message="不能为空" data-easytip="disappear:lost-focus;theme:blue;"/></td>
        </tr>
		<tr>
            <td width="10%" class="tableleft">身份证号</td>
            <td><input type="text" name="reader_idcard" data-easyform="length:18;number;real-time;" data-message="格式不正确" data-easytip="disappear:lost-focus;theme:blue;"/></td>
        </tr>
		<tr>
            <td width="10%" class="tableleft">手机号</td>
            <td><input type="text" name="phonenum" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['phonenum'];?>
" data-easyform="length:13;email;real-time;" data-message="格式不正确" data-easytip="disappear:lost-focus;theme:blue;"/></td>
        </tr>
        <tr>
            <td class="tableleft">邮箱</td>
            <td><input type="text" name="email" data-easyform="email;real-time;" data-message="格式不正确" data-easytip="disappear:lost-focus;theme:blue;"/></td>
        </tr>
    <tr>
        <td class="tableleft"></td>
        <td>
            <button type="submit" class="btn btn-primary" type="button">保存</button> &nbsp;&nbsp;<button type="button" class="btn btn-success" name="backid" id="backid">返回列表</button>
        </td>
    </tr>
</table>
</form>
</body>
</html>
<script>

	$(document).ready(function(){
		$('#form1').easyform();
	});
</script><?php }} ?>