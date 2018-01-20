<?php
date_default_timezone_set("PRC");    		 //设置时区（中国）

//error_reporting(E_ERROR| E_PARSE);

require_once './config/config.php';	//数据库配置文件
//导入smarty
require_once FW_PATH."library/template/smarty/Smarty.class.php";
	
//包含框架中的函数库文件
include FW_PATH.'function/common.php';

//包含应用数据库配置
include 'config/config.php';
include 'config/' . APP_NAME . '.config.php';

//包含微信配置
include_once 'config/wx.config.php';
include_once 'app/common/common.func.php';


//包含框架预设数据库配置
include FW_PATH.'config/config.php';

//包含应用公共函数库文件
$funcfile = 'app/common/functions.inc.php';
if (file_exists($funcfile)) {
	include_once $funcfile;
}

//包含全局的函数库文件，用户可以自己定义函数在这个文件中
$funcfile=APP_PATH."common/functions.inc.php";
if (file_exists($funcfile)) {
	include_once $funcfile;
}

//设置包含目录（类所在的全部目录）,  PATH_SEPARATOR 分隔符号 Linux(:) Windows(;)
$include_path=get_include_path();  //原基目录
$include_path.=PATH_SEPARATOR.FW_PATH."library/core";
$include_path.=PATH_SEPARATOR.FW_PATH."library/driver";
$include_path.=PATH_SEPARATOR.FW_PATH."library/behavior";
$include_path.=PATH_SEPARATOR.FW_PATH."extend";
$include_path.=PATH_SEPARATOR.APP_PATH."model";
$include_path.=PATH_SEPARATOR.APP_PATH."controller";

$include_path.=PATH_SEPARATOR . "app/class";
error_reporting(0);

//设置include包含文件所在的所有目录
set_include_path($include_path);
spl_autoload_register('autoload');
//自动加载类
function autoload($class_name) {
	include_once $class_name . ".class.php";  
}

//数据库数组
$db_config = array_merge($sys_db_config,$db_config);
$tpl_config = array_merge($sys_tpl_config,$tpl_config);

define('TABLE_PREFIX', $db_config['prefix']);
define('TP', $db_config['prefix']);

session_start();		//开启session会话


Router::parseUrl();    //解析处理URL



$method = isset($_REQUEST['act'])?$_REQUEST['act']:'index';
define("ACT", $method);

$c = ucfirst(isset($_REQUEST['c'])?$_REQUEST['c']:'index');
define("CONTROL", $c);
$GLOBALS['model'] = $c.'Model';

$control_name = $c . 'Controller';

try {
/*
    $controller = new $control_name;
    $controller->run();
*/    
    if (class_exists($control_name)) {
        $controller = new $control_name;
        $controller->run();
    } else {
        exit('非法操作！');
    }
    
} catch (Exception $e) {
    throw new Exception($e); 
}

