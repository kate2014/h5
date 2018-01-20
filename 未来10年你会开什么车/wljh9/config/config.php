<?php

$GLOBALS['debug'] = false;
$db_config = array(
    'driver' => 'mysqli', //数据库连接方式 , mysql, mysqli, pdo, 规定必须首字母大写,其他小写
    'dbtype' => 'mysql', //数据库类型 , mysql, sqlserver, orcal 规定所有字符小写
    'host' => 'localhost', //数据库服务器地址
    'dbname' => 'woksmcf', //数据库名 
	'username' => 'root', //数据库用户名
	'passwd' => '', //数据库密码 
    'port' => '3306', //数据库服务器端口
    'prefix' => 'eb_', //数据表前缀
//	'dsn' => 'mysql:host=qdm116283307.my3w.com;dbname=qdm116283307_db', //使用PDO方式连接
	'persistent' => false, //是否是长连接
    'debug' => false //是否测试
);

//认证表不需带前缀
$GLOBALS['AUTH_CONFIG'] = array(
    'AUTH_ON' => true, //认证开关
    'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
    'AUTH_GROUP' => 'auth_group', //用户组数据表名
    'AUTH_GROUP_ACCESS' => 'auth_group_access', //用户组明细表
    'AUTH_RULE' => 'auth_rule', //权限规则表
    'AUTH_USER' => 'admin'//用户信息表
 );