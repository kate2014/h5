<?php
//用户管理
class AdminController extends BaseController {
	
	function __construct() {
		
		
		parent::__construct();
	}
    function del()
	{
		$obj = new AdminModel();
		$id = isset($_POST['id'])?intval($_POST['id']):'';
		$result=$obj->batchDel($id);
		if($result)
			die(true);
		else
			die(false);
	}
	function index() {
	    
	    $obj = new AdminModel();
	    $rowtotal = $obj->getCount(); //总记录数
		$nowpage = isset($_GET['p'])?$_GET['p']:1;
		$pagesize = 30; //每页记录数
		$start = ($nowpage-1) * $pagesize;
		$rslist = $obj->getList($pagesize, $start);
		
		$pages = Page::pages($rowtotal,$pagesize);

		$this->assign('page',$pages);
		$this->assign('rslist',$rslist);
        $AuthGroup = new AuthGroupModel();
		$aglist = $AuthGroup->getList();
		$this->assign('rslist2',$aglist);
		$this->display();
	}

	function add() {

		$this->display();
	}
	function addzh() {
		$AuthGroup = new AuthGroupModel();
		$aglist = $AuthGroup->getList();
		$this->assign('rslist2',$aglist);
		$this->display();
	}
	
	function edit() {
		
    	$obj = new AdminModel();
		$id = $_REQUEST['id'];
		if ($id) {
    		$rs = $obj->getOne($id);
		} else {
    		$username = $_SESSION['account'];
    		$rs = $obj->getAdminByAccount($username);
		}
    	$this->assign('rs', $rs);
		$this->display();
	}
	function editps() {
		
    	$obj = new AdminModel();
		$id = $_REQUEST['id'];
		if ($id) {
    		$rs = $obj->getOne($id);
		} else {
    		$username = $_SESSION['account'];
    		$rs = $obj->getAdminByAccount($username);
		}
    	$this->assign('rs', $rs);
		$this->display();
	}
	function editzh() {
            $AuthGroup = new AuthGroupModel();
            $aglist = $AuthGroup->getList();
            $this->assign('rslist2',$aglist);
    	$obj = new AdminModel();
		$id = $_REQUEST['id'];
		if ($id) {
    		$rs = $obj->getOne($id);
            $AuthGroup2 = new AuthGroupModel();
            $aglist2 = $AuthGroup2->getOne($rs['note']);
            $this->assign('rs2',$aglist2);
		} else {
    		$username = $_SESSION['account'];
    		$rs = $obj->getAdminByAccount($username);
		}
    	$this->assign('rs', $rs);
		$this->display();
	}
	
	function save() {
	    $obj = new AdminModel();
		$id = isset($_POST['id'])?$_POST['id']:'';
		$_POST['password'] = isset($_POST['password'])?md5(trim($_POST['password'])):'';
		if (!$_POST['password']) {
			unset($_POST['password']);
		}
		
		$data = $_POST;
		if ($id) {
		    $data['update_time'] = time();
		} else {
		    $data['reg_time'] = time();
		}
	    $rs = $obj->save($data,$id);
	    if ($rs>0) {
	        $url = '?c=' . CONTROL;
	        $url2 = '?c=' . CONTROL . '&act=add';
	        $this->success('保存成功！', $url, $url2);
	    } else {
	        $this->error('操作失败！');
	    }
	}
	function savezh() {
	    $obj = new AdminModel();
		$id = isset($_POST['id'])?$_POST['id']:'';
		$_POST['password'] = isset($_POST['password'])?md5(trim($_POST['password'])):'';
		if (!$_POST['password']) {
			unset($_POST['password']);
		}
		$data=array();
        $data['username']=$_POST['username'];
        $data['password']=$_POST['password'];
        $data['real_name']=$_POST['real_name'];
        $data['note']=$_POST['myradio'];
		//$data = $_POST;
		if ($id) {
		    $data['update_time'] = time();
		} else {
		    $data['reg_time'] = time();
		}
	    $rs = $obj->save($data,$id);
	    if ($rs>0) {
	        $url = '?c=' . CONTROL;
	        $url2 = '?c=' . CONTROL . '&act=addzh';
	        $this->success('保存成功！', $url, $url2);
	    } else {
	        $this->error('操作失败！');
	    }
        $AuthGroup = new AuthGroupModel();
		$aglist = $AuthGroup->getList();
		$this->assign('rslist2',$aglist);
	}
	
	function savePassword() {
	    $obj = new AdminModel();
		$id = isset($_POST['id'])?$_POST['id']:'';
		$pwd = $_POST['password'];
		$newpwd = $_POST['newpwd'];
		$cmfpwd = $_POST['cmfpwd'];
		$username = $_SESSION['account'];
		$flag = $obj->checkAdmin($username, md5($pwd));
		if (!$flag) {
            $this->error('error：修改失败，密码不正确！');
            exit;
		}
	    if ($newpwd==$cmfpwd) {
		    $data['password'] = md5($newpwd);
		    $data['update_time'] = time();
	        $rs = $obj->save($data,$id);
	        if ($rs) {
	            $url = '?c=' . CONTROL;
	            $this->success('修改成功！', $url);
	        }
	    } else {
            $this->error('修改失败，两次输入的新密码不一样！');
	    }
	    
	}
	function savezhPassword() {
	    $obj = new AdminModel();
		$id = isset($_POST['id'])?$_POST['id']:'';
		$pwd = $_POST['password'];
		$newpwd = $_POST['newpwd'];
		$cmfpwd = $_POST['cmfpwd'];
		//$username = $_SESSION['account'];
        $username=$obj->getOne($id);
        //print_r($username);die();
        //$username['password']=md5($pwd);
		//$flag = $obj->save($username, md5($pwd));
		//$flag = $obj->checkAdmin($username, md5($pwd));
        //echo $username['password'].'<br>'.md5($pwd);die();
		if ($username['password']!=md5($pwd)) {
            $this->error('error：修改失败，密码不正确！');
            exit;
		}
	    if ($newpwd==$cmfpwd) {
		    $data['password'] = md5($newpwd);
		    $data['update_time'] = time();
	        $rs = $obj->save($data,$id);
	        if ($rs) {
	            $url = '?c=' . CONTROL;
	            $this->success('修改成功！', $url);
	        }
	    } else {
            $this->error('修改失败，两次输入的新密码不一样！');
	    }
	    
	}
	
	function updatePassword() {
	    
		$this->display();
	}
	
	function ajaxDel() {
		$id = $_GET['id'];
		$administrator_id = $GLOBALS['sys']['administrator_id'];
		if ($id == $_SESSION['admin_id']) {
			exit('非法操作，不可删除自己！');
		} else if ($id == $administrator_id) {
			exit('非法操作，超级管理员不可删除！');
		} else {
			$obj = new AdminModel();
			$rs = $obj->batchDel($id);
			echo $rs;
		}
	}
	
}