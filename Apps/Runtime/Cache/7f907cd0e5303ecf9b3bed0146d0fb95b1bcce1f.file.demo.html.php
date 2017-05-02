<?php /* Smarty version Smarty-3.1.6, created on 2017-05-01 09:45:33
         compiled from "../Apps/Admin/View\System\demo.html" */ ?>
<?php /*%%SmartyHeaderCode:299225906933d7a9294-59871747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f907cd0e5303ecf9b3bed0146d0fb95b1bcce1f' => 
    array (
      0 => '../Apps/Admin/View\\System\\demo.html',
      1 => 1493600732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299225906933d7a9294-59871747',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5906933d8f179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5906933d8f179')) {function content_5906933d8f179($_smarty_tpl) {?><!DOCTYPE html>
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
	<script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/Js/layer.js"></script>
 

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
<form class="form-inline definewidth m20" action="<?php echo @__MODULE__/'System'/'demo';?>
" method="post" id="demo">    
    用户名称：
    <input type="text" name="book_name" id="book_name"class="abc input-default" placeholder="" value="">&nbsp;&nbsp;  
    <button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp; <button type="button" class="btn btn-success" id="addnew">新增用户</button>
</form>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>图书编号</th>
        <th>图书名称</th>
        <th>图书分类</th>
        <th>出版社</th>
        <th>图书简介</th>
		<th>当前数目</th>
		<th>操作</th>
    </tr>
    </thead>
	<?php if ($_smarty_tpl->tpl_vars['info']->value!=0){?>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	     <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['book_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['book_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['book_type'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['press'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['book_detail'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['create_time'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['finish_time'];?>
</td>
            <td >
                <a href="<?php echo @__MODULE__;?>
/System/edit/book_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['book_id'];?>
" type="button" class="edit_btn btn btn-primary" data-toggle="modal" id="edit_btn1" value="php">编辑</a>
				<a href="edit.html" type="button" class="btn btn-error">删除</a>                
            </td>
        </tr>
	<?php } ?> 
	<?php }else{ ?>
	<tr><td>暂无数据</td><tr>
	<?php }?>
	
</table>
<div class="pagination">
  <!--ul>
    <li><a href="#">前一页</a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">下一页</a></li>
  </ul-->
  <ul>
  <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

  </ul>
</div>


</body>
</html>
<script>
    $(function () {
        

		$('#addnew').click(function(){

				window.location.href="add.html";
		 });


    });
 
	function del(id)
	{
		
		
		if(confirm("确定要删除吗？"))
		{
		
			var url = "index.html";
			
			window.location.href=url;		
		
		}
	}
	$('#edit_btn1').click(function(){
		$('#myModal').show();
	});

</script><?php }} ?>