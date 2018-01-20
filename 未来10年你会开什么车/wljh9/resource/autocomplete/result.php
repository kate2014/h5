<?php
header("Content-type:text/html;charset=utf-8");
$q = $_GET["q"];
if($q=="qb"){
	$str = "qb-青斑|1 \n";
	$str.= "qb-全部|2 \n";
}
if($q=="tl"){
	$str = "tl-讨论|3 \n";
	$str.= "tl-田螺|4 \n";
}
echo $str;