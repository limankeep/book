<?php /* Smarty version Smarty-3.1.6, created on 2017-05-02 19:29:22
         compiled from "../Apps/Admin/View\Book\addbook.html" */ ?>
<?php /*%%SmartyHeaderCode:2952459085fb739e354-21212397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6735c0d3ff2b9bb8d37ee83842783c9ef381334' => 
    array (
      0 => '../Apps/Admin/View\\Book\\addbook.html',
      1 => 1493724485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2952459085fb739e354-21212397',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59085fb76c83d',
  'variables' => 
  array (
    'role_checkbox' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59085fb76c83d')) {function content_59085fb76c83d($_smarty_tpl) {?><!DOCTYPE html>
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
	<link rel="stylesheet" type="text/css" href="<?php echo @PUBLIC_URL;?>
/Css/froala_editor.min.css" />
	<link href="<?php echo @PUBLIC_URL;?>
/Css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
	<script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/Js/bootstrap-select.js"></script>
	<script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/Js/froala_editor.min.js"></script>
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
" method="post" class="definewidth m20 form-control">
<table class="table table-bordered table-hover definewidth m10">
	<tr  class="col-xs-14">
        <td class="tableleft">图书名</td>
        <td><input type="text" name="book_name" class="form-control input-lg" /></td>
    </tr>
	<tr>
        <td class="tableleft">作者</td>
        <td><input type="text" name="author"/></td>
    </tr>
	<tr>
        <td class="tableleft">图书类别</td>
        <td><select class="selectpicker" name="book_type">
				<option>历史</option>
				<option>文学</option>
				<option>计算机</option>
				<option>语言</option>
				<option>物理</option>
			</select>
		</td>
    </tr>
    <tr>
        <td class="tableleft">出版社</td>
        <td><input type="text" name="press"/></td>
    </tr>
    <tr>
        <td class="tableleft">价格</td>
        <td><input type="text" name="price"/></td>
    </tr>
	<tr>
        <td class="tableleft">入库数目</td>
        <td><input type="text" name="total_amount"/></td>
    </tr>
	<tr>
        <td class="tableleft">当前数目</td>
        <td><input type="text" name="now_amount"/></td>
    </tr>
	<tr>
        <td class="tableleft">图书详情介绍</td>
        <!td><div rows="3" name="book_detail" id="edit"></div></td>
    </tr>
    <tr>
        <td class="tableleft">状态</td>
        <td>
            <input type="radio" name="status" value="1" checked/> 上架
           <input type="radio" name="status" value="0"/> 不上架
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
            <a href="#myModal" data-toggle="modal" type="submit" class="btn btn-primary" type="button">保存</a> &nbsp;&nbsp;
			<button type="button" class="btn btn-success" name="backid" id="backid">返回列表</button>
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

    $(function () {       
		$('#backid').click(function(){
				window.location.href="boolist.html";
		 });

</script><?php }} ?>