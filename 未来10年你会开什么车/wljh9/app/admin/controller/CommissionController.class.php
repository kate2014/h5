<?php
class CommissionController extends BaseController {
	protected $where = null;
	function index() {

		$o = new CommissionModel();
	//	$where = 'f.agent_level=0';
		//$where = $this->where;
        $where=" 1=1 ";
        
        //$uid = empty($_REQUEST['uid']) ? '' : $_REQUEST['uid'];

    	/*if (isset($_POST)) {
    		if (!$uid) {
                $where .= ' or id="' . $_POST['uid'].'"';
    			        //$where = "id = '{$uid}'";
    		}
    	}*/

         if(isset($_POST['uid'])&& ($_POST['uid']!=null)){
            $where .= ' AND id="' . $_POST['uid'].'"';
            }else if(isset($_POST['nickname'])&& ($_POST['nickname']!=null)){
                $where .= ' AND nickname="' . $_POST['nickname'].'"';
            }

	    $rowtotal = $o->getCount($where); //总记录数
		$nowpage = isset($_GET['p'])?$_GET['p']:1;
		$pagesize = 7; //每页记录数
		$start = ($nowpage-1) * $pagesize;
		$rslist = $o->getListJoin($pagesize, $start, $where);
		$pages = Page::pages($rowtotal,$pagesize);
		
		$this->assign('page', $pages);
		$this->assign('rslist', $rslist);
		
		$this->display();
	}

	/**
	 * 返现明细
	 */
	function cashbackDetail() {
		$uid = isset($_GET['uid']) ? trim($_GET['uid']) : 0;
		$o = new CashbackDetailModel();
		$where = 'cd.user_id=' . $uid;
	    $rowtotal = $o->getCount($where); //总记录数
		$nowpage = isset($_GET['p'])?$_GET['p']:1;
		$pagesize = 15; //每页记录数
		$start = ($nowpage-1) * $pagesize;
		$rslist = $o->getListJoin($pagesize, $start, $where);
		$pages = Page::pages($rowtotal,$pagesize);

		$this->assign('page', $pages);
		$this->assign('rslist', $rslist);
		
		
		$this->display();
	}
	
	/**
	 * 佣金明细
	 */
	function commissionDetail() {
		$uid = isset($_GET['uid']) ? trim($_GET['uid']) : 0;
		$o = new CommissionDetailModel();
		$where = 'user_id=' . $uid;
	    $rowtotal = $o->getCount($where); //总记录数
		$nowpage = isset($_GET['p'])?$_GET['p']:1;
		$pagesize = 15; //每页记录数
		$start = ($nowpage-1) * $pagesize;
		$rslist = $o->getList($pagesize, $start, $where);
		$pages = Page::pages($rowtotal,$pagesize);

		$this->assign('page', $pages);
		$this->assign('rslist', $rslist);
		
		$this->display();
	}
	
}