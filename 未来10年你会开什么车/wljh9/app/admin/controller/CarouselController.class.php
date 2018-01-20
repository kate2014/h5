<?php
class CarouselController extends BaseController {
		
	function __construct() {
		parent::__construct();
	
              
	}
	
	function index() {
		$where=" 1=1 ";
		if ($_POST) {
			if($_POST["name"])
			{
				$name=$_POST["name"];
				$where.=" AND title like '%".$name."%'";
			}
		}
		$obj = new CarouselModel();
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
		$this -> catelist();
		$this->display();
	}
	
	function edit() {
		$id = $_GET['id'];
		$obj = new CarouselModel();
		$rs = $obj->getOne($id);
		$this -> catelist();
		$this->assign('rs', $rs);
		$this->display();
	}
	
	
	
	function save() {
		$obj = new CarouselModel(); //die(var_dump($_POST));
		$id = isset($_POST['id'])?$_POST['id']:'';
		$rs=$_POST;
		// if(count(explode("//",$_POST["thumb"]))>1){
			// $thumb_arr = explode("//",$_POST["thumb"]);
			// $_POST['thumb'] = $thumb_arr[2];
		// }
		// $_POST['thumb'] = ($_POST['thumb'][0] == '/' ? '' : '/') . $_POST['thumb']; 
		$result = $obj->save($_POST,$id);
		if ($result>0) {
			if(!$id)
			
			$this->assign('success',$id?"修改成功":"添加成功");
		} else {
		    $this->assign('failed',$id?"修改失败":"添加失败");
		}
		$this->assign('rs', $rs);
		$this -> catelist();
		if(isset($_POST["saveThenAdd"]))
			$this->display("Carousel/add.html");
		else
			$this->display("Carousel/edit.html");
	}
	
	function catelist(){
		$obj = new Notice_CateModel();
		$where = "banner=1";
		$catelist = $obj -> getOther($where);
		$this -> assign("catelist",$catelist);
	}
	
	function del()
	{
		$obj = new CarouselModel();
		$id = isset($_POST['id'])?intval($_POST['id']):'';
		$result=$obj->batchDel($id);
		if($result)
			die(true);
		else
			die(false);
	}
	
}