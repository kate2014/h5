<?php
class MenuController extends BaseController {
	
	function index() {
		$obj = new MenuModel();
		$rowtotal = $obj->getCount(); //总记录数
		$nowpage = isset($_GET['p'])?$_GET['p']:1;
		$pagesize = 30; //每页记录数
		$start = ($nowpage-1) * $pagesize;
		$rslist = $obj->getList($pagesize, $start);
	
		$pages = Page::pages($rowtotal,$pagesize);
	
		$this->assign('page',$pages);
		$this->assign('rslist',$rslist);
		$this->display();
	}
	
}