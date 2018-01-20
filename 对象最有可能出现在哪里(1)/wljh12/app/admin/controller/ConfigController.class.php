<?php
class ConfigController extends BaseController {

	function index() { 
		$obj = new ConfigModel();
		$rslist = $obj->selList('hide=0', '*', 'sort ASC');
		$_SESSION['site_config'] = $rslist;

		$this->assign('rslist', $rslist);
		$this->display();
	}


	function save() { 
		if(!$_POST) { 
			$this->error('非法操作！');
		}
		$site_config = $_SESSION['site_config'];
		
		foreach ($site_config as $v) {
			$site_conf[$v['identifier']] = $v;
		}
		
		if (isset($_POST['logo_file'])) {
			unset($_POST['logo_file']);
		}
		$arr = array();
		foreach ($_POST as $key => $value) {
			if ($value != $site_conf[$key]['content']) {
				$arr['content'][$site_conf[$key]['id']] = $value;
			}
		}
		
		if ($arr) {
			$obj = new ConfigModel();
			$rslist = $obj->updates($arr);

			if ($rslist>0) {
				$url = '?c=Config';
				$url2 = '?c=Config';
				$this->success('保存成功！', $url, $url2);
			} else {
			    $this->error('操作失败，记录已经存在！');
			}
		} else {
		    $this->error('未做任何修改！');
		}
	}
}
