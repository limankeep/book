<?php /* Smarty version Smarty-3.1.6, created on 2017-05-06 20:50:55
         compiled from "../Apps/Admin/View\System\annoucement.html" */ ?>
<?php /*%%SmartyHeaderCode:30699590db4f34e9465-65124143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37cad93ffb61c0396d720ee011b2861b92cc1989' => 
    array (
      0 => '../Apps/Admin/View\\System\\annoucement.html',
      1 => 1494075052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30699590db4f34e9465-65124143',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_590db4f36a04b',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590db4f36a04b')) {function content_590db4f36a04b($_smarty_tpl) {?><!DOCTYPE html>
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
	<script charset="utf-8" src="<?php echo @KINEDIT_URL;?>
/kindeditor.js"></script>
	<script charset="utf-8" src="<?php echo @KINEDIT_URL;?>
/lang/zh-CN.js"></script>

 

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
    </style>
</head>
<body>
	<p>dadasdas</p>
	<div id="editor_id'">
		<form action="<?php echo @__MODULE__/'System'/'annoucement';?>
" method="post">
			<textarea name="content" style="width:700px;height:200px;visibility:hidden;">KindEditor</textarea>
		</form>
	</div>
	
</body>
</html>
<script>
 
    var editor;
        KindEditor.ready(function(K) {
            editor = K.create('#editor_id', {
                    resizeType : 2,
                    uploadJson : '<?php echo @KINEDIT_URL;?>
/php/upload_json.php' // 相对于当前页面的路径
            });
        });
	KindEditor.ready(function(K) {
                window.EditorObject = K.create('#editor_id');
        });
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