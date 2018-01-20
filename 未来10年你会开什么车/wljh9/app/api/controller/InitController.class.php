<?php
class InitController extends BaseController {
	function __construct() {
		parent::__construct();
		$this -> checkLogin();

	}

	/**
	 * 检查是否登录
	 */
	function checkLogin() {
		if ( $_SESSION["isuserLogin"] != 1 ) {
				//非微信要求登录

				$data['msg'] = "还没登录";
				$data['success'] = false;

				echo json_encode($data);
				exit ;
		}
	}

	/**
	 * 微信登录
	 */
	function wxLogin() {
		$website = 'http://' . $_SERVER["HTTP_HOST"];
		$url = urlencode($website . '/?c=Login&act=getWxUserInfo');
		$url_code = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=" . APPID . "&redirect_uri=" . $url . "&response_type=code&scope=snsapi_userinfo&state=1";
		//echo $url_code;
		//exit;
		$this -> jump($url_code);
	}

}
