<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function read_after(){
		//获取当前时间
		$now_time = date('Y-m-d H:i:s',time());
		//传入post参数  book_name reader_id start_time end_time
		$title = $_POST['title'];
		$start_time = $_POST['start_time'];
		$end_time = $_POST['end_time'];
		$article = D('article');		 
		//获取记录总条数
		$total = $article -> count();
		//设置每页展示数据条数
		$per = 5;
		$page = new \Component\Page($total, $per);
		//名称为空时
		if(empty($title)){
			if(empty($start_time) && empty($end_time)){				
				//名称和时间为空		
				$sql = "select * from tp_article ".$page->limit;
			}
			if(!empty($start_time) && !empty($end_time)){
				//名称为空，时间不为空
				$sql = "select * from tp_article where create_time between '".$start_time."' and '".$end_time."'".$page->limit;
			}			
		}
		//名称不为空
		if(!empty($title)){
			if(empty($start_time) && empty($end_time)){			
				//按照名称去查询
				$sql = "select * from tp_article where title like '%".$title."%'".$page->limit;				
			}
			if(!empty($start_time) && !empty($end_time)){
				//按照名称和时间去查询
				$sql = "select * from tp_article where (create_time between '".$start_time."' and '".$end_time."') And (title like '%".$title."%')".$page->limit;
			}			
		}
						
		 //select book_name from tp_borrow where create_time between '".$start_time."' and '".$end_time."';
		//拼装sql语句获取每页的记录		
		$info = $article-> query($sql);
		//$art=$article->where($where)->order("ID desc")->select();
				
		if(!empty($info)){
			$pagelist = $page -> fpage();		
			//show_bug($info)
			$this -> assign('info', $info);
			$this -> assign('pagelist', $pagelist);
			$this -> display();
		}
		else{
			$info = 0 ;
			$this -> assign('info', $info);
			
			$this -> display();
		}

    }
	public function reader($article_id){
		$article = D('article');

		$sql = "select * from tp_article where article_id = '".$article_id."'";
		$info = $article -> query($sql);
		$this -> assign('info', $info);

        $this -> display();
	}
}