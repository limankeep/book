<?php /* Smarty version Smarty-3.1.6, created on 2017-05-11 12:24:35
         compiled from "../Apps/Admin/View\Book\addbook.html" */ ?>
<?php /*%%SmartyHeaderCode:262955913b5d6c14e83-71787113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6735c0d3ff2b9bb8d37ee83842783c9ef381334' => 
    array (
      0 => '../Apps/Admin/View\\Book\\addbook.html',
      1 => 1494476671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262955913b5d6c14e83-71787113',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5913b5d6e45c1',
  'variables' => 
  array (
    'booktypeinfo' => 0,
    'v' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5913b5d6e45c1')) {function content_5913b5d6e45c1($_smarty_tpl) {?><!DOCTYPE html>
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
	<link href="<?php echo @PUBLIC_URL;?>
/Css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo @PUBLIC_URL;?>
/Css/easyform.css">
    <script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/Js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/Js/jquery.sorted.js"></script>
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
" method="post" class="definewidth m20 form-control" id ="form1">
<table class="table table-bordered table-hover definewidth m10">
	<tr  class="col-xs-14">
        <td class="tableleft">图书名</td>
        <td><input id="book_name" type="text" name="book_name" class="form-control input-lg" data-easyform="length:1 12;char-normal;real-time;" data-message="不能为空" data-easytip="disappear:lost-focus;theme:blue;"/></td>
    </tr>
	<tr>
        <td class="tableleft">作者</td>
        <td><input id="author" type="text" name="author" data-easyform="length:1 12;char-normal;real-time;" data-message="不能为空" data-easytip="disappear:lost-focus;theme:blue;"/></td>
    </tr>
	<tr>
        <td class="tableleft">图书类别</td>

        <td><select class="selectpicker" name="book_type">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['booktypeinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<option><?php echo $_smarty_tpl->tpl_vars['v']->value['booktype_name'];?>
</option>
				
		<?php } ?>
			</select>
		</td>
    </tr>
    <tr>
        <td class="tableleft">出版社</td>
        <td><input id="press" type="text" name="press" data-easyform="length:1 12;char-normal;real-time;" data-message="不能为空" data-easytip="disappear:lost-focus;theme:blue;"/></td>
    </tr>
    <tr>
        <td class="tableleft">价格</td>
        <td><input id="price" type="text" name="price" data-easyform="length:1 12;number;real-time;" data-message="不能为空,必须为数字" data-easytip="disappear:lost-focus;theme:blue;"/></td>
    </tr>
	<tr>
        <td class="tableleft">入库数目</td>
        <td><input type="text" name="total_amount"  data-easyform="length:1 3;number;real-time;" data-message="不能为空,必须为数字" data-easytip="disappear:lost-focus;theme:blue;" id="total_amount"/></td>
    </tr>
	<tr>
        <td class="tableleft">当前数目</td>
        <td><input id="now_amount" type="text" name="now_amount" data-easyform="length:1 3;number;equal:#total_amount;real-time;" data-message="不能为空,必须为数字" data-easytip="disappear:lost-focus;theme:blue;"/></td>
    </tr>
	<tr>
        <td class="tableleft">图书详情介绍</td>
        <td><input type="text"  name="book_detail" id="edit" data-easyform="length:1 30;char-normal;real-time;" data-message="不能为空" data-easytip="disappear:lost-focus;theme:blue;"></td>
    </tr>

    <tr>
        <td class="tableleft"></td>
        <td>
			<!--a href="#myModal" data-toggle="modal" type="submit" class="btn btn-primary" type="button">保存</a--> &nbsp;&nbsp;
			<button id="subbtn" type="submit" class="btn btn-info subbtn">保存</button>
			<button type="button" class="btn btn-success" name="backid" id="backid">返回列表</button>
			<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

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
    <p class="hint">您确定保存该图书吗？</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
        <!--button type="submit" class="btn btn-info subbtn">确定</button-->
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
	//$('#form1')[0].onsubmit = function() {
		//return false;
	//};
	//console.log(1234);
	//$('#form1 .subbtn').on('click', function() {
		//console.log('124');
		//$('#myModal hint').text('号卡激活');	////return false;
	//});
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