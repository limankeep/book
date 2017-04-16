<?php
namespace Admin\Controller;
use Think\Controller;
class BorrowController extends Controller {
    public function borrowlist(){
		$borrow = D('Borrow');
		$info = $borrow ->select();
		show_bug($info);
		$this -> assign('info',$info);
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
