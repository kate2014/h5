<?php
class MessageController extends BaseController {

	function __construct() {
		parent::__construct();
	}
	
	function index(){
		$msg['name'] = $_GET['name'];
		$msg['phone'] = $_GET['phone'];
		$msg['content'] = $_GET['content'];
		$msg['inputtime'] = time();
		
		$obj = new BaseModel();
		$obj -> table = "message";
		
		foreach($msg as $key  => $value)
		{
			if(empty($value)){
				unset($msg[$key]);
			}
		}
		
		$result = $obj -> save($msg);
		if($result){
			$data['code'] = 200;
			$data['sussces'] = true;
		}else{
			$data['code'] = 200;
			$data['sussces'] = false;
		}
		echo json_encode($data);exit;
	}
	
	function woksm(){
		$notice_id =$_GET['cate_id'];
		$msg['name'] =$_GET['name'];
		$msg['gender'] =$_GET['gender'];
		$msg['content'] =$_GET['content'];
		$msg['inputtime'] = time();
		$obj = new BaseModel();
		$obj -> table = "message";
		$where = 'name = "'.$msg['name'].'"';
		$ming = $obj-> getOther($where); 
		//print_r($ming);exit;
		if($ming){
			$data['name'] = $ming[0]['name'];
			$data['content'] = $ming[0]['content'];
			$data['message'] = "查找成功";
		}else{
			$obje = new BaseModel();
			$obje -> table = "message";
			$id = $obje-> save($msg);
			if($id){
				$data['name'] = $msg['name'];
				$data['content'] = $msg['content'];
				$data['message'] = "储存成功";
			}else{
			//$data['name'] = $msg['name'];
			//$data['content'] = $msg['content'];
			$data['message'] = "储存失败";
			}
		}
		$objn = new BaseModel();
		$objn -> table = "notice";
		$erweim = $objn->getOne($notice_id);
		$data['erwgzh'] = $erweim['title'];
		$data['erwurl'] = $erweim['thumb'];
		echo json_encode($data);exit;
	}
}
?>