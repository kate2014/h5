<?php
class Controller extends MyTpl {
    
	function __construct() {
        parent::__construct();
        
        $this->assign('tpl_path', TPL_PATH);
		$this->assign('act', ACT);
		$this->assign('c', CONTROL);
		
	}
	
	function run() {
		//如果有子类Base，调用这个类的init()方法 做权限控制
		if (method_exists($this, "init")) {
			$this->init();
		}

		//根据动作去找对应的方法
		$method = isset($_REQUEST['act'])?$_REQUEST['act']:'index';
		$this->$method();
		/*
		if (method_exists($this, $method)) {
			$this->$method();
		} else {
			$this->error('错误的操作,方法【'.$method.'】不存在!');
		}
		*/
	}
	
	function jump($url) {
	    header('location:'.$url);
	}
	
	function msg($msg, $arr) {
	    $this->assign('msg', $msg, false);
	    $this->assign('links', $arr, false);
	    $this->display('Public/msg.html');
    	exit;
	}
	
	function success($msg= '操作成功！', $url = '', $url2 = '') {
		$url = $url?$url:'?c=' . CONTROL;
		$url2 = $url2?$url2:$_SERVER['HTTP_REFERER'];
	    $this->assign('msg', $msg, false);
	    $this->assign('to_url',$url, false);
	    $this->assign('to_url2',$url2, false);
	    $this->display('Public/success.html');
    	exit;
	}
	
	function error($msg, $url = '') {
		$bo = $this->isAjax();
		if ($bo) {
			exit($msg);
		} else {
			if (!$url) {
				$url = 'javascript:history.go(-1);';
			}
		    $this->assign('msg', $msg, false);
		    $this->assign('to_url',$url, false);
		    $this->display('Public/error.html');
	    	exit;
		}
	}
	
	function isAjax() {
		$isAjax = false;
		if ( isset($_SERVER['HTTP_X_REQUESTED_WITH'])
		&& $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
			$isAjax = true;
		}
		return $isAjax;
	}


	


	function __call($functionName, $args) {
	//    echo"你所调用的方法： ".$functionName."不存在！\n";

	    exit('非法操作！');
	}

}
