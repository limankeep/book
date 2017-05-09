<?php
namespace Admin\Controller;
use Think\Controller;
class BorrowController extends Controller {
	public function borrowlist(){
		//获取当前时间
		$now_time = date('Y-m-d H:i:s',time());

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
				$sql = "select * from tp_borrow where book_name like '%".$book_name."%'".$page->limit;				
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
			$sqlbook2 = "select book_name from tp_book where book_id = ' ".$book_id."'";
			$sqlbook3 = "select book_type from tp_book where book_id = ' ".$book_id."'";
			$book_now_amount = $book -> query($sqlbook);
			$book_name = $book -> query($sqlbook2);
			$book_type = $book -> query($sqlbook3);
			$sqlreader = "select now_amount from tp_reader where reader_id = ' ".$reader_id."'";
			$sqlreader2 = "select reader_name from tp_reader where reader_id = ' ".$reader_id."'";
			$sqlreader3 = "select uid from tp_reader where reader_id = ' ".$reader_id."'";
			$reader_now_amount = $reader -> query($sqlreader);
			$reader_name = $reader -> query($sqlreader2);
			$reader_uid= $reader -> query($sqlreader3);
			
			
			$arr1 = array_map('array_shift', $book_now_amount);   
			$book_now_amount = $arr1[0];
			//echo $book_now_amount;
			$arr2 = array_map('array_shift', $reader_now_amount);   
			$reader_now_amount = $arr2[0];
			//echo $reader_now_amount;
			
			
			$arr3 = array_map('array_shift', $book_name);
			$book_name = $arr3[0];
			$arr4 = array_map('array_shift', $book_type);
			$book_type = $arr4[0];
			$arr5 = array_map('array_shift', $reader_name);
			$reader_name = $arr5[0];
			$arr6 = array_map('array_shift', $reader_uid);
			$reader_uid = $arr6[0];
			//必须同时有书本编号和读者编号才能进入此方法完成借书
			if(($book_now_amount) && ($reader_now_amount)){
				//判断如果书借完了或者读者的可借数为0就不能借书
				if(($book_now_amount == 0) || ($reader_now_amount == 0)){ 
					echo "图书借完了";
				}
				if(($book_now_amount > 0) && ($reader_now_amount > 0)){
					$borrow  -> create(); 			
					$borrow -> create_time = $create_time;
					$borrow -> finish_time = $finish_time;
					$borrow -> uid = $reader_uid;
					$borrow -> book_name = $book_name;
					$borrow -> book_type = $book_type;
					$borrow -> uname = $reader_name;
					$z = $borrow -> add();
					
					if($z){						
						//每次借书后书本数减少一				
						$data1['now_amount'] = $book_now_amount -1;
						$data2['now_amount'] = $reader_now_amount -1;
						$data1['book_id'] = $book_id;
						$data2['reader_id'] = $reader_id;
						$result1 = $book -> save($data1); 
						$result2 = $reader -> save($data2); 						
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
	//逾期图书列表
	public function yuqibook(){
		//获取当前时间
		//获取当前时间
		$now_time = date('Y-m-d H:i:s',time());
		$this -> assign('now_time',$now_time);
		//传入post参数  book_name reader_id start_time end_time
		$book_name = $_POST['book_name'];
		$start_time = $_POST['start_time'];
		$end_time = $_POST['end_time'];
		$borrow = D('borrow');		 
		//获取记录总条数
		$total = $borrow -> count();
		//设置每页展示数据条数
		$per = 10;
		$page = new \Component\Page($total, $per);
		//名称为空时
		if(empty($book_name)){
			if(empty($start_time) && empty($end_time)){				
				//名称和时间为空		
				$sql = "select * from tp_borrow where status = 0 ".$page->limit;
			}
			if(!empty($start_time) && !empty($end_time)){
				//名称为空，时间不为空
				$sql = "select * from tp_borrow where create_time between '".$start_time."' and '".$end_time."' And (status = 0)".$page->limit;
			}			
		}
		//名称不为空
		if(!empty($book_name)){
			if(empty($start_time) && empty($end_time)){			
				//按照名称去查询
				$sql = "select * from tp_borrow where book_name like '%".$book_name."%'  And (status = 0)" .$page->limit;limit;				
			}
			if(!empty($start_time) && !empty($end_time)){
				//按照名称和时间去查询
				$sql = "select * from tp_borrow where (create_time between '".$start_time."' and '".$end_time."') And (book_name like '%".$book_name."%')  And (status = 0)".$page->limit;
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
	//未归还图书列表
	public function returnborrow(){
		//获取当前时间
		$now_time = date('Y-m-d H:i:s',time());
		$this -> assign('now_time',$now_time);
		//传入post参数  book_name reader_id start_time end_time
		$book_name = $_POST['book_name'];
		$start_time = $_POST['start_time'];
		$end_time = $_POST['end_time'];
		$borrow = D('borrow');		 
		//获取记录总条数
		$total = $borrow -> count();
		//设置每页展示数据条数
		$per = 10;
		$page = new \Component\Page($total, $per);
		//名称为空时
		if(empty($book_name)){
			if(empty($start_time) && empty($end_time)){				
				//名称和时间为空		
				$sql = "select * from tp_borrow where status = 0 ".$page->limit;
			}
			if(!empty($start_time) && !empty($end_time)){
				//名称为空，时间不为空
				$sql = "select * from tp_borrow where create_time between '".$start_time."' and '".$end_time."' And (status = 0)".$page->limit;
			}			
		}
		//名称不为空
		if(!empty($book_name)){
			if(empty($start_time) && empty($end_time)){			
				//按照名称去查询
				$sql = "select * from tp_borrow where book_name like '%".$book_name."%'  And (status = 0)" .$page->limit;limit;				
			}
			if(!empty($start_time) && !empty($end_time)){
				//按照名称和时间去查询
				$sql = "select * from tp_borrow where (create_time between '".$start_time."' and '".$end_time."') And (book_name like '%".$book_name."%')  And (status = 0)".$page->limit;
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
	//归还图书方法
	public function returnbook($borrow_id){
		//获取当前时间
		$now_time = date('Y-m-d H:i:s',time());
		//实例化数据模型
        $borrow = D('Borrow');
		$book = D('book');
		$reader = D('reader');
		//判断图书的状态,然后修改状态
		$status['status'] = 1;
		$status['borrow_id'] = $borrow_id;
		$status['now_time'] = $now_time;
		
		//查询是否超过应该归还时间 如果是 则不能在此处归还 需要到逾期界面实行归还操作
		$sqlisyuqi = "select * from  tp_borrow where finish_time > '".$now_time."' And borrow_id = ".$borrow_id."  ";
		$isyuqi = $borrow -> query($sqlisyuqi);
		if($isyuqi){
			//查询借阅表中的book_id和reader_id
		
			$sqlbook_id = "select book_id  from tp_borrow where borrow_id = '".$borrow_id."'";
			$sqlreader_id = "select reader_id from tp_borrow where borrow_id = '".$borrow_id."'";
		
			$book_id = $book -> query($sqlbook_id);
			$reader_id = $reader -> query($sqlreader_id);
		
			$book_id2 = array_map('array_shift', $book_id);   
			$reader_id2 = array_map('array_shift', $reader_id);   
		
			$book_id3 = $book_id2[0];
			$reader_id3 = $reader_id2[0];

			//根据查询出来的建立书籍数目的变量		
			$sqlbook = "select now_amount from tp_book where book_id = ' ".$book_id3."'";
			$book_now_amount = $book -> query($sqlbook);
			$sqlreader = "select now_amount from tp_reader where reader_id = ' ".$reader_id3."'";
			$reader_now_amount = $reader -> query($sqlreader);
			$arr1 = array_map('array_shift', $book_now_amount);   
			$book_now_amount = $arr1[0];
			$arr2 = array_map('array_shift', $reader_now_amount);   
			$reader_now_amount = $arr2[0];
		
			$r = $borrow ->save($status);
			if($r){
				echo "归还成功";
				//成功后修改book和reader的书籍数目
				$data1['now_amount'] = $book_now_amount + 1;
				$data2['now_amount'] = $reader_now_amount + 1;					
				$result1 = $book ->where($book_id)-> save($data1); 
				$result2 = $reader -> where($reader_id)->save($data2);
			
			}else{
				echo "归还失败";
			}
		}else{
				echo "借阅已逾期，请到逾期界面规划并缴纳费用";
		}
		
		
	}
	//归还逾期图书方法
	public function returnyuqibook($borrow_id){
		//获取当前时间
		$now_time = date('Y-m-d H:i:s',time());
		//实例化数据模型
        $borrow = D('Borrow');
		$book = D('book');
		$reader = D('reader');
		//判断图书的状态,然后修改状态
		$status['status'] = 1;
		$status['borrow_id'] = $borrow_id;
		$status['now_time'] = $now_time;

		//查询借阅表中的book_id和reader_id
		
		$sqlbook_id = "select book_id  from tp_borrow where borrow_id = '".$borrow_id."'";
		$sqlreader_id = "select reader_id from tp_borrow where borrow_id = '".$borrow_id."'";
		
		$book_id = $book -> query($sqlbook_id);
		$reader_id = $reader -> query($sqlreader_id);
		
		$book_id2 = array_map('array_shift', $book_id);   
		$reader_id2 = array_map('array_shift', $reader_id);   
		
		$book_id3 = $book_id2[0];
		$reader_id3 = $reader_id2[0];

		//根据查询出来的建立书籍数目的变量		
		$sqlbook = "select now_amount from tp_book where book_id = ' ".$book_id3."'";
		$book_now_amount = $book -> query($sqlbook);
		$sqlreader = "select now_amount from tp_reader where reader_id = ' ".$reader_id3."'";
		$reader_now_amount = $reader -> query($sqlreader);
		$arr1 = array_map('array_shift', $book_now_amount);   
		$book_now_amount = $arr1[0];
		$arr2 = array_map('array_shift', $reader_now_amount);   
		$reader_now_amount = $arr2[0];
		
		$r = $borrow ->save($status);
		if($r){
			echo "归还成功";
			//成功后修改book和reader的书籍数目
			$data1['now_amount'] = $book_now_amount + 1;
			$data2['now_amount'] = $reader_now_amount + 1;					
			$result1 = $book ->where($book_id)-> save($data1); 
			$result2 = $reader -> where($reader_id)->save($data2);
			
		}else{
			echo "归还失败";
		}
		
		
	}
	public function del($borrow_id){
		$borrow = D("borrow");//造对象
		$borrow_id = $borrow_id;
		$sql = "select * from tp_borrow where (borrow_id = '".$borrow_id."') And (status = 1) ";
		$result = $borrow -> query($sql);
		if($result){
			$r = $borrow -> delete($borrow_id);//调用删除方法，直接把主键值作为参数放在（）里面就可以。
			if($r){
				echo "删除成功";
			}else{
				echo "删除失败";
			}
		}else{
			echo "还有借阅信息未处理";
		}
        
	}
}
