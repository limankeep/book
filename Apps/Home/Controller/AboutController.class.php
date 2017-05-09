<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends Controller {
    public function aboutus(){
	$about = D("about");
        
       
        
        $sql = "select * from tp_about where about_id = 4";
        $info = $about -> query($sql);
        
        
        $this -> assign('info', $info);
        
        $this -> display();
    }
	
	
}