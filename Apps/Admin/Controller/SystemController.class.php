<?php
namespace Admin\Controller;
use Think\Controller;
class SystemController extends Controller {
    public function editannouncement($announcement_id){
		//两个逻辑① 展现表单 ② 接收表单数据
        $announcement = D('announcement');
        if(!empty($_POST)){
			
            $sqlpwd2 = "update tp_announcement SET content = '".$_POST['content']."' where announcement_id = '".$announcement_id."'";
			$updatepwd2 = $announcement -> execute($sqlpwd2);
            if($updatepwd2){
                //展现一个提示页面，并做页面跳转
                //success(提示信息，跳转的url路由地址)
                //$this ->success('添加书籍成功', U('Goods/showlist'));
                echo "success";
            } else {
                //$this ->error('添加书籍失败', U('Goods/showlist'));
                echo "error";
            }
        }else {
			$info = $announcement->find($announcement_id); //一维数组
            $this -> assign('info', $info);
            $this -> display();
        }
		
    }
	public function announcement(){
		$announcement = D("announcement");
        
       
        
        $sql = "select * from tp_announcement where announcement_id = 12";
        $info = $announcement -> query($sql);
        
        
        $this -> assign('info', $info);
        
        $this -> display();
		
    }
	public function manager(){
		$manager = D("manager");        
        $sql = "select * from tp_manager where manager_id = 1";
        $info = $manager -> query($sql);
        
        
        $this -> assign('info', $info);
        
        $this -> display();
		
    }
	 public function about(){
		$about = D("about");
       
        $sql = "select * from tp_about where about_id = 4";
        $info = $about -> query($sql);
        
        
        $this -> assign('info', $info);
        
        $this -> display();
    }
	
	public function editabout($about_id){
		
		//两个逻辑① 展现表单 ② 接收表单数据
        $about = D('about');
		
        if(!empty($_POST)){
			
            $sqlpwd2 = "update tp_about SET content = '".$_POST['content']."' where about_id = '".$about_id."'";
			$updatepwd2 = $about -> execute($sqlpwd2);
            if($updatepwd2){
                //展现一个提示页面，并做页面跳转
                //success(提示信息，跳转的url路由地址)
                //$this ->success('添加书籍成功', U('Goods/showlist'));
                echo "success";
            } else {
                //$this ->error('添加书籍失败', U('Goods/showlist'));
                echo "error";
            }
        }else {
			$info = $about->find($about_id); //一维数组
            $this -> assign('info', $info);
            $this -> display();
        }
    }
	//管理员个人信息修改
	public function editinfo($manager_id){
		
		//两个逻辑① 展现表单 ② 接收表单数据
        $manager = D('manager');
        if(!empty($_POST)){
            $manager->create(); 			
            $z = $manager -> save();
            if($z !== false){
                //展现一个提示页面，并做页面跳转
                //success(提示信息，跳转的url路由地址)
                //$this ->success('添加书籍成功', U('Goods/showlist'));
                echo "success";
            } else {
                //$this ->error('添加书籍失败', U('Goods/showlist'));
                echo "error";
            }
        }else {
			$info = $manager->find($manager_id); //一维数组
            $this -> assign('info', $info);
            $this -> display();
        }
    }
	//密码修改
	public function editpwd(){
		//两个逻辑① 展现表单 ② 接收表单数据
		$manager = D('manager');
		$uid = session('uname');
		$sql = "select manager_id from tp_manager where uid = '".$uid."'";
		$manager_id = $manager -> query($sql);
		$arr1 = array_map('array_shift', $manager_id);   
		$manager_id = $arr1[0];
		$user = D('login');
		//$login = D('login');
        if(!empty($_POST)){
            $sqlpwd = "update tp_manager SET password = '".$_POST['password']."' where manager_id = ".$manager_id." ";
			$updatepwd = $manager -> execute($sqlpwd);
            if($updatepwd){
                //展现一个提示页面，并做页面跳转
                //success(提示信息，跳转的url路由地址)
                //$this ->success('添加书籍成功', U('Goods/showlist'));
				$sqlpwd2 = "update tp_login SET password = '".$_POST['password']."' where uname = '".$uid."'";
				$updatepwd2 = $user -> execute($sqlpwd2);
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