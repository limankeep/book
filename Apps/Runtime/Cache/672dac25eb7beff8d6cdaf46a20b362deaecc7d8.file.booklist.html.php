<?php /* Smarty version Smarty-3.1.6, created on 2017-05-11 08:52:00
         compiled from "../Apps/Admin/View\Book\booklist.html" */ ?>
<?php /*%%SmartyHeaderCode:252085913b5b06573f6-95140150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '672dac25eb7beff8d6cdaf46a20b362deaecc7d8' => 
    array (
      0 => '../Apps/Admin/View\\Book\\booklist.html',
      1 => 1494428008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252085913b5b06573f6-95140150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'start_time' => 0,
    'end_time' => 0,
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5913b5b08a6ea',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5913b5b08a6ea')) {function content_5913b5b08a6ea($_smarty_tpl) {?><!DOCTYPE html>
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
	<script type="text/javascript" src="/Public/Admin/Js/WdatePicker.js"></script>

 

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
<form class="form-inline definewidth m20" action="<?php echo @__SELF__;?>
" method="post">    
    图书名称：
    <input type="text" name="book_name" id="book_name"class="abc input-default">&nbsp;&nbsp;  
	时间：
	 <input type="text" name="start_time" id="countTimestart" onfocus="selecttime(1)" value="<?php echo $_smarty_tpl->tpl_vars['start_time']->value;?>
" size="17" class="date"  style="width:120px;">&nbsp;&nbsp; 
	 - 
	 <input type="text" name="end_time" id="countTimeend" onfocus="selecttime(2)" value="<?php echo $_smarty_tpl->tpl_vars['end_time']->value;?>
" size="17"  class="date" style="width:120px;">  &nbsp;&nbsp; 
    <button type="submit" class="btn btn-primary">查询</button>
</form>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>图书编号</th>
        <th>图书名称</th>
		<th>作者</th>
        <th>图书分类</th>
        <th>出版社</th>
		<th>价格</th>
        <th>入库总数</th>
		<th>当前数目</th>
		<th>操作</th>
    </tr>
    </thead>
	<?php if ($_smarty_tpl->tpl_vars['info']->value!=''){?>
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
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['author'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['book_type'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['press'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['total_amount'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['now_amount'];?>
</td>
            <td>
                <a href="<?php echo @__MODULE__;?>
/Book/edit/book_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['book_id'];?>
" type="button" class="edit_btn btn btn-info" data-toggle="modal">编辑</a>
				<a href="<?php echo @__MODULE__;?>
/Book/detail/book_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['book_id'];?>
" type="button" class="edit_btn btn btn-warning" data-toggle="modal">详情</a>
				<a href="<?php echo @__MODULE__;?>
/Book/del/book_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['book_id'];?>
" type="button" class="edit_btn btn btn-danger" data-toggle="modal" >删除</a>								
            </td>
        </tr>
	<?php } ?>
	<?php }elseif($_smarty_tpl->tpl_vars['info']->value==''){?>
	<tr><td>暂无数据</td><tr>
	<?php }?>
</table>
<!--分页-->
<div class="pagination">

  <ul>
  <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

  </ul>
</div>
	<!-- 弹出框提示 -->
<!-- Button to trigger modal -->
<!--a href="#myModal" role="button" class="btn" data-toggle="modal">弹出框</a-->
 
<!-- Modal -->
<!-- 二级弹窗图书修改页 -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">图书信息</h3>
    </div>
   <form action="<?php echo @__SELF__;?>
" method="post" class="definewidth m20">
<table class="table table-bordered table-hover definewidth m10">
	<tr>
        <td class="tableleft">图书名</td>
        <td><input type="text" name="book_name"/></td>
    </tr>
	<tr>
        <td class="tableleft">作者</td>
        <td><input type="text" name="author"/></td>
    </tr>
	<tr>
        <td class="tableleft">图书类别</td>
        <td><input type="text" name="book_type"/></td>
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
        <td><input type="text" name="book_detail" id="edit"/></td>
    </tr>
    <tr>
        <td class="tableleft">状态</td>
        <td>
            <input type="radio" name="status" value="1" checked/> 上架
           <input type="radio" name="status" value="0"/> 不上架
        </td>
    </tr>
    <tr>
        <td class="tableleft"></td>
        <td>
            <a href="#myModal2" data-toggle="modal" type="submit" class="btn btn-primary" type="button">保存</a> &nbsp;&nbsp;<button type="button" class="btn btn-success" name="backid" id="backid">返回列表</button>
        </td>
    </tr>
	<!-- 弹出框提示 -->
<!-- Button to trigger modal -->
<!--a href="#myModal" role="button" class="btn" data-toggle="modal">弹出框</a-->
 
<!-- Modal -->
<div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
	function selecttime(flag){
    if(flag==1){
        var endTime = $("#countTimeend").val();
        if(endTime != ""){
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss',maxDate:endTime});
        }else{
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'});
        }
    }else{
        var startTime = $("#countTimestart").val();
        if(startTime != ""){
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss',minDate:startTime});
        }else{
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'});
        }    
    }
}

</script><?php }} ?>