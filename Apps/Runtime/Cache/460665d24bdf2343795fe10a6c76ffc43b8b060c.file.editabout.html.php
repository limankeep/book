<?php /* Smarty version Smarty-3.1.6, created on 2017-05-07 10:23:52
         compiled from "../Apps/Admin/View\System\editabout.html" */ ?>
<?php /*%%SmartyHeaderCode:19121590e842c059965-21144436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '460665d24bdf2343795fe10a6c76ffc43b8b060c' => 
    array (
      0 => '../Apps/Admin/View\\System\\editabout.html',
      1 => 1494123799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19121590e842c059965-21144436',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_590e842c0d525',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590e842c0d525')) {function content_590e842c0d525($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <title>UMEDITOR 完整demo</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <link rel="stylesheet" href="<?php echo @UE_URL;?>
/themes/default/default.css" />
	<script charset="utf-8" src="<?php echo @UE_URL;?>
/kindeditor-min.js"></script>
	<script charset="utf-8" src="<?php echo @UE_URL;?>
/lang/zh_CN.js"></script>
    <style type="text/css">
        
    </style>
	<script>
			var editor;
			KindEditor.ready(function(K) {
				editor = K.create('textarea[name="content"]', {
					resizeType : 1,
					allowPreviewEmoticons : false,
					allowImageUpload : false,
					items : [
						'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
						'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
						'insertunorderedlist', '|', 'emoticons', 'image', 'link']
				});
			});
		</script>

</head>
<body>
<form action="<?php echo @__MODULE__/'System'/'editabout';?>
" method="post">
	<input type="hidden" name="editabout" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['about_id'];?>
" />
	<textarea id="editor_id" name="content" style="width:700px;height:300px;" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>
">
		<?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>

	</textarea>
	<input type="submit" value="提交">
</form>


<script type="text/javascript">
    
</script>

</body>
</html><?php }} ?>