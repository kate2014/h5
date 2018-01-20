<?php
/**
 * 
 */
function output($str='') {
	if ($GLOBALS['debug']) {
		echo $str . '<br/>';
	}
}

/**
 * 获得传输的值
 */
function get_data($str) {
	$val = isset($_POST[$str]) ? 
				$_POST[$str] : 
				(isset($_GET[$str]) ? $_GET[$str] : null);
	return trim($val);
}
function get_arr($arr) {
	$con = '';
	foreach ($arr as $key) {
		$keys = explode('-', $key);
		$con .= '$' . $keys[0] . ' = isset($_POST["' . $key . '"]) ? 
				$_POST["' . $key . '"] : 
				(isset($_GET["' . $key . '"]) ? $_GET["' . $key . '"] : null);';
	}
	//echo $con;
	//exit;

	return trim($con);
}

/**
 * 字符串加密，16位长度
 * @param string $str
 * @return string
 */
function md5_16($str) {
	$new = substr(md5($str), 8, 16);
	return $new;
}

/**
 *递归等级 
 */
function level($pid) {
	$level = 0;
	if ($pid > 0) {
		$level++;
		$obj = new CategoryModel();
		$cate = $obj->getOne($pid, 'pid');
		$pid = $cate['pid'];
		$level = $level + level($pid);
	}
	return $level;
}


/**
 * 无极限分类，递归函数调用
 * @param array $data 
 * @param array $pid 父级id 
 * @param array $data 
 * @return array
 */
function limitless($data, $pid=0, $level=0) { 
	$arr = array();
	if ($data) {
		foreach($data as $v){ 
			if ($v['pid'] == $pid) { 
				$v['level'] = $level;
				$v['html'] = str_repeat('&nbsp', ($level*4));
				$arr[] = $v;
				$arr = array_merge($arr, limitless($data, $v['id'], $level+1));
			}
		}
		return $arr;
	} else {
		return $data;
	}
}

/**
 * 用php过滤表单提交中的危险html代码
 * @param string $str
 * @return string
 */

function uhtml($str) 
{ 
    $farr = array( 
        "/\s+/", //过滤多余空白 
         //过滤 <script>等可能引入恶意内容或恶意改变显示布局的代码,如果不需要插入flash等,还可以加入<object>的过滤 
        "/<(\/?)(script|i?frame|style|html|body|title|link|meta|\?|\%)([^>]*?)>/isU",
        "/(<[^>]*)on[a-zA-Z]+\s*=([^>]*>)/isU",//过滤javascript的on事件 
   ); 
   $tarr = array( 
        " ", 
        "＜\1\2\3＞",//如果要直接清除不安全的标签，这里可以留空 
        "\1\2", 
   ); 
  $str = preg_replace( $farr,$tarr,$str); 
   return $str; 
}

/**
 * smarty插件，自定义函数
 * 分类列表，兼容模块下分类，分类下子分类
 * @param string mid 模块id
 * @param $cid	分类id
 * @param $mid	模型id
 * @param $count	调用数量
 * @param $cs	分类标识串
 * @param $ms	模块标识串
 * @return $rs	array 返回值
 */
function tpl_cate($params, $tpl) {
	extract($params);
	$data = isset($data) ? $data : 'data';
	$count = isset($count) ? $count : 6;
	$cate_m = new CategoryModel();
	if (isset($cid)) {
		$where = ' id = ' . $cid;
	} else if (isset($cs)) {
		$where = " cs = '{$cs}' ";
	} else if (isset($mid)) {
		$where = ' id = ' . $mid;
	} else if (isset($ms)) {
		$where = " identifier = '{$ms}' ";
	}
	if (isset($mid) || isset($ms)) {
		$m = new ModuleModel();
		$me = $m->selOne($where);
		$where2 = ' mid = ' . $me['id'];
	} else {
		$me = $cate_m->selOneV($where, 'id, title, url, thumb, is_index');
		$where2 = ' pid = ' . $me['id'];
	}
	
	$rslist = $cate_m->selListV($where2, 'id, title, url, thumb, is_index', 'sort ASC, id ASC', $count);
	$rs['me'] = $me;
	$rs['rslist'] = $rslist;
	$tpl->assignByRef($data, $rs);
}

/**
 * smarty plugin fucntion，调用文章列表
 * @param $cid	分类id
 * @param $mid	模型id
 * @param $count	调用数量
 * @param $cs	分类标识串
 * @param $ms	模块标识串
 * @param $m	可选参数 ，使用的model
 * @return $rs	array 返回值
 */
