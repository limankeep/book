<?php /* Smarty version Smarty-3.1.6, created on 2017-04-09 00:30:42
         compiled from "../Apps/Admin/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2973258e910327a3045-99526588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8afd212666d42f9374922f923bebdbec4280e350' => 
    array (
      0 => '../Apps/Admin/View\\Index\\index.html',
      1 => 1491669040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2973258e910327a3045-99526588',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58e91032869ed',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e91032869ed')) {function content_58e91032869ed($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
 <head>
  <title>三峡枫叶图书馆后台管理系统</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="<?php echo @PUBLIC_URL;?>
/assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo @PUBLIC_URL;?>
/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo @PUBLIC_URL;?>
/assets/css/main-min.css" rel="stylesheet" type="text/css" />
 </head>
 <body>

  <div class="header">
    
      <div class="dl-title">
        <a href="http://www.builive.com" title="文档库地址" target="_blank"><!-- 仅仅为了提供文档的快速入口，项目中请删除链接 -->
          <span class="lp-title-port">枫叶</span><span class="dl-title-text">图书后台管理</span>
        </a>
      </div>

    <div class="dl-log">欢迎您，<span class="dl-log-user">管理员</span><a href="###" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
  </div>
   <div class="content">
    <div class="dl-main-nav">
      <div class="dl-inform"><div class="dl-inform-title">贴心小秘书<s class="dl-inform-icon dl-up"></s></div></div>
      <ul id="J_Nav"  class="nav-list ks-clear">
        <li class="nav-item dl-selected"><div class="nav-item-inner nav-home">借阅管理</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-order">图书管理</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-inventory">读者管理</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-article">文章管理</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-system">系统管理</div></li>
      </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
   </div>
  <script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/assets/js/jquery-1.8.1.min.js"></script>
  <script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/assets/js/bui.js"></script>
  <script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
/assets/js/config.js"></script>

  <script>
  
    BUI.use('common/main',function(){
      var config = [{
          id:'Borrow', 
          homePage : 'borrowlist',
          menu:[{
              text:'借阅管理',
              items:[
                {id:'borrowlist',text:'借阅列表',href:'../Borrow/borrowlist.html',closeable : false},
                {id:'addborrow',text:'图书借阅',href:'../Borrow/addborrow.html'},
                {id:'returnborrow',text:'图书归还',href:'../Borrow/returnborrow.html'},
                {id:'yuqibook',text:'逾期图书',href:'../Borrow/list.html'}
              ]
            }]
          },{
            id:'Book',
            homePage : 'booklist',
            menu:[{
                text:'图书列表',
                items:[
                  {id:'booklist',text:'图书列表',href:'../Book/booklist.html'},
                  {id:'addbook',text:'新增图书',href:'../Book/addbook.html'},
                  {id:'booktype',text:'图书分类',href:'../Book/booktype.html'},
                  {id:'yuqibook',text:'逾期图书',href:'../Book/yuqibook.html'}
                ]
              },{
                text:'分类图书',
                items:[
                  {id:'wenxue',text:'文学',href:'../Typebook/wenxue.html'},
                  {id:'history',text:'历史',href:'../Typebook/history.html'},
                  {id:'computer',text:'计算机',href:'../Typebook/computer.html'},
                  {id:'xiaoshuo',text:'小说',href:'../Typebook/xiaoshuo.html'},
                  {id:'yuyan',text:'语言',href:'../Typebook/yuyan.html'},
                  {id:'shengwu',text:'生物',href:'../Typebook/shengwu.html'},
                  {id:'wuli',text:'物理',href:'../Typebook/wuli.html'}
                  
                ]
              }]
          },{
            id:'Reader',
            homePage : 'readerlist',
            menu:[{
                text:'读者管理',
                items:[
                  {id:'readerlist',text:'读者列表',href:'../Reader/readerlist.html'},
                  {id:'addreader',text:'读者注册',href:'../Reader/addreader.html'},
                  {id:'k',text:'逾期读者',href:'../reader/k.html'}
                ]
              }]
          },{
            id:'Article',
            homePage : 'aeticlelist',
            menu:[{
                text:'文章管理',
                items:[
                  {id:'articlelist',text:'文章列表',href:'../article/articlelist.html'},
                  {id:'addarticle',text:'待审核文章',href:'../article/addarticle.html'},
                  {id:'deleted_article',text:'已删除文章',href:'../article/deleted_article.html'}
                ]
              }]
          },{
            id:'System',
            homePage : 'list',
            menu:[{
                text:'系统管理',
                items:[
                  {id:'list',text:'公告管理',href:'system/list.html'},
                  {id:'example',text:'图书馆介绍',href:'system/example.html'},
                  {id:'introduce',text:'修改密码',href:'system/introduce.html'},
                  {id:'backup',text:'数据备份',href:'system/backup.html'}
                ]
              }]
          }];
      new PageUtil.MainPage({
        modulesConfig : config
      });
    });
	
  </script>
 </body>
</html>
<?php }} ?>