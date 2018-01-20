<?php
function smarty_function_test($params,$template) {
	$key = $params['callback']; 
	$func_name = $params['func'];
	$data = $func_name();
	$template->assignByRef($key,$data);
}