function tpl_list($params, $tpl) {
	extract($params);
	$data = isset($data) ? $data : 'data';
	$m = isset($m) ? $m : 'article';
	$model = ucfirst($m) . 'Model'  ; //除了系统，文章模型统一
	
	$thumb = isset($thumb) ? $thumb : 0; 
	

	$cid = isset($cid) ? $cid : 0;
	$mid = isset($mid) ? $mid : 0;
	$count = isset($count) ? $count : 6;
	
	$where = '';
	
	if ($cid) {
		$where = ' cid = ' . $cid;
	} else if ($mid) {
		$where = ' mid = ' . $mid;
	} else if (isset($cs)) {
	//	$where = " cs = '{$cs}' ";
	
		//得到cid
		$c_m = new CategoryModel();
		$rs = $c_m->getOneByCs($cs);
		if ($rs) {
			$cid = $rs['id'];
		
			$rslist = $c_m->selList("(id={$cid} or pid={$cid} ) ", '*');
			foreach ($rslist as $key=>$value) {
				$arr_ids[] = $value['id'];
			}
			$ids = implode(',', $arr_ids);
			$where = " cid IN({$ids}) ";
		} else {
			$where = " cs = '{$cs}' ";
		}
	} else  if (isset($ms)) {
		$where = " ms = '{$ms}' ";
	}

	if (!isset($fields)) {
		if ('article' == $m) {
			$fields = 'id, title, thumb, target, add_time, cname, mname, url';
		} else {
			$fields = '*';
		}
	}
	
	$order_by = isset($order_by) ? $order_by : 'sort DESC, id DESC';
	
	if ($thumb) {
		if ($where) {
			$where = " AND thumb<>'' ";
		} else {
			$where = " thumb<>'' ";
		}
	}
	
	$obj_m = new $model();
	$rslist = $obj_m->selListV($where, $fields, $order_by, $count);
	foreach ($rslist as $key=>$value) {
		$url = isset($value['url']) ? $value['url'] : '';
		$rslist[$key]['url'] = $url ? $url : "?c={$m}&act=view&id={$value['id']}";
	}
	$tpl->assignByRef($data, $rslist);
}

/**
 * smarty plugin fucntion，调用链接列表
 * @param $cid	分类id
 * @param $mid	模型id
 * @param $count	调用数量
 * @param $cs	分类标识串
 * @param $ms	模块标识串
 * @param $m	可选参数 ，使用的model
 * @return $rs	array 返回值
 */
function tpl_link($params, $tpl) {
	extract($params);
	$data = isset($data) ? $data : 'data';
	$m = isset($m) ? $m : 'link';
	$model = ucfirst($m) . 'Model'  ; //除了系统，文章模型统一


	$cid = isset($cid) ? $cid : 0;
	$mid = isset($mid) ? $mid : 0;
	$cs = isset($cs) ? $cs : '';
	$ms = isset($ms) ? $ms :'';
	$count = isset($count) ? $count : 50;

	$where = '';

	if ($cid) {
		$where = ' cid = ' . $cid;
	} else if ($mid) {
		$where = ' mid = ' . $mid;
	} else if ($cs) {
		$where = " cs = '{$cs}' ";
	} else  if ($ms) {
		$where = " ms = '{$ms}' ";
	}
	$fields = 'id, title, url';
	$order_by = 'sort ASC, id ASC';
	

	$obj_m = new $model();
	$rslist = $obj_m->selListV($where, $fields, $order_by, $count);
	foreach ($rslist as $key=>$value) {
		$url = isset($value['url']) ? $value['url'] : '';
		$rslist[$key]['url'] = $url ? $url : "?c={$m}&act=view&id={$value['id']}";
	}
	$tpl->assignByRef($data, $rslist);
}

/**
 * smarty plugin fucntion，调用推荐列表
 * @param $cid	分类id
 * @param $mid	模型id
 * @param $count	调用数量
 * @param $cs	分类标识串
 * @param $ms	模块标识串
 * @param $m	可选参数 ，使用的model
 * @return $rs	array 返回值
 */
