<?php /* Smarty version Smarty-3.1.6, created on 2017-05-11 08:56:53
         compiled from "../Apps/Admin/View\System\editannouncement.html" */ ?>
<?php /*%%SmartyHeaderCode:189135913b6d580fca0-74583470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11d55d3e640e297396388533541dc7f871b28a19' => 
    array (
      0 => '../Apps/Admin/View\\System\\editannouncement.html',
      1 => 1494123555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189135913b6d580fca0-74583470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5913b6d5896ed',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5913b6d5896ed')) {function content_5913b6d5896ed($_smarty_tpl) {?><!DOCTYPE HTML>
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
<form action="<?php echo @__MODULE__/'System'/'editannouncement';?>
" method="post">
	<input type="hidden" name="announcement_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['announcement_id'];?>
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