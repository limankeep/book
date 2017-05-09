<?php /* Smarty version Smarty-3.1.6, created on 2017-05-09 15:50:06
         compiled from "../Apps/Admin/View\Reader\addreader.html" */ ?>
<?php /*%%SmartyHeaderCode:29191591174aec27268-14337193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a713a0b6534aef1f39a32f4aea39cf801332a66' => 
    array (
      0 => '../Apps/Admin/View\\Reader\\addreader.html',
      1 => 1493729138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29191591174aec27268-14337193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_591174aedb63a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591174aedb63a')) {function content_591174aedb63a($_smarty_tpl) {?><!DOCTYPE html>
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
" method="post" class="definewidth m20">
<table class="table table-bordered table-hover definewidth m10">
        <tr>
            <td width="10%" class="tableleft">登录名</td>
            <td><input type="text" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['uid'];?>
"/></td>
        </tr>
		<tr>
            <td width="10%" class="tableleft">姓名</td>
            <td><input type="text" name="reader_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['reader_name'];?>
"/></td>
        </tr>
		<tr>
            <td width="10%" class="tableleft">性别</td>
            <td><input type="text" name="sex" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sex'];?>
"/></td>
        </tr>
		<tr>
            <td width="10%" class="tableleft">家庭住址</td>
            <td><input type="text" name="reader_address" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['reader_address'];?>
"/></td>
        </tr>
		<tr>
            <td width="10%" class="tableleft">身份证号</td>
            <td><input type="text" name="reader_IDcard" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['reader_IDcard'];?>
"/></td>
        </tr>
        <tr>
            <td class="tableleft">邮箱</td>
            <td><input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['email'];?>
"/></td>
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
    $(function () {       
		$('#backid').click(function(){
				window.location.href="index.html";
		 });

    });
</script><?php }} ?>