function tpl_vouch($params, $tpl) {
	extract($params);
	$data = isset($data) ? $data : 'data';
	$m = isset($m) ? $m : 'article';
	$model = ucfirst($m) . 'Model'  ; //除了系统，文章模型统一


	$cid = isset($cid) ? $cid : 0;
	$mid = isset($mid) ? $mid : 0;
	$cs = isset($cs) ? $cs : '';
	$ms = isset($ms) ? $ms :'';
	$count = isset($count) ? $count : 50;
	
	$obj = new BaseModel();
	$w = array();
	if ($cs && !$cid) {
		$obj->table = 'category';
		$w['cid'] = $obj->getId($cs);
	}
	if (!$mid && $ms) {
		$obj->table = 'module';
		$w['mid'] = $obj->getId($ms);
	}

	$where = '`isvouch`=1';
	if ($w) {
		foreach ($w as $k=>$v) {
			$where .= " AND `{$k}` IN ({$v})";
		}
	}
	$fields = empty($fields) ? 'id, title,target,add_time, url' : $fields;
	if (!empty($thumb)) {
		$fields .= ", thumb";
		$where .= " AND thumb<>'' ";
	}
	$order_by = empty($order_by) ? 'sort DESC, id DESC' : $order_by;
	
	
	$obj_m = new $model();
	
	$rslist = $obj_m->selList($where, $fields, $order_by, $count);
	
	foreach ($rslist as $key=>$value) {
		$url = isset($value['url']) ? $value['url'] : '';
		$rslist[$key]['url'] = $url ? $url : "?c={$m}&act=view&id={$value['id']}";
	}
	$tpl->assignByRef($data, $rslist);
}

/**
 * smarty plugin fucntion，调用推荐列表
 * @param $cid	分类id
 * @param $mid	模型id
 * @param $count	调用数量
 * @param $cs	分类标识串
 * @param $ms	模块标识串
 * @param $m	可选参数 ，使用的model
 * @return $rs	array 返回值
 */
function tpl_top($params, $tpl) {
	extract($params);
	$data = isset($data) ? $data : 'data';
	$m = isset($m) ? $m : 'article';
	$model = ucfirst($m) . 'Model'  ; //除了系统，文章模型统一


	$cid = isset($cid) ? $cid : 0;
	$mid = isset($mid) ? $mid : 0;
	$cs = isset($cs) ? $cs : '';
	$ms = isset($ms) ? $ms :'';
	$count = isset($count) ? $count : 50;

	$obj = new BaseModel();
	$w = array();
	if ($cs && !$cid) {
		$obj->table = 'category';
		$w['cid'] = $obj->getId($cs);
	}
	if (!$mid && $ms) {
		$obj->table = 'module';
		$w['mid'] = $obj->getId($ms);
	}

	$where = '`istop`=1';
	if ($w) {
		foreach ($w as $k=>$v) {
			$where .= " AND `{$k}` IN ({$v})";
		}
	}
	$fields = empty($fields) ? 'id, title,target,add_time, url' : $fields;
	if (!empty($thumb)) {
		$fields .= ", thumb";
		$where .= " AND thumb<>'' ";
	}
	$order_by = empty($order_by) ? 'sort DESC, id DESC' : $order_by;


	$obj_m = new $model();

	$rslist = $obj_m->selList($where, $fields, $order_by, $count);

	foreach ($rslist as $key=>$value) {
		$url = isset($value['url']) ? $value['url'] : '';
		$rslist[$key]['url'] = $url ? $url : "?c={$m}&act=view&id={$value['id']}";
	}
	$tpl->assignByRef($data, $rslist);
}

/**
 * smarty plugin fucntion，调用推荐列表
 * @param $cid	分类id
 * @param $mid	模型id
 * @param $count	调用数量
 * @param $cs	分类标识串
 * @param $ms	模块标识串
 * @param $m	可选参数 ，使用的model
 * @return $rs	array 返回值
 */
function tpl_best($params, $tpl) {
	extract($params);
	$data = isset($data) ? $data : 'data';
	$m = isset($m) ? $m : 'article';
	$model = ucfirst($m) . 'Model'  ; //除了系统，文章模型统一


	$cid = isset($cid) ? $cid : 0;
	$mid = isset($mid) ? $mid : 0;
	$cs = isset($cs) ? $cs : '';
	$ms = isset($ms) ? $ms :'';
	$count = isset($count) ? $count : 50;

	$obj = new BaseModel();
	$w = array();
	if ($cs && !$cid) {
		$obj->table = 'category';
		$w['cid'] = $obj->getId($cs);
	}
	if (!$mid && $ms) {
		$obj->table = 'module';
		$w['mid'] = $obj->getId($ms);
	}

	$where = '`isbest`=1';
	if ($w) {
		foreach ($w as $k=>$v) {
			$where .= " AND `{$k}` IN ({$v})";
		}
	}
	$fields = empty($fields) ? 'id, title,target,add_time, url' : $fields;
	if (!empty($thumb)) {
		$fields .= ", thumb";
		$where .= " AND thumb<>'' ";
	}
	$order_by = empty($order_by) ? 'sort DESC, id DESC' : $order_by;


	$obj_m = new $model();

	$rslist = $obj_m->selList($where, $fields, $order_by, $count);

	foreach ($rslist as $key=>$value) {
		$url = isset($value['url']) ? $value['url'] : '';
		$rslist[$key]['url'] = $url ? $url : "?c={$m}&act=view&id={$value['id']}";
	}
	$tpl->assignByRef($data, $rslist);
}

