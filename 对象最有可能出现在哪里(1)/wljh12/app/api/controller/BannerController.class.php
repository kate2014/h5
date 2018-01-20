<?php
class BannerController extends BaseController {

	function index(){
		$cateid = isset($_GET['cate_id'])?$_GET['cate_id']:0;
		
		$obj = new BaseModel();
		$obj -> table = "carousel";
		$where = "status = 1 AND cate_id = ".$cateid;
		
		$rslist = $obj -> getList(4,0,$where,"id,thumb,sort,content,islink","sort ASC");
		
		// var_dump($obj);
		$data['data'] = $rslist;
		$data['code'] = 200;
		$data['sussces'] = true;
		echo json_encode($data);
	}
	function show(){
		$id = $_GET['id'];
		$obj = new BaseModel();
		$obj -> table = 'carousel';
		$rs = $obj -> getOne($id);
		unset($rs['link']);
		$data['data'] = $rs;
		$data['code'] = 200;
		$data['sussces'] = true;
		if(empty($rs)){
			$data['sussces'] = false;
		}
		echo json_encode($data);exit;
	}
}