<?php /* Smarty version Smarty-3.1.6, created on 2017-05-09 16:30:59
         compiled from "../Apps/Admin/View\Reader\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2437259117569d66fb0-82141881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51a8deedaa1d43708b9214c5f30379359956f1f8' => 
    array (
      0 => '../Apps/Admin/View\\Reader\\edit.html',
      1 => 1494318625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2437259117569d66fb0-82141881',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59117569e3440',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59117569e3440')) {function content_59117569e3440($_smarty_tpl) {?><!DOCTYPE html>
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
<input type="hidden" name="reader_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['reader_id'];?>
" />

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
            <td><input type="text" name="reader_idcard" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['reader_idcard'];?>
"/></td>
        </tr>
        <tr>
            <td class="tableleft">邮箱</td>
            <td><input type="text" name="reader_email" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['reader_email'];?>
"/></td>
        </tr>

        <tr>
            <td class="tableleft"></td>
            <td>
                <button type="submit" class="btn btn-primary" type="button">保存</button>&nbsp;&nbsp;<button type="button" class="btn btn-success" name="backid" id="backid">返回列表</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<script>
   
</script><?php }} ?>