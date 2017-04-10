<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo (PUBLIC_URL); ?>/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo (PUBLIC_URL); ?>/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo (PUBLIC_URL); ?>/Css/style.css" />
    <script type="text/javascript" src="<?php echo (PUBLIC_URL); ?>/Js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo (PUBLIC_URL); ?>/Js/jquery.sorted.js"></script>
    <script type="text/javascript" src="<?php echo (PUBLIC_URL); ?>/Js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo (PUBLIC_URL); ?>/Js/ckform.js"></script>
    <script type="text/javascript" src="<?php echo (PUBLIC_URL); ?>/Js/common.js"></script>

 

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
<form class="form-inline definewidth m20" action="index.html" method="get">    
    用户名称：
    <input type="text" name="username" id="username"class="abc input-default" placeholder="" value="">&nbsp;&nbsp;  
    <button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp; <button type="button" class="btn btn-success" id="addnew">新增用户</button>
</form>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>图书编号</th>
        <th>图书名称</th>
        <th>图书分类</th>
        <th>出版社</th>
        <th>入库总数</th>
		<th>当前数目</th>
		<th>操作</th>
    </tr>
    </thead>
	     <tr>
            <td>2</td>
            <td>php操作手册</td>
            <td>计算机</td>
            <td>中华出版社</td>
			<td>10</td>
			<td>5</td>
            <td>
                <a href="edit.html">编辑</a>                
            </td>
        </tr>	
</table>
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
</script>