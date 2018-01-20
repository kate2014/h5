<?php
function smarty_block_calldata($params, $content, $smarty, &$repeat) {
//	extract($params);
	
    $assign = isset($params['assign'])?$params['assign']:'rs';
    static  $cnt, $arr;
    if (is_null($content)) {
    	$arr1 = array(
	        array('id'=>1,'title'=>'a'),
	        array('id'=>2,'title'=>'b'),
	        array('id'=>3,'title'=>'c')
	    );
	    $arr2 = array(
	        array('id'=>11,'title'=>'aA'),
	        array('id'=>22,'title'=>'bB'),
	        array('id'=>33,'title'=>'cC')
	    );
    	$cnt = 0;
   		$arr = $$params['data']; //根据参数调用不同的数据
    }
    
    if($cnt < count($arr)) {
    	$smarty->assignByRef($assign, $arr[$cnt]); //assignByRef 引用方式拷贝变量
    	$cnt++;
    	$repeat = true;
    } else {
    	unset($arr);
    	$repeat = false;
    }
    
    return $content;
    
}