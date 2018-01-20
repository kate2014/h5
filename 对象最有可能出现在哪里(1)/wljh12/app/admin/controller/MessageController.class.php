<?php 
class MessageController extends BaseController {
	function index(){
		$obj = new MessageModel();
		$where = "1=1";
		$rowtotal = $obj->getCount($where); //总记录数
		$nowpage = isset($_GET['p'])?$_GET['p']:1;
		$pagesize = 30; //每页记录数
		$start = ($nowpage-1) * $pagesize;
		
		$rslist = $obj->getList($pagesize, $start,$where);
		$pages = Page::pages($rowtotal,$pagesize);
		$this->assign('page',$pages);
		$this -> assign('rslist',$rslist);
		$this -> display();
	}
	
	function read(){
		$id = $_POST['id'];
		if(!empty($id)){
			$data['state'] = 2;
			$obj = new MessageModel();
			$result = $obj -> save($data,$id);
			$data['sussces'] = true;
		}else{
			$data['sussces'] = false;
		}
		echo json_encode($data);
	}
	
	function edit() {
		$id = $_GET['id'];
		$obj = new MessageModel();
		$rs = $obj->getOne($id);
		$this->assign('rs', $rs);
		$this->display();

	}
	
	function save(){//留言提交
		
		if(!empty($_POST['name'])){
			$id = $_POST['id'];
			$_POST['inputtime'] = time();
			$obj = new MessageModel();
			$result = $obj -> save($_POST,$id);
			$rs=$_POST;
			$this->assign('rs',$rs);
			//$tishi['sussces'] = true;
			//$tishi['message'] = "提交成功！";
			$this->assign('success',"修改成功"); 			
		} else {
			$this->assign('rs',$rs);
		    $this->assign('failed',"修改失败");
		}
		$this->display("Message/edit.html");
	}
	
	function del()
	{
		$obj = new MessageModel();
		$id = isset($_POST['id'])?intval($_POST['id']):'';
		$result=$obj->batchDel($id);
		if($result)
			die(true);
		else
			die(false);
	}
}