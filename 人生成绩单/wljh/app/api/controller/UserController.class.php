<?php
class UserController extends BaseController {
	function __construct() {
		parent::__construct();
	}
	function index(){
		
		//
		$data = json_decode($_GET['rawData'],true);
		// 
		$user['nickname'] = $data['nickName'];
		$user['gender'] = $data['gender'];
		$user['language'] = $data['language'];
		$user['city'] = $data['city'];
		$user['province'] = $data['province'];
		$user['country'] = $data['country'];
		$user['avatars'] = $data['avatarUrl'];
		$user['reg_time'] = time();
		$user['last_login_time'] = time();
		$obj = new UserModel();
		 // $file = file_get_contents('uploads/test.txt');
		$flag = $obj -> getUserByUserName($user['nickname']);
		// file_put_contents('uploads/test.txt',$file.$flag."\n");
		if($flag){
			$user['last_login_time'] = time();
			$obj ->save($user,$flag['id']);
		}else{
			$obj ->save($user);
		}
	}
}