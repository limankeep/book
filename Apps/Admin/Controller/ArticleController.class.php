<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function articlelist(){
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
		$per = 2;
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
	public function addarticle(){
		//建立数据模型
		$article = D('Article');
		//获取记录总条数
		$total = $article -> count();
		//设置每页展示数据条数
		$per = 8;
		//实例化分页对象
		$page = new \Component\Page($total, $per); //autoload
		//拼装sql语句获取每页的记录
		$sql = "select * from tp_article where status = 2  ".$page->limit;
		$info = $article  -> query($sql);
        //4. 获得页码列表
        $pagelist = $page -> fpage();
		
		//show_bug($info);

		$this -> assign('info', $info);
        $this -> assign('pagelist', $pagelist);
        $this -> display();
    }
	public function del($article_id){
		$article = D("article");//造对象
		$article_id = $article_id;
		$sql = "select * from tp_article where article_id = '".$article_id."' And (status = 1)";
		$result = $article -> query($sql);
		
		if($result){
			echo "请下架后再删除";
		}else{
			
			$r = $article -> delete($article_id);//调用删除方法，直接把主键值作为参数放在（）里面就可以。
			if($r){
				echo "删除成功";
			}else{
				echo "删除失败";
			}
		}
    }
	public function yuqibook(){
		
		$this -> display();
    }
	public function reader($article_id){
		$article = D('article');

		$sql = "select * from tp_article where article_id = '".$article_id."'";
		$info = $article -> query($sql);
		$this -> assign('info', $info);

        $this -> display();
	}
	//状态改为2
	public function xiajia($article_id){
		//获取当前时间
		$now_time = date('Y-m-d H:i:s',time());

        $article = D('article');
		
		$sql = "select * from tp_article where article_id = '".$article_id."' and status = 1";
		$result = $article -> query($sql);

        //两个逻辑：展示表单、收集表单
        if($result){
            $data1['status'] = 2;
			$data1['article_id'] = $article_id;
            $r = $article -> save($data1);
            if($result !== false){
                echo "成功下架";
            } else {
                echo "下架失败";
            }
        } else {
            echo "图书已下架，请勿重复操作";
        }
	}
	//状态改为1
	public function shangjia($article_id){
		//获取当前时间
		$now_time = date('Y-m-d H:i:s',time());

        $article = D('article');
		
		$sql = "select * from tp_article where article_id = '".$article_id."' and status = 0";
		$result = $article -> query($sql);

        //两个逻辑：展示表单、收集表单
        if(!$result){
            $data1['status'] = 1;
			$data1['article_id'] = $article_id;
            $r = $article -> save($data1);
            if($result !== false){
                echo "成功上架";
            } else {
                echo "下架失败";
            }
        } else {
            echo "图书已上架，请勿重复操作";
        }
	}
	//状态改为0
	public function recovery($article_id){
		//获取当前时间
		$now_time = date('Y-m-d H:i:s',time());

        $article = D('article');
		
		$sql = "select * from tp_article where article_id = '".$article_id."' and status = 1";
		$result = $article -> query($sql);

        //两个逻辑：展示表单、收集表单
        if(!$result){
            $data1['status'] = 0;
			$data1['article_id'] = $article_id;
            $r = $article -> save($data1);
            if($result !== false){
                echo "恢复成功";
            } else {
                echo "恢复失败";
            }
        } else {
            echo "图书已下架，请勿重复操作";
        }
	}
	public function deleted_article(){
		//建立数据模型
		$article = D('Article');
		//获取记录总条数
		$total = $article -> count();
		//设置每页展示数据条数
		$per = 8;
		//实例化分页对象
		$page = new \Component\Page($total, $per); //autoload
		//拼装sql语句获取每页的记录
		$sql = "select * from tp_article where status = 2  ".$page->limit;
		$info = $article  -> query($sql);
        //4. 获得页码列表
        $pagelist = $page -> fpage();
		
		//show_bug($info);

		$this -> assign('info', $info);
        $this -> assign('pagelist', $pagelist);
        $this -> display();
	}
}