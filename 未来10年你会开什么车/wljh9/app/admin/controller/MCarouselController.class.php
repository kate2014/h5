<?php
class MCarouselController extends BaseController {
		
	function __construct() {
		parent::__construct();
	
              
	}
	
	function index() {
		$where=" 1=1 ";
		if ($_POST) {
			if($_POST["name"])
			{
				$name=$_POST["name"];
				$where.=" AND name like '%".$name."%'";
			}
		}
		$obj = new MCarouselModel();
		$rowtotal = $obj->getCount($where); //总记录数
		$nowpage = isset($_GET['p'])?$_GET['p']:1;
		$pagesize = 30; //每页记录数
		$start = ($nowpage-1) * $pagesize;
		$rslist = $obj->getList($pagesize, $start,$where);
		$pages = Page::pages($rowtotal,$pagesize);
		$this->assign('page',$pages);
		$this->assign('rslist',$rslist);
		$this->display();
	}
	
	function add() {
		$this->display();
	}
	
	function edit() {
		$id = $_GET['id'];
		$obj = new MCarouselModel();
		$rs = $obj->getOne($id);
		
		$this->assign('rs', $rs);
		$this->display();
	}
	
	
	
	function save() {
		$obj = new MCarouselModel(); //die(var_dump($_POST));
		$id = isset($_POST['id'])?$_POST['id']:'';
		//print_r($_POST);
		$rs=$_POST;
		$data['name']=$_POST['name'];
		if($_POST['pic']){
		$data['pic']=$_POST['pic'];
		}
		$data['content']=$_POST['content'];
		$data['sort']=$_POST['sort'];
		$data['status']=$_POST['status'];
		//print_r($data);die;
		$result = $obj->save($data,$id);
		if ($result>0) {
			if(!$id)
				//$rs=$obj->get_last_one();
			$this->assign('success',$id?"修改成功":"添加成功");
		} else {
		    $this->assign('failed',$id?"修改失败":"添加失败");
		}
		$this->assign('rs', $rs);
		
		if(isset($_POST["saveThenAdd"]))
			$this->display("MCarousel/add.html");
		else
			$this->display("MCarousel/edit.html");
	}
	
	function del()
	{
		$obj = new MCarouselModel();
		$id = isset($_POST['id'])?intval($_POST['id']):'';
		$result=$obj->batchDel($id);
		if($result)
			die(true);
		else
			die(false);
	}
	
}