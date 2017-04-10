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
<form action="index.html" method="post" class="definewidth m20">
<table class="table table-bordered table-hover definewidth m10">
    <tr>
        <td width="10%" class="tableleft">图书编号</td>
        <td><input type="text" name="bookid"/></td>
    </tr>
    <tr>
        <td class="tableleft">图书名</td>
        <td><input type="text" name="bookname"/></td>
    </tr>
	<tr>
        <td class="tableleft">图书类别</td>
        <td><input type="text" name="booktype"/></td>
    </tr>
    <tr>
        <td class="tableleft">出版社</td>
        <td><input type="text" name="pulishment"/></td>
    </tr>
    <tr>
        <td class="tableleft">价格</td>
        <td><input type="text" name="price"/></td>
    </tr>
	<tr>
        <td class="tableleft">入库数目</td>
        <td><input type="text" name="totalcount"/></td>
    </tr>
	<tr>
        <td class="tableleft">图书详情介绍</td>
        <td><input type="text" name="bookintroduce"/></td>
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
        <td><?php echo ($role_checkbox); ?></td>
    </tr>
    <tr>
        <td class="tableleft"></td>
        <td>
            <button type="submit" class="btn btn-primary" type="button">保存</button> &nbsp;&nbsp;<button type="button" class="btn btn-success" name="backid" id="backid">返回列表</button>
        </td>
    </tr>
</table>
</form>
</body>
</html>
<script>
    $(function () {       
		$('#backid').click(function(){
				window.location.href="index.html";
		 });

    });
</script>