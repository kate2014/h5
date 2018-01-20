<?php
class KefuController extends BaseController {
	function __construct() {
		parent::__construct();
	}
	function index(){
		$obj = new BaseModel();
		$obj -> table = "kefu";
		$rs = $obj -> getList(1,0,"1=1","*","id DESC");
		if($rs){
			$data['data'] = $rs[0];
			$data['code'] = 200;
			$data['sussces'] = true;
		}else{
			$data['code'] = 200;
			$data['sussces'] = false;
		}
		echo json_encode($data);exit;
	}
}