<?php
header("content-type: text/html; charset=utf-8");
//根目录
//define("ROOT",str_replace("\\","/",dirname(__FILE__))."/");
define("ROOT","./");
define('APP_NAME', 'admin');
define('APP_PATH', 'app/'.APP_NAME.'/');
define('FW_PATH', 'siufw/');
define('TPL_PATH', APP_PATH.'view/');

// error_reporting(0);
require_once FW_PATH.'siufw.php';
