<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

//define('BIND_MODULE','Admin/');//绑定Home模块到当前入口文件，可用于新增Home模块

define("SITE_URL","www.tpbook.com");
// 定义应用目录
//define("SITE_URL","http://www.tpbook.com/");
define('APP_PATH','../Apps/');
define("PUBLIC_URL","/Public/Admin"); //css
define("HOME_URL","/Public/Home"); //css
define("UE_URL","/Public/kindeditor-4.1.7");

// 引入ThinkPHP入口文件
require '../ThinkPHP/ThinkPHP.php';

