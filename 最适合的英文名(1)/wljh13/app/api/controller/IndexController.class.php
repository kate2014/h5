<?php
class IndexController extends BaseController {

	function __construct() {
		parent::__construct();

	}

	function index() {
		
	}
	
	function share_title(){
		$obj = new BaseModel();
		$obj -> table = "title";
		
		$rs = $obj -> getOne(1);
		echo json_encode($rs);
	}
	function kefu(){
		$obj = new BaseModel();
		$obj -> table = "kefu";
		
		$rs = $obj -> getOne(1);
		echo json_encode($rs);
	}

}
