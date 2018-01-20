<?php

include_once 'app/class/WechatCallbackapiTest.class.php';
define("TOKEN", "eblhyt2015");

$wechatObj = new WechatCallbackapiTest();
$wechatObj->valid();