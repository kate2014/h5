<?php
class TrainingCateController extends BaseController {

	function __construct() {
		parent::__construct();
	
              
	}
	
	function index() {
		$where=" pid = 3 ";
		if ($_POST) 
		{
			if($_POST["name"])
			{
				$name=$_POST["name"];
				$where.=" AND name like '%".$name."%'";
			}
		}
		$obj = new Notice_CateModel();
        $a=$obj->getList();
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
		$obj = new GoodsCateModel();
		$obj -> table ="notice_cate";
		$notice_cate = $obj -> get_tree();

		$this->assign('cateList',$notice_cate);
		$this->display();
	}
	
	function edit() {
		$id = $_GET['id'];
		$obj = new Notice_CateModel();
		$rs = $obj->getOne($id);
		$obj = new GoodsCateModel();
		$obj -> table ="notice_cate";
		$notice_cate = $obj -> get_tree();

		$this->assign('cateList',$notice_cate);

		$this->assign('rs', $rs);
		$this->display();
	}
	
	
	
	function save() {
		$obj = new Notice_CateModel();
		$id = isset($_POST['id'])?$_POST['id']:''; 
		$result = $obj->save($_POST,$id);
		$rs=$_POST;
		if ($result>0) {
			if(!$id)
				$rs=$obj->findOne(null,"*"," id DESC");
			$this->assign('success',$id?"修改成功":"添加成功"); 			
		} else {
		    $this->assign('failed',$id?"修改失败":"添加失败");
		}
		$obj = new GoodsCateModel();
		$obj -> table ="notice_cate";
		$notice_cate = $obj -> get_tree();
		$this->assign('cateList',$notice_cate);
		$this->assign('rs', $rs);
		$this->display("Notice_Cate/edit.html");
	}
	function del()
	{
		$obj = new Notice_CateModel();
		$id = isset($_POST['id'])?intval($_POST['id']):'';
		$result=$obj->batchDel($id);
		if($result)
			die(true);
		else
			die(false);
	}
	
}