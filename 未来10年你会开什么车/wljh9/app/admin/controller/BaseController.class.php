<?php
class BaseController extends Controller {
	protected $model;

	function __construct() {
		parent::__construct();

		if (!(isset($_SESSION["isLogin"]) && $_SESSION["isLogin"] === 1 && $_SESSION['isAdmin'])) {
			$this -> jump("?c=login");
		}

		//当前用户id
		$uid = $_SESSION['admin_id'];
		$administrator_id = $GLOBALS['sys']['administrator_id'];
		$AGM = new AuthGroupModel();
		$group = $AGM -> checks($uid);

		if ($administrator_id == $uid) {

			$this -> assign('group', ",1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,");

		} else {

			$this -> assign('group', $group);

		}
		
		$y = date("Y");
        $this -> assign("y",$y);
		$this -> assign('uid', $uid);
		$this -> assign('admin_id', $administrator_id);

		$this -> model = $GLOBALS['model'];

		$this -> assign('arr_page', '');

		if (CONTROL != 'Index' && CONTROL != 'Login') {
			$join = '';
			//需要验证的规则列表,支持逗号分隔的权限规则或索引数组
			//$name = '?c=' . CONTROL . $join . '&act=' . ACT;
			if ('index' == ACT) {
				$name = CONTROL . $join;
			}

			//超级管理员拥有全权限,无需验证权限
			if ($administrator_id != $uid) {
				$Auth = new AuthModel();
				$flag = $Auth -> check($name, $group);
				if (!$flag) {

					$this -> error('未授权访问！');

				}
			}
		}

		//获得导航栏
		$obj_notice_cate = new Notice_CateModel();
		$where = "id<>3";
		$menulist = $obj_notice_cate -> getList(100,0,$where);

		$this -> assign("menulist",$menulist);
	}

	function index() {
		$obj = new $this->model();
		$rowtotal = $obj -> getCount();
		//总记录数
		$nowpage = isset($_GET['p']) ? $_GET['p'] : 1;
		$pagesize = 30;
		//每页记录数
		$start = ($nowpage - 1) * $pagesize;
		$rslist = $obj -> getList($pagesize, $start);

		$pages = Page::pages($rowtotal, $pagesize);

		$this -> assign('page', $pages);
		$this -> assign('rslist', $rslist);
		$this -> display();
	}

	/*
	 function loginByCookie() {
	 $admin = new AdminModel();  //cookie登录
	 $login_type = 'cookie';
	 $account = $_COOKIE['admin_account'];
	 $flag = $admin->getAdminByAccount($_COOKIE['admin_account']);

	 if ($flag) {

	 $_SESSION['isLogin'] = $_SESSION['isAdmin'] = 1;
	 $_SESSION['account'] = $account;
	 $_SESSION['admin_id'] = $flag['id'];
	 $_SESSION['admin_real_name'] = $flag['real_name'];

	 setcookie("admin_account", $account, time()+3600*24*1);//设置cookie保存1天

	 } else {
	 $to_url = '?c=login';
	 $this->error('登录失败！',$to_url);
	 }
	 }
	 */

	function add() {
		$this -> display();
	}

	function edit() {
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$obj = new $this->model();
			$rs = $obj -> getOne($id);
		} else {
			$rs = array();
		}
		$this -> assign('rs', $rs);
		$this -> display();
	}

	function save() {
		$obj = new $this->model();
		$id = isset($_POST['id']) ? $_POST['id'] : '';
		$rs = $obj -> save($_POST, $id);
		if ($rs > 0) {
			$url = '?c=' . CONTROL;
			$url2 = '?c=' . CONTROL . '&act=add';
			if ($id) {
				$msg = '更新成功！';
			} else {
				$msg = '保存成功！';
			}
			$this -> success($msg, $url, $url2);
		} else {
			$this -> error('服务器繁忙，请稍候再试！');
		}
	}

	function ajaxChangeStatus() {
		$obj = new $this->model;
		$status = $_GET['status'];
		$id = $_GET['id'];
		$rs = $obj -> setStatus($status, $id);
		if ($rs) {
			exit('ok');
		} else {
			exit('操作失败！');
		}
	}

	function ajaxDel() {
		$id = $_GET['id'];
		$obj = new $this->model;
		$rs = $obj -> batchDel($id);
		echo $rs;
	}

	function ajaxBatchSet() {
		$field = $_GET['field'];
		$val = $_GET['val'];
		$id = $_GET['id'];
		$obj = new $this->model;
		$rs = $obj -> batchSet($field, $val, $id);
		echo $rs;
	}

}
