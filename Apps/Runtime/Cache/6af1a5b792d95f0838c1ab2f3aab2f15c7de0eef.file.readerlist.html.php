<?php /* Smarty version Smarty-3.1.6, created on 2017-05-11 09:11:50
         compiled from "../Apps/Admin/View\Reader\readerlist.html" */ ?>
<?php /*%%SmartyHeaderCode:228395913ba56805239-60141011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6af1a5b792d95f0838c1ab2f3aab2f15c7de0eef' => 
    array (
      0 => '../Apps/Admin/View\\Reader\\readerlist.html',
      1 => 1494423327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '228395913ba56805239-60141011',
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
  'unifunc' => 'content_5913ba56a0304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5913ba56a0304')) {function content_5913ba56a0304($_smarty_tpl) {?><!DOCTYPE html>
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
    用户名称：
    <input type="text" name="reader_name" id="username" class="abc input-default" placeholder="" value="">&nbsp;&nbsp;  
    时间：
	 <input type="text" name="start_time" id="countTimestart" onfocus="selecttime(1)" value="<?php echo $_smarty_tpl->tpl_vars['start_time']->value;?>
" size="17" class="date"  style="width:120px;">&nbsp;&nbsp; 
	 - 
	 <input type="text" name="end_time" id="countTimeend" onfocus="selecttime(2)" value="<?php echo $_smarty_tpl->tpl_vars['end_time']->value;?>
" size="17"  class="date" style="width:120px;">  &nbsp;&nbsp; 
    <button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp;
	<button type="button" class="btn btn-success" id="addnew">新增用户</button>
</form>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
		<th>读者编号</th>
        <th>用户id</th>
        <th>真实姓名</th>
        <th>性别</th>
		<th>家庭住址</th>
        <th>最后登录时间</th>
        <th>操作</th>
    </tr>
    </thead>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	     <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['reader_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['reader_name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['sex'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['reader_address'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['create_time'];?>
</td>
            <td>
                <a href="<?php echo @__MODULE__;?>
/Reader/edit/reader_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['reader_id'];?>
" type="button" class="edit_btn btn btn-info" data-toggle="modal" id="edit_btn1" value="php">编辑</a>
				<a href="<?php echo @__MODULE__;?>
/Reader/detail/reader_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['reader_id'];?>
" type="button" class="edit_btn btn btn-warning" data-toggle="modal" id="edit_btn1" value="php">详情</a>
				<a href="<?php echo @__MODULE__;?>
/Reader/del/reader_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['reader_id'];?>
" type="button" class="edit_btn btn btn-danger" data-toggle="modal" id="edit_btn1" value="php">删除</a>				
            </td>
        </tr>	
	<?php } ?>
</table>
<!--分页-->
<div class="pagination">

  <ul>
  <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

  </ul>
</div>
</body>
</html>
<script>

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