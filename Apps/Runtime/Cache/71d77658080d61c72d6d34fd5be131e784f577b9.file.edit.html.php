<?php /* Smarty version Smarty-3.1.6, created on 2017-05-11 12:49:09
         compiled from "../Apps/Admin/View\Book\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:152105913ebe19b09c0-22779445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71d77658080d61c72d6d34fd5be131e784f577b9' => 
    array (
      0 => '../Apps/Admin/View\\Book\\edit.html',
      1 => 1494478140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152105913ebe19b09c0-22779445',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5913ebe1b6d27',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5913ebe1b6d27')) {function content_5913ebe1b6d27($_smarty_tpl) {?><!DOCTYPE html>
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
	<link rel="stylesheet" type="text/css" href="<?php echo @PUBLIC_URL;?>
/Css/bootstrap-select.css" />
	<link rel="stylesheet" href="<?php echo @PUBLIC_URL;?>
/Css/easyform.css">
    <script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/Js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/Js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/Js/bootstrap-select.js"></script>
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
" method="post" class="definewidth m20 form-control" id="form1">
<input type="hidden" name="book_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['book_id'];?>
" />
<table class="table table-bordered table-hover definewidth m10">
	<tr  class="col-xs-14">
        <td class="tableleft">图书名</td>
        <td><input id="book_name" type="text" name="book_name" class="form-control input-lg" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['book_name'];?>
" data-easyform="length:1 20;char-normal;real-time;" data-message="不能为空" data-easytip="disappear:lost-focus;theme:blue;"/></td>
    </tr>
	<tr>
        <td class="tableleft">作者</td>
        <td><input id="author" type="text" name="author" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['author'];?>
" data-easyform="length:1 20;char-normal;real-time;" data-message="不能为空" data-easytip="disappear:lost-focus;theme:blue;"/></td>
    </tr>
	<tr>
        <td class="tableleft">图书类别</td>

        <td><select class="selectpicker" name="book_type" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['book_type'];?>
">
				<option><?php echo $_smarty_tpl->tpl_vars['info']->value['book_type'];?>
</option>
			</select>
		</td>
    </tr>
    <tr>
        <td class="tableleft">出版社</td>
        <td><input id="press" type="text" name="press" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['press'];?>
" data-easyform="length:1 12;char-normal;real-time;" data-message="不能为空" data-easytip="disappear:lost-focus;theme:blue;"/></td>
    </tr>
    <tr>
        <td class="tableleft">价格</td>
        <td><input id="price" type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['price'];?>
" data-easyform="length:1 12;number;real-time;" data-message="不能为空,必须为数字" data-easytip="disappear:lost-focus;theme:blue;"/></td>
    </tr>
	<tr>
        <td class="tableleft">入库数目</td>
        <td><input  id="total_amount" type="text" name="total_amount" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['total_amount'];?>
" data-easyform="length:1 3;number;real-time;" data-message="不能为空,必须为数字" data-easytip="disappear:lost-focus;theme:blue;" id="total_amount"/></td>
    </tr>
	<tr>
        <td class="tableleft">当前数目</td>
        <td><input  id="now_amount" type="text" name="now_amount" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['now_amount'];?>
" data-easyform="number;equal:#total_amount;real-time;" data-message="不能为空,必须为数字" data-easytip="disappear:lost-focus;theme:blue;"/></td>
    </tr>
	<tr>
        <td class="tableleft">图书详情介绍</td>
        <td><input  type="text" rows="3" name="book_detail" id="edit" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['book_detail'];?>
" data-easyform="length:1 30;char-normal;real-time;" data-message="不能为空" data-easytip="disappear:lost-focus;theme:blue;"></td>
    </tr>

    <tr>
        <td class="tableleft"></td>
        <td>
            <button type="submit" class="btn btn-info" id="subbtn">确定</button>
			<a type="button" class="btn btn-success" name="backid" id="backid">返回列表</a>
        </td>
    </tr>
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
    <p>您确定保存该图书吗？</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
        <button type="submit" class="btn btn-info">确定</button>
    </div>
</div>
</table>
</form>
<!-- 加载编辑器的容器 -->
    <!--script id="container" name="content" type="text/plain">
        这里写你的初始化内容
    </script>
    <!-- 配置文件 -->
    <!--script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/Js/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <!--script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/Js/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <!--script type="text/javascript">
        var ue = UE.getEditor('container');
    </script-->
</body>
</body>
</html>

<script>
$(document).ready(function(){
		
	var $book_name = $('#book_name'),
		$author = $('#author'),
		$press = $('#press'),
		$price = $('#price'),
		$total_amount = $('#total_amount'),
		$now_amount = $('#now_amount'),
		$edit = $('#edit');
	var ef = $('#form1').easyform();
	$('#form1')[0].onsubmit = function () { return false };
	$('#subbtn')[0].onclick = function () {
		$book_name.trigger('blur');
		$author.trigger('blur');
		$press.trigger('blur');
		$total_amount.trigger('blur');
		$now_amount.trigger('blur');
		$edit.trigger('blur');
		$price.trigger('blur');
		if($book_name.val().length == 0) {
			$book_name.trigger('blur');
			return;
		}
		if($author.val().length == 0) {
			$author.trigger('blur');
			return;
		}
		if($press.val().length == 0) {
			$press.trigger('blur');
			return;
		}
		if($price.val().length == 0) {
			$price.trigger('blur');
			return;
		}
		if($total_amount.val().length == 0) {
			$total_amount.trigger('blur');
			return;
		}
		if($now_amount.val().length == 0) {
			$now_amount.trigger('blur');
			return;
		}
		if($edit.val().length == 0) {
			$edit.trigger('blur');
			return;
		}
		$('#form1')[0].submit();
	};
});

</script><?php }} ?>