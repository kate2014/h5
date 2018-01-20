<?php
function smarty_function_runfunc($params,$template) {
	
	$id = isset($params['id'])?$params['id']:0;
	$data = isset($params['callback'])?$params['callback']:'data';
	
	$arr = array(
		1=>array('a','b'),
		2=>array(
			'1'=>array('id'=>2,'title'=>'bad youth'),
			'2'=>array(
				array('id'=>1,'name'=>'john','age'=>22),
				array('id'=>2,'name'=>'tom','age'=>23),
				array('id'=>3,'name'=>'lucky','age'=>18)	
				)
			),
		3=>array(
			'me'=>array('id'=>3,'title'=>'bad youth'),
			'rslist'=>array(
				array('id'=>1,'name'=>'john','age'=>32),
				array('id'=>2,'name'=>'tom','age'=>33),
				array('id'=>3,'name'=>'lucky','age'=>38)	
				)
			)
		);
	$template->assignByRef($data,$arr[$id]);
}