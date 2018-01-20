<?php
/**
 * 判断是否是微信客户端打开
 */
function is_wechat() {
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	
	if (preg_match('/MicroMessenger/i',$user_agent)) {
		return true;
	} else {
		return false;
	}
}



/**
 * 获取微信access_token
 * @return string
 */
function get_access_token(){
	//读取access_token
	$file_access_token = ROOT . "runtime/weixin/access_token.txt"; //access_token保存文件
	$content = file_get_contents($file_access_token);
	$content_arr = json_decode($content, true);
	$access_token = $content_arr['access_token'];
	$start_time= $content_arr['start_time'];
	$expires_in= $content_arr['expires_in'];
	
	$now_time = time();
	//过期重新获取access_token
	if ($now_time > intval($start_time + $expires_in)) {

		//获取微信access_token接口
		$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=" . APPID . "&secret=" . APPSECRET . "";
		$res = https_request($url);
		$result = json_decode($res, true);
		$result['start_time'] = time();
		$access_token_arr = json_encode($result);
		$access_token = $result['access_token'];
	//	$expires_in = $result['expires_in'];
		// save the access_token
		if(empty($access_token)){
			exit("获取access_token出错了");
		}
		
		if (!is_writable($file_access_token)) {
			exit('系统错误：文件没有写入权限，请与管理员联系！');
		}
		$fp = @fopen($file_access_token, 'w+');
		@fwrite($fp, $access_token_arr);
	}
	return $access_token;
} 
 

function https_request($url, $data = null) {
	
	if (!function_exists('curl_init')) {
		throw new Exception('server not install curl');
	}
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
//	curl_setopt($curl, CURLOPT_RETURNTRANSFER, FALSE);
	if (!empty($data)){
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	}
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($curl);
	curl_close($curl);
	return $output;
}

