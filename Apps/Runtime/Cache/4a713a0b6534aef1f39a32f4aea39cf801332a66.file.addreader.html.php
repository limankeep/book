<?php /* Smarty version Smarty-3.1.6, created on 2017-04-09 00:49:07
         compiled from "../Apps/Admin/View\Reader\addreader.html" */ ?>
<?php /*%%SmartyHeaderCode:414958e91483c55be2-54609750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a713a0b6534aef1f39a32f4aea39cf801332a66' => 
    array (
      0 => '../Apps/Admin/View\\Reader\\addreader.html',
      1 => 1491654787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '414958e91483c55be2-54609750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Think' => 0,
    'role_checkbox' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58e91483e2495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e91483e2495')) {function content_58e91483e2495($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['Think']->value['const']['PUBLIC_URL'];?>
/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['Think']->value['const']['PUBLIC_URL'];?>
/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['Think']->value['const']['PUBLIC_URL'];?>
/Css/style.css" />
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Think']->value['const']['PUBLIC_URL'];?>
/Js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Think']->value['const']['PUBLIC_URL'];?>
/Js/jquery.sorted.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Think']->value['const']['PUBLIC_URL'];?>
/Js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Think']->value['const']['PUBLIC_URL'];?>
/Js/ckform.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Think']->value['const']['PUBLIC_URL'];?>
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
<form action="index.html" method="post" class="definewidth m20">
<table class="table table-bordered table-hover definewidth m10">
    <tr>
        <td width="10%" class="tableleft">登录名</td>
        <td><input type="text" name="username"/></td>
    </tr>
    <tr>
        <td class="tableleft">密码</td>
        <td><input type="password" name="password"/></td>
    </tr>
    <tr>
        <td class="tableleft">真实姓名</td>
        <td><input type="text" name="realname"/></td>
    </tr>
    <tr>
        <td class="tableleft">邮箱</td>
        <td><input type="text" name="email"/></td>
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
        <td><?php echo $_smarty_tpl->tpl_vars['role_checkbox']->value;?>
</td>
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