<?php 
class MConfigController extends BaseController {
	function index(){
		$obj = new BaseModel();
		$obj -> table = "mconfig";
		$rslist = $obj -> getList();
		$rs = $rslist[0];
		
		$data['data'] = $rs;
		$data['code'] = 200;
		$data['sussces']=true;
		echo json_encode($data);exit;
	}
}