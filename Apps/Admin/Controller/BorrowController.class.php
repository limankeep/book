<?php
namespace Admin\Controller;
use Think\Controller;
class BorrowController extends Controller {
	public function borrowlist(){
		//获取当前时间
		$now_time = date('Y-m-d H:i:s',time());
		echo $now_time;
		//传入post参数  book_name reader_id start_time end_time
		$book_name = $_POST['book_name'];
		$start_time = $_POST['start_time'];
		$end_time = $_POST['end_time'];
		$borrow = D('borrow');		 
		//获取记录总条数
		$total = $borrow -> count();
		//设置每页展示数据条数
		$per = 8;
		$page = new \Component\Page($total, $per);
		//名称为空时
		if(empty($book_name)){
			if(empty($start_time) && empty($end_time)){				
				//名称和时间为空		
				$sql = "select * from tp_borrow ".$page->limit;
			}
			if(!empty($start_time) && !empty($end_time)){
				//名称为空，时间不为空
				$sql = "select * from tp_borrow where create_time between '".$start_time."' and '".$end_time."'".$page->limit;
			}			
		}
		//名称不为空
		if(!empty($book_name)){
			if(empty($start_time) && empty($end_time)){			
				//按照名称去查询
				$sql = "select * from tp_borrow where book_name like '%".$book_name."%'" .$page->limit;limit;				
			}
			if(!empty($start_time) && !empty($end_time)){
				//按照名称和时间去查询
				$sql = "select * from tp_borrow where (create_time between '".$start_time."' and '".$end_time."') And (book_name like '%".$book_name."%')".$page->limit;
			}			
		}
						
		 //select book_name from tp_borrow where create_time between '".$start_time."' and '".$end_time."';
		//拼装sql语句获取每页的记录		
		$info = $borrow -> query($sql);
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

	public function addborrow(){
		//date(”Y-m-d H:i:s”,time())
		//设置借阅时间
		$create_time = date('Y-m-d H:i:s',time());
		$finish_time = date('Y-m-d H:i:s',strtotime('+7 day'));
		//实例化数据模型
        $borrow = D('Borrow');
		$book = D('book');
		$reader = D('reader');
		//接受参数
		$book_id = $_POST['book_id'];
		$reader_id = $_POST['reader_id'];
		//判断
        if(!empty($_POST)){			
		
			$sqlbook = "select now_amount from tp_book where book_id = ' ".$book_id."'";
			$book_now_amount = $book -> query($sqlbook);
			$sqlreader = "select now_amount from tp_reader where reader_id = ' ".$reader_id."'";
			$reader_now_amount = $reader -> query($sqlreader);
			//必须同时有书本编号和读者编号才能进入此方法完成借书
			if(($book_now_amount) && ($reader_now_amount)){
				$arr1 = array_map('array_shift', $book_now_amount);   
				$book_now_amount = $arr1[0];
				$arr2 = array_map('array_shift', $reader_now_amount);   
				$reader_now_amount = $arr2[0];
				//判断如果书借完了或者读者的可借数为0就不能借书
				if(($book_now_amount == 0) || ($reader_now_amount == 0)){ 
					echo "图书借完了";
				}
				if(($book_now_amount > 0) && ($reader_now_amount > 0)){
					$borrow  -> create(); 			
					$borrow -> create_time = $create_time;
					$borrow -> finish_time = $finish_time;					
					$z = $borrow -> add();
					if($z){						
						//每次借书后书本数减少一				
						$data1['now_amount'] = $book_now_amount -1;
						$data2['now_amount'] = $reader_now_amount -1;					
						$result1 = $book ->where($book_id)-> save($data1); 
						$result2 = $reader -> where($reader_id)->save($data2); 						
							echo "alert('success')";												
					} else {
						echo "alert('error')";
					}
				}				
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
