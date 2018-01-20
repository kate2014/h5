<?php
class UserController extends BaseController {
    function __construct() {		
        parent::__construct ();
        //yu
        $obj3 = new UserCateModel();
        $rs3 = $obj3->getlist();
        $this->assign('rs3', $rs3);        
        //yu
	}
    function index() {
    $keyword = empty($_REQUEST['keyword']) ? '' : $_REQUEST['keyword'];

    	if (isset($_POST)) {
    		if (!$keyword) {
    			$where = '';
    			$_SESSION['user']['where'] = '';
    		}
    	}
    	if (!$keyword) {
    		if (isset($_POST)) {
    			$where = isset($_SESSION['user']['where']) ? $_SESSION['user']['where'] : '';
    		} else {
    			$where = '';
    		}
    	} else {
			$keyword = $_REQUEST['keyword'];
	        $wherelist[] = "username like '%{$keyword}%'";
	        $wherelist[] = "nickname like '%{$keyword}%'";
	        $wherelist[] = "fullname like '%{$keyword}%'";
	        $where = implode(' OR ' , $wherelist);
	        $_SESSION['user']['where'] = $where;
    	}
	    $obj = new UserModel();
	    $rowtotal = $obj->getCount($where); //总记录数
		$nowpage = isset($_GET['p'])?$_GET['p']:1;
		$pagesize = 15; //每页记录数
		$start = ($nowpage-1) * $pagesize;
		$rslist = $obj->getList($pagesize, $start, $where);
		
			
		$pages = Page::pages($rowtotal,$pagesize);
		$this->assign('page',$pages);
		$this->assign('rslist',$rslist);
		$this->assign('keyword',$keyword);
		
		$this->display();
	}
	
	function search() {
	    
	}
	
    function edit() {
    	if (isset($_GET['id'])) {
    		$id = $_GET['id'];
    		$obj = new $this->model();
    		$rs = $obj->getOne($id);
    	} else {
    		$rs = array();
    	}
	    $this->assign('rs', $rs);
	    $this->display();
    }
	
    function edityhq() {
		$yhq2=new BaseModel();
		$yhq2->table='yhq';
		$yhq2=$yhq2->getList('','','1=1');
		$this->assign('yhq2', $yhq2);
		$yhq_detail2=new BaseModel();
		$yhq_detail2->table='yhq_detail';
		$where=' user_id='.$_GET['id'];
		$yhq_detail2=$yhq_detail2->getList('','',$where);
		$this->assign('yhq_detail2', $yhq_detail2);
    	if (isset($_GET['id'])) {
    		$id = $_GET['id'];
    		$obj = new $this->model();
    		$rs = $obj->getOne($id);
    	} else {
    		$rs = array();
    	}
	    $this->assign('rs', $rs);
	    $this->display();
    }
	
	function save() {
		//print_r($_POST);die;
		$obj = new $this->model();
		$id = isset($_POST['id'])?$_POST['id']:'';
		$rs = $obj->save($_POST,$id);
		if ($rs>0) {
			$url = '?c=' . CONTROL;
			$url2 = '?c='.CONTROL.'&act=add';
			if ($id) {
				$msg = '更新成功！';
			} else {
				$msg = '保存成功！';
			}
			$this->success($msg, $url);
		} else {
			$this->error('操作失败！');
		}
	}
	function saveyhq() {
		$yhq_detail=new BaseModel();
		$yhq_detail->table='yhq_detail';
		$data2['user_id']=$_GET['id'];
		$data2['op_time']=time();
		$data2['wd_time']=$_POST['yhq_type_id'];
				//print_r($data2);die;
				if($_POST['yhq_type_id']!=0){
						$yhq_detail->save($data2,'');
						$url = '?c=' . CONTROL;
						$msg = '操作成功！';
						$this->success($msg, $url);die;
				}

		
		$url = '?c=' . CONTROL;
		$msg = '请选择！';
		$this->success($msg, $url);die;
		print_r($_POST);die;
		$obj = new $this->model();
		$id = isset($_POST['id'])?$_POST['id']:'';
		$rs = $obj->save($_POST,$id);
		if ($rs>0) {
			$url = '?c=' . CONTROL;
			$url2 = '?c='.CONTROL.'&act=add';
			if ($id) {
				$msg = '更新成功！';
			} else {
				$msg = '保存成功！';
			}
			$this->success($msg, $url);
		} else {
			$this->error('操作失败！');
		}
	}
	
	/**
	 * 个人钱包/积分兑换设置
	 *
	 */
	function pointSet() {
		$id = 1;
		$obj = new PointConfigModel();
		$rs = $obj->getOne($id);
		$this->assign('rs', $rs);
		$this->display();
	}
	
	/**
	 * 保存个人钱包/积分兑换设置
	 */
	function pointSetDo() {
		$obj = new PointConfigModel();
		//	$id = isset($_POST['id'])?$_POST['id']:'';
		$id = 1;
		$data['ratio'] = trim($_POST['ratio']);
		$rs = $obj->save($data, $id);
		if ($rs>0) {
			$url = '?c='.CONTROL.'&act=pointSet';
			if ($id) {
				$msg = '更新成功！';
			} else {
				$msg = '保存成功！';
			}
			$this->success($msg, $url);
		} else {
			$this->error('操作失败，记录已经存在！');
		}
	}
	
	
}