<?php /* Smarty version Smarty-3.1.6, created on 2017-05-07 10:36:33
         compiled from "../Apps/Admin/View\System\announcement.html" */ ?>
<?php /*%%SmartyHeaderCode:1901590dc9563b32a5-79721012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4b5cc25d558298d0169a2074b86ec214fa14206' => 
    array (
      0 => '../Apps/Admin/View\\System\\announcement.html',
      1 => 1494124585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1901590dc9563b32a5-79721012',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_590dc9564f0d5',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590dc9564f0d5')) {function content_590dc9564f0d5($_smarty_tpl) {?><!DOCTYPE html>
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
	<link rel="stylesheet" href="<?php echo @KINEDIT_URL;?>
/themes/default/default.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo @PUBLIC_URL;?>
/Css/style2.css" />
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
	
	<script src="<?php echo @UE_URL;?>
/ueditor.parse.js"></script>

 

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

		form {
				margin: 0;
			}
			textarea {
				display: block;
			}
		#editor_id{
			width:800px;
			
			padding:40px;
			margin-top:100px;
			margin-left:400px;
			border: 1px red solid;
		}
		#editor_id h2{
			
		}
		p{
			fontsize:30px;
		}
    </style>
</head>
<body>
	
	<div id="editor_id">
	<h2 class="text-center">公告</h2>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	<?php echo stripslashes(htmlspecialchars_decode($_smarty_tpl->tpl_vars['v']->value['content']));?>

	<?php } ?>
	<a href="<?php echo @__MODULE__;?>
/System/editannouncement/announcement_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['announcement_id'];?>
" class="btn btn-danger">重新编辑</a>
	</div>
	

</div>
</body>
</html>
<script>
 uParse('.text-center', {
    rootPath: '<?php echo @UE_URL;?>
/'
})
    var editor;
       
	

	
        //取得编辑器内容
        function getEditorData() {
				
                return EditorObject.html();
        }
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

</script><?php }} ?>