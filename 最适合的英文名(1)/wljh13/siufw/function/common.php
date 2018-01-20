<?php


/**
 * 合并两个数组
 * @param unknown $arr1
 * @param unknown $arr2
 * @return Ambigous <multitype:, unknown>
 */
function my_array_merge($arr1,$arr2) {
	foreach ($arr1 as $key=>$value) {
		foreach ($arr2 as $k=>$v) {
			if ($key==$k) {
				$arr1[$key] = array_merge($value,$v);
				unset($arr2[$k]);
			} else {
				$arr1[$k] = $v;
			}
		}
	}
	return $arr1;
}

/**
 * new Model
 */
function M() {
	$m = new Model(); 
	return $m;
}


/**
 * 压缩html : 清除换行符,清除制表符,去掉注释标记
 * @param $string
 * @return 压缩后的$string
 * */
function compress_html($string) {
	$string = str_replace("\r\n", '', $string); //清除换行符
	$string = str_replace("\n", '', $string); //清除换行符
	$string = str_replace("\t", '', $string); //清除制表符
	$pattern = array (
			"/> *([^ ]*) *</", //去掉注释标记
			"/[\s]+/",
			"/<!--[^!]*-->/",
			"/\" /",
			"/ \"/",
			"'/\*[^*]*\*/'"
	);
	$replace = array (
			">\\1<",
			" ",
			"",
			"\"",
			"\"",
			""
	);
	return preg_replace($pattern, $replace, $string);
}



/**
 * 字符串加密解密
 * DECODE	加密
 * ENCODE	解密
 * @param string $string
 * @param string $operation
 * @param string $key
 * @param number $expiry
 * @return string
 */
function authcode($string, $operation = 'DECODE', $key = '', $expiry = 0) {
	$ckey_length = 4;
	//note 随机密钥长度 取值 0-32;
	//note 加入随机密钥，可以令密文无任何规律，即便是原文和密钥完全相同，加密结果也会每次不同，增大破解难度。
	//note 取值越大，密文变动规律越大，密文变化 = 16 的 $ckey_length 次方
	//note 当此值为 0 时，则不产生随机密钥

	$key = md5($key ? $key : UC_KEY);
	$keya = md5(substr($key, 0, 16));
	$keyb = md5(substr($key, 16, 16));
	$keyc = $ckey_length ? ($operation == 'DECODE' ? substr($string, 0, $ckey_length): substr(md5(microtime()), -$ckey_length)) : '';

	$cryptkey = $keya.md5($keya.$keyc);
	$key_length = strlen($cryptkey);

	$string = $operation == 'DECODE' ? base64_decode(substr($string, $ckey_length)) : sprintf('%010d', $expiry ? $expiry + time() : 0).substr(md5($string.$keyb), 0, 16).$string;
	$string_length = strlen($string);

	$result = '';
	$box = range(0, 255);

	$rndkey = array();
	for($i = 0; $i <= 255; $i++) {
		$rndkey[$i] = ord($cryptkey[$i % $key_length]);
	}

	for($j = $i = 0; $i < 256; $i++) {
		$j = ($j + $box[$i] + $rndkey[$i]) % 256;
		$tmp = $box[$i];
		$box[$i] = $box[$j];
		$box[$j] = $tmp;
	}

	for($a = $j = $i = 0; $i < $string_length; $i++) {
		$a = ($a + 1) % 256;
		$j = ($j + $box[$a]) % 256;
		$tmp = $box[$a];
		$box[$a] = $box[$j];
		$box[$j] = $tmp;
		$result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
	}

	if($operation == 'DECODE')
	{
		if((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0)
		&& substr($result, 10, 16) == substr(md5(substr($result, 26).$keyb), 0, 16)) {
			return substr($result, 26);
		}
		else {
			return '';
		}
	}
	else {
		return $keyc.str_replace('=', '', base64_encode($result));
	}
}

/**
 * 插入数据库字符转义
 * @param unknown $string
 * @param number $force
 * @return string
 */
function add_slashes($string, $force = 0) {
	if(!get_magic_quotes_gpc() || $force) {
		if(is_array($string)) {
			foreach($string as $key => $val) {
				$string[$key] = add_slashes($val, $force);
			}
		} else {
			$string = addslashes($string);
		}
	}

	return $string;
}

//转译字符函数
function daddslashes($string) {
	if(!is_array($string) && !get_magic_quotes_gpc()) {
		$string = addslashes($string);
	} else {
		foreach($string as $key => $val) {
			$string[$key] = daddslashes($val);
		}
	}
	return $string;
}

/**
 函数名称：inject_check()
函数作用：检测提交的值是不是含有SQL注射的字符，防止注射，保护服务器安全
参　　数：$sql_str: 提交的变量
返 回 值：返回检测结果，ture or false
*/
function inject_check($sql_str) {
	return eregi('select|insert|and|or|update|delete|\'|\/\*|\*|\.\.\/|\.\/|union|into|load_file|outfile', $sql_str); // 进行过滤
}

/*
 函数名称：verify_id()
函数作用：校验提交的ID类值是否合法
参　　数：$id: 提交的ID值
返 回 值：返回处理后的ID
*/
function verify_id($id=null) {
	if (!$id) { exit('没有提交参数！'); } // 是否为空判断
	elseif (inject_check($id)) { exit('提交的参数非法！'); } // 注射判断
	elseif (!is_numeric($id)) { exit('提交的参数非法！'); } // 数字判断
	$id = intval($id); // 整型化

	return $id;
}

/*
 函数名称：str_check()
函数作用：对提交的字符串进行过滤
参　　数：$var: 要处理的字符串
返 回 值：返回过滤后的字符串
*/
function str_check( $str ) {
	if (!get_magic_quotes_gpc()) { // 判断magic_quotes_gpc是否打开
		$str = addslashes($str); // 进行过滤
	}
	$str = str_replace("_", "\_", $str); // 把 '_'过滤掉
	$str = str_replace("%", "\%", $str); // 把 '%'过滤掉

	return $str;
}

/*
 函数名称：post_check()
函数作用：对提交的编辑内容进行处理
参　　数：$post: 要提交的内容
返 回 值：$post: 返回过滤后的内容
*/
function post_check($post) {
	if (!get_magic_quotes_gpc()) { // 判断magic_quotes_gpc是否为打开
		$post = addslashes($post); // 进行magic_quotes_gpc没有打开的情况对提交数据的过滤
	}
	$post = str_replace("_", "\_", $post); // 把 '_'过滤掉
	$post = str_replace("%", "\%", $post); // 把 '%'过滤掉
	$post = nl2br($post); // 回车转换
	$post = htmlspecialchars($post); // html标记转换

	return $post;
}