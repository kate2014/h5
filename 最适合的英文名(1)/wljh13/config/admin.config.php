<?php
$tpl_config = array();
$tpl_config = array(
		'left_delimiter' => '{',   //模板文件中使用的“左”分隔符号
		'right_delimiter' => '}',   //模板文件中使用的“右”分隔符号
		'force_compile' => true, //强迫编译
		'debugging' => false,  //调试
		'caching' => false,   //开启缓存
		'cache_lifetime' => -1  //缓存存活时间（秒）-1:永久缓存
);

$GLOBALS['sys'] = array(
		'administrator_id' => 1
);