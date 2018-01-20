<?php
$sys_db_config = array(
    'driver' => 'pdo', //数据库连接方式 , mysql, mysqli, pdo, 规定必须首字母大写,其他小写
    'dbtype' => 'mysql', //数据库类型 , mysql, sqlserver, orcal 规定所有字符小写
    'host' => 'localhost', //数据库服务器地址
    'dbname' => 'siufw', //数据库名
    'username' => 'root', //数据库用户名
    'passwd' => '', //数据库密码
    'port' => '3306', //数据库服务器端口
    'prefix' => 'siu_', //数据表前缀
    'dsn' => 'mysql:host=localhost;dbname=siufw', //使用PDO方式连接
	'persistent' => false, //是否是长连接
    'debug' => false //是否测试
);

$sys_tpl_config = array(
    'left_delimiter' => "<{",   //模板文件中使用的“左”分隔符号
    'right_delimiter' => "}>",   //模板文件中使用的“右”分隔符号
    'force_compile' => false, //强迫编译
    'debugging' => false,  //调试
    'caching' => false,   //开启缓存
    'cache_lifetime' => -1,  //缓存存活时间（秒）-1:永久缓存
);