<?php /* Smarty version Smarty-3.1.6, created on 2017-05-11 09:21:28
         compiled from "../Apps/Admin/View\Article\articlelist.html" */ ?>
<?php /*%%SmartyHeaderCode:302225913bc98b62bf0-58621684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '346fec045fe951c52b1c1268b76e0d1a6fcbeee6' => 
    array (
      0 => '../Apps/Admin/View\\Article\\articlelist.html',
      1 => 1494425296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302225913bc98b62bf0-58621684',
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
  'unifunc' => 'content_5913bc98d27f5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5913bc98d27f5')) {function content_5913bc98d27f5($_smarty_tpl) {?><!DOCTYPE html>
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
    <input type="text" name="title" id="username"class="abc input-default" placeholder="">&nbsp;&nbsp;  
     时间：
	 <input type="text" name="start_time" id="countTimestart" onfocus="selecttime(1)" value="<?php echo $_smarty_tpl->tpl_vars['start_time']->value;?>
" size="17" class="date"  style="width:120px;">&nbsp;&nbsp; 
	 - 
	 <input type="text" name="end_time" id="countTimeend" onfocus="selecttime(2)" value="<?php echo $_smarty_tpl->tpl_vars['end_time']->value;?>
" size="17"  class="date" style="width:120px;">  &nbsp;&nbsp; 
    <button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp;
</form>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>文章编号</th>
        <th>作者</th>
        <th>文章名称</th>
        <th>用户名</th>
		<th>状态</th>
		<th>创建日期</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['article_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['author'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['v']->value['status']=='0'){?>未审核<?php }elseif($_smarty_tpl->tpl_vars['v']->value['status']=='1'){?>已审核<?php }elseif($_smarty_tpl->tpl_vars['v']->value['status']=='2'){?>审核不通过<?php }?></td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['create_time'];?>
</td>
            <td>
                <a href="<?php echo @__MODULE__;?>
/Article/reader/article_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['article_id'];?>
" type="btn" class="btn btn-primary">详情</a>
				<a href="<?php echo @__MODULE__;?>
/Article/xiajia/article_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['article_id'];?>
" type="btn" class="btn btn-warning">下架</a>
				<a href="<?php echo @__MODULE__;?>
/Article/del/article_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['article_id'];?>
" type="btn" class="btn btn-danger">删除</a>                
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