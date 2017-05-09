<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function _initialize(){  
          $this-> login_check();
    } 
    public function index(){
		
		//建立数据模型
		$book = D('book');
		$article = D ('article');
		$announcement = D('announcement');
		$booktype = D('booktype');
		$recommend = D('recommend');
		
		//首页列表模块都是取出六条数据  分别是 最新书籍 推荐图书 推荐文章 公告  图书分类
		//拼装sql语句获取列表
		//最新书籍
		$booksql = "select * from tp_book order by create_time desc limit 0,6";
		$booklist = $book -> query($booksql);
		$this -> assign('booklist', $booklist);	
		//推荐图书
		$recommendsql = "select * from tp_recommend order by create_time desc limit 0,6";
		$recommendlist = $recommend -> query($recommendsql);
		$this -> assign('recommendlist', $recommendlist);
		//推荐文章
		$articlesql = "select * from tp_article order by create_time desc limit 0,6";
		$articlelist = $article -> query($articlesql);
		$this -> assign('articlelist', $articlelist);
		//公告
		$announcement_sql = "select * from tp_announcement order by create_time desc limit 0,6";
		$announcement_list = $announcement -> query($announcement_sql);
		$this -> assign('announcement_list', $announcement_list);
		//图书分类
		$booktypesql = "select * from tp_booktype order by create_time desc limit 0,6";
		$booktypelist = $booktype -> query($booktypesql);
		$this -> assign('booktypelist', $booktypelist);
		
		$this -> display();
    }
	public function login_check(){
        if (session('uname')) {
            $this->uname = session('uname');
        }else{
            $this->redirect('Login/login');
        }
	}
}