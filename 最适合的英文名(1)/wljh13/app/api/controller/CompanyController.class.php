<?php
class CompanyController extends BaseController {

	function __construct() {
		parent::__construct();

	}
	function index(){
		$cateid = $_GET['cateid'];
		$obj = new BaseModel();
		$obj -> table = "notice";
		$where = "cate_id = ".$cateid;
		$rslist = $obj -> getList($pagesize,$start,$where,"id,title,thumb,begin,closure,inputtime,extra,content","id DESC");
		
		if($rslist[0]['extra']){
			$extra_arr = json_decode($rslist[0]['extra'],true);
			$rslist[0]['tell']= $extra_arr['tell'];
			$rslist[0]['phone']= $extra_arr['phone'];
			$rslist[0]['email']= $extra_arr['email'];
			$rslist[0]['website']= $extra_arr['website'];
			$rslist[0]['address']= $extra_arr['address'];
			$rslist[0]['latitude']= $extra_arr['latitude'];
			$rslist[0]['longitude']= $extra_arr['longitude'];
		}
		foreach ($rslist as $key => $value) {
			unset($value['extra']);
			unset($value['begin']);
			unset($value['closure']);
			$rslist[$key] = $value;
		}
		$data['data'] = $rslist[0];
		$data['code'] = 200;
		$data['sussces'] = true;
		if(empty($rslist)){
			$data['sussces'] = false;
		}
		echo json_encode($data);exit;
	}
}