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
        .pagination{
            margin:30px;
        }

    </style>
</head>
<body>
<form class="form-inline definewidth m20" action="index.html" method="get">    
    借阅名称：
    <input type="text" name="username" id="username"class="abc input-default" placeholder="" value="">&nbsp;&nbsp; 
     时间：
    <input type="text" name="username" id="username"class="abc input-default" placeholder="" value="">&nbsp;&nbsp; 
     时间：
    <input type="text" name="username" id="username"class="abc input-default" placeholder="" value="">&nbsp;&nbsp;  
    <button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp; <button type="button" class="btn btn-success" id="addnew">新增借阅</button>
</form>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>借阅编号</th>
        <th>图书名称</th>
        <th>图书分类</th>
        <th>借阅人</th>
        <th>借阅人id</th>
        <th>借阅日期</th>
        <th>应该归还日期</th>
        <th>操作</th>
    </tr>
    </thead>
	     <tr>
            <td>2</td>
            <td>图书</td>
            <td>历史</td>
            <td>admin</td>
			<td>110</td>
			<td>20161212</td>
			<td>20161230</td>
            <td>
                <a href="edit.html">编辑</a>                
            </td>
        </tr>

</table>
<!--分页-->
<div class="pagination">
  <ul>
    <li><a href="#">前一页</a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">下一页</a></li>
  </ul>
</div>
</body>
</html>
<script>
    $(function () {
        

		$('#addnew').click(function(){

				window.location.href="addborrow.html";
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