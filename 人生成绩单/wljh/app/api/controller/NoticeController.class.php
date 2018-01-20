<?php
class NoticeController extends BaseController {

	function __construct() {
		parent::__construct();

	}

	function index() {
		$cateid = $_GET['cate_id'];
		$pagesize = $_GET['pagesize'];
		$nowpage = isset($_GET['p'])?$_GET['p']:1; 
		$start = ($nowpage-1) * $pagesize;
		$name = $_GET['name'];
		
		$obj = new BaseModel();
		$obj -> table = "notice";
		$where = "cate_id = ".$cateid;
		if(!empty($name)){
			$where .=" AND title like '%".$name."%'";
		}
		$rslist = $obj -> getList($pagesize,$start,$where,"*","id DESC");
		
		foreach ($rslist as $key => $value) {
			
			$value['inputtime'] = date("Y-m-d H:i:s",$value['inputtime']);
			$rslist[$key] = $value;
		}
		$data['data'] = $rslist;
		$data['code'] = 200;
		$data['sussces'] = true;
		if(empty($rslist)){
			$data['sussces'] = false;
		}
		echo json_encode($data);exit;
	}
	
	function show(){
		$id = $_GET['id'];
		$obj = new BaseModel();
		$obj -> table = 'notice';
		$rs = $obj -> getOne($id);
		$data['data'] = $rs;
		$data['code'] = 200;
		$data['sussces'] = true;
		if(empty($rs)){
			$data['sussces'] = false;
		}
		echo json_encode($data);exit;
	}
	
	function search(){
		$name = $_GET['name'];
		$cateid = $_GET['cate_id'];
		$pagesize = $_GET['pagesize'];
		$nowpage = isset($_GET['p'])?$_GET['p']:1; 
		$start = ($nowpage-1) * $pagesize;
		$obj = new BaseModel();
		$obj -> table = 'notice';
		$where = "cate_id = ".$cateid." AND title like '%".$name."'";
		$rslist = $obj -> getList($pagesize,$start,$where,"id,title,thumb,begin,closure,inputtime,extra","id DESC");
		foreach ($rslist as $key => $value) {
			unset($value['extra']);
			$rslist[$key] = $value;
		}
		$data['data'] = $rslist;
		$data['code'] = 200;
		$data['sussces'] = true;
		if(empty($rslist)){
			$data['sussces'] = false;
		}
		echo json_encode($data);exit;
	}
	
	function retui(){
		$name = $_GET['name'];
		$retui = $_GET['retui'];
		$pagesize = $_GET['pagesize'];
		$nowpage = isset($_GET['p'])?$_GET['p']:1; 
		$start = ($nowpage-1) * $pagesize;
		$obj = new BaseModel();
		$obj -> table = 'notice';
		$where = "retui = ".$retui." AND title like '%".$name."'";
		$rslist = $obj -> getList($pagesize,$start,$where,"*","id DESC");
		
		foreach ($rslist as $key => $value) {
			$value['inputtime'] = date("Y-m-d H:i:s",$value['inputtime']);
			$rslist[$key] = $value;
		}
		$data['data'] = $rslist;
		$data['code'] = 200;
		$data['sussces'] = true;
		if(empty($rslist)){
			$data['sussces'] = false;
		}
		echo json_encode($data);exit;
	}
}
