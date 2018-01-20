<?php

class InitController extends BaseController {

	function __construct() {

		parent::__construct();



		$this->checkLogin();



		

	}

	

	/**

	 * 检查是否登录

	 */

	function checkLogin() {

		if (!(isset($_SESSION["isLoginUser"]) && $_SESSION["isLoginUser"] === 1 && $_SESSION['isUser'])) {

			$user_agent = $_SERVER['HTTP_USER_AGENT'];

			if (false === strpos($user_agent, 'MicroMessenger')) {

				//非微信要求登录



				$this -> jump("?c=login");

			} else {

				// 微信浏览器，自动调用微信帐号信息



				$this -> jump("?c=login");

			}

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



		$this->jump($url_code);

	}

	

	

	

}