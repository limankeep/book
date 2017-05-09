<?php
namespace Admin\Controller;
use Think\Controller;
class AboutController extends Controller {
    public function about(){
	$about = D("about");
        
       
        
        $sql = "select * from tp_about where about_id = 1";
        $info = $about -> query($sql);
        
        
        $this -> assign('info', $info);
        
        $this -> display();
    }
	
	public function editabout(){
		
		//两个逻辑① 展现表单 ② 接收表单数据
        $about = D('about');
        if(!empty($_POST)){
            $about->create(); 			
            $z = $about -> add();
            if($z){
                //展现一个提示页面，并做页面跳转
                //success(提示信息，跳转的url路由地址)
                //$this ->success('添加书籍成功', U('Goods/showlist'));
                echo "success";
            } else {
                //$this ->error('添加书籍失败', U('Goods/showlist'));
                echo "error";
            }
        }else {
            $this -> display();
        }
    }
	
}