<?php
namespace Admin\Controller;
use Think\Controller;
class BorrowController extends Controller {
    public function borrowlist(){
		//建立数据模型
		$borrow = D('Borrow');
		//获取记录总条数
		$total = $borrow -> count();
		//设置每页展示数据条数
		$per = 3;
		//实例化分页对象
		$page = new \Component\Page($total, $per); //autoload
		//拼装sql语句获取每页的记录
		$sql = "select * from tp_borrow ".$page->limit;
		$info = $borrow -> query($sql);
        //4. 获得页码列表
        $pagelist = $page -> fpage();
		
		//show_bug($info);

		$this -> assign('info', $info);
        $this -> assign('pagelist', $pagelist);
        $this -> display();
    }
	public function addborrow(){
		echo( U('Borrow/addborrow'));
		//两个逻辑① 展现表单 ② 接收表单数据
        $borrow = D('Borrow');
        if(!empty($_POST)){
            //tp框架有方法实现数据收集 数据模型对象->create()
            $borrow  -> create(); //收集post表单数据
            $z = $borrow -> add();
            if($z){
                //展现一个提示页面，并做页面跳转
                //success(提示信息，跳转的url路由地址)
                //$this ->success('添加商品成功', U('Goods/showlist'));
                echo "success";
            } else {
                //$this ->error('添加商品失败', U('Goods/showlist'));
                echo "error";
            }
        }else {
            $this -> display();
        }
    }
	public function editborrow(){
		
		$this -> display();
    }
	public function returnborrow(){
		
		$this -> display();
    }
}
