<?php /* Smarty version Smarty-3.1.6, created on 2017-05-02 18:13:15
         compiled from "../Apps/Admin/View\Borrow\borrowlist.html" */ ?>
<?php /*%%SmartyHeaderCode:91555906ec021cd051-64553968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef198a45a6a515f2f35457f61ce8575576018763' => 
    array (
      0 => '../Apps/Admin/View\\Borrow\\borrowlist.html',
      1 => 1493719993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91555906ec021cd051-64553968',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5906ec02351c6',
  'variables' => 
  array (
    'start_time' => 0,
    'end_time' => 0,
    'nowtime' => 0,
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5906ec02351c6')) {function content_5906ec02351c6($_smarty_tpl) {?><!DOCTYPE html>
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
        .pagination{
            margin:30px;
        }
    
    </style>
</head>
<body>
<form class="form-inline definewidth m20" action="<?php echo @__SELF__;?>
" method="post">    
    图书名称：
    <input type="text" name="book_name" id="book_name"class="abc input-default" placeholder="" value="">&nbsp;&nbsp; 
     时间：
	 <input type="text" name="start_time" id="countTimestart" onfocus="selecttime(1)" value="<?php echo $_smarty_tpl->tpl_vars['start_time']->value;?>
" size="17" class="date"  style="width:120px;">&nbsp;&nbsp; 
	 - 
	 <input type="text" name="end_time" id="countTimeend" onfocus="selecttime(2)" value="<?php echo $_smarty_tpl->tpl_vars['end_time']->value;?>
" size="17"  class="date" style="width:120px;">  &nbsp;&nbsp; 
    <button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp; <button type="button" class="btn btn-success" id="addnew" >新增借阅</button>
</form>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>借阅编号</th>
        <th>图书名称</th>
        <th>图书分类</th>
        <th>借阅人</th>
        <th>借阅人id</th>
        <th>借阅日期<?php echo $_smarty_tpl->tpl_vars['nowtime']->value;?>
</th>
        <th>应该归还日期</th>
		<th>是否逾期</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['borrow_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['book_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['book_type'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['reader_id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['create_time'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['finish_time'];?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['v']->value['finish_time']){?>是<?php }elseif($_smarty_tpl->tpl_vars['v']->value['status']=="0"){?>否<?php }?></td>
            <td>
                <a href="edit.html" type="button" class=" btn btn-primary">归还<?php echo $_smarty_tpl->tpl_vars['nowtime']->value;?>
</a>
				
            </td>
        </tr>
	<?php } ?> 
	<?php }elseif($_smarty_tpl->tpl_vars['info']->value==''){?>
	<tr><td>暂无数据</td><tr>
	<?php }?>
</table>
<!--分页-->
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


//时间选择
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