/**
 * Smarty Plugin
 * function 单篇信息(内容)查询，可以是分类，文章，
 * @param $id		id
 * @param $idstr		标识串
 * @param $m	model名，article，category,...
 * @param data 返回值key
 */
function tpl_msg($params, $tpl) {
	extract($params);
	$data = isset($data) ? $data : 'data'; //var，tag，key
	$rs = ''; //返回值
	$id = empty($id) ? '' : $id;
	$idstr = empty($idstr) ? '' : $idstr;
	$m = empty($m) ? 'article' : $m;
	$fields = empty($fields) ? '*' : $fields;

	$model = ucfirst($m) . 'Model'  ; //除了系统，文章模型统一
	$obj = new $model();
	if ($idstr) {
		$where = "identifier='{$idstr}'";
	} else {
		$where = "id={$id}";
	}
	$rs = $obj->selOne($where, $fields);
	
	$tpl->assignByRef($data, $rs);
}

/**
 *Smarty Plugin
 *function 自定义模版
 */
function tpl_func($params, $tpl) {
	extract($params);
	$data = isset($data) ? $data : 'data'; //var，tag，key
	$rs = ''; //返回值
	$tpl->assignByRef($data, $rs);
}


/**
 * HTML标签补全
 */
function close_tags($html) {
	// 不需要补全的标签
	$arr_single_tags = array('meta', 'img', 'br', 'link', 'area');
	// 匹配开始标签
	preg_match_all('#<([a-z]+)(?: .*)?(?<![/|/ ])>#iU', $html, $result);
	$openedtags = $result[1];
	// 匹配关闭标签
	preg_match_all('#</([a-z]+)>#iU', $html, $result);
	$closedtags = $result[1];
	// 计算关闭开启标签数量，如果相同就返回html数据
	$len_opened = count($openedtags);
	if (count($closedtags) == $len_opened) {
		return $html;
	}
	// 把排序数组，将最后一个开启的标签放在最前面
	$openedtags = array_reverse($openedtags);
	// 遍历开启标签数组
	for ($i = 0; $i < $len_opened; $i++) {
		// 如果需要补全的标签
		if (!in_array($openedtags[$i], $arr_single_tags)) {
			// 如果这个标签不在关闭的标签中
			if (!in_array($openedtags[$i], $closedtags)) {
				// 直接补全闭合标签
				$html .= '</' . $openedtags[$i] . '>';
			} else {
				unset($closedtags[array_search($openedtags[$i], $closedtags)]);
			}
		}
	}
	return $html;
}

//php获取当前访问的完整url地址
function getCurUrl(){
	$url='http://';
	if(isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']=='on'){
		$url='https://';
	}
	if($_SERVER['SERVER_PORT']!='80'){
		$url .= $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI'];
	} else {
		$url .= $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
	}
	return $url;
}

//获取域名
function getServerUrl() {
	$url='http://';
	if(isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']=='on'){
		$url='https://';
	}
	if($_SERVER['SERVER_PORT']!='80'){
		$url .= $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'];
	} else {
		$url .= $_SERVER['SERVER_NAME'];
	}
	return $url;
}

/*
//获得当前的脚本网址
function getCurUrl() {
	if (!empty($_SERVER["REQUEST_URI"])) {
		$scriptName = $_SERVER["REQUEST_URI"];
		$nowurl = $scriptName;
	} else {
		$scriptName = $_SERVER["PHP_SELF"];
		if (empty($_SERVER["QUERY_STRING"])) {
			$nowurl = $scriptName;
		} else {
			$nowurl = $scriptName."?".$_SERVER["QUERY_STRING"];
		}
	}
	return $nowurl;
}
*/
