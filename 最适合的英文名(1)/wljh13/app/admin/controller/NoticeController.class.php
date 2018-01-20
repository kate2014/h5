<?php
class NoticeController extends BaseController {
	function __construct() {
		parent::__construct ();
        //yu
        $obj3 = new UserCateModel();
        $rs3 = $obj3->getlist();
        $this->assign('rs3', $rs3);        
        //yu
	}
	function index() {

		$where=" hide = 0 ";
		$cate_id = isset($_GET['cate_id'])?$_GET['cate_id']:3;
		
		if ($_POST) 
		{
			if($_POST["title"])
			{
				$title=$_POST["title"];
				$where.=" AND title like '%".$title."%'";
			}
		}
		if($cate_id){
			$where.=" AND cate_id = ".$cate_id;
		}

		$obj = new  NoticeModel();
		$rowtotal = $obj->getCount($where); //总记录数
		$nowpage = isset($_GET['p'])?$_GET['p']:1;
		$pagesize = 30; //每页记录数
		$start = ($nowpage-1) * $pagesize;
		$rslist = $obj->getList($pagesize, $start,$where);
		$pages = Page::pages($rowtotal,$pagesize);
		$this->assign('page',$pages);
		$this->assign('rslist',$rslist);
        $obj2 = new  Notice_CateModel();

        $where = "";
		if($cate_id){
			$where = "id = ".$cate_id;
		}
        $rslist2=$obj2->getList(100,0,$where);
		
		
		//print_r($rslist2['0']['name']);exit;
		$this->assign('turl',$turl);
        $this->assign('cate_id',$cate_id);
        $this->assign('rslist2',$rslist2);
		$this->display();
		
	}
	function add() {
		$cate_id = $_GET['cate_id'];

		$where = "";
		if($cate_id){
			$where = "id = ".$cate_id;
		}
        $obj2 = new  Notice_CateModel();
        $rslist2=$obj2->getList(100,0,$where);

        $this->assign('rslist',$rslist2);
        $this->assign('cate_id',$cate_id);
		
		if($rslist2['0']['id'] == "16" or $rslist2['0']['id'] == "15"){
			$this->display("Notice/add_video.html");
			// $turl = 'edit_video';
		}elseif($rslist2['0']['id'] == "10" or $rslist2['0']['id'] == "9" or $rslist2['0']['id'] == "8" or $rslist2['0']['id'] == "6"){
			$this->display("Notice/add_stare.html");
		}elseif($rslist2['0']['id'] == "11" or $rslist2['0']['id'] == "12" or $rslist2['0']['id'] == "13"){
			$this->display("Notice/add_news.html");
		}else{
			$this->display();
			// $turl = 'edit';
		}
		

	}
	function edit() {
		$id = $_GET['id'];
		$cate_id = $_GET['cate_id'];
		$where = "";
		if($cate_id){
			$where = "id = ".$cate_id;
		}
		$obj = new NoticeModel();
		$rs = $obj->getOne($id);
		$this->assign('rs', $rs);
        $obj2 = new  Notice_CateModel();

        $rslist2=$obj2->getList(100,0,$where);
        $this->assign('rslist2',$rslist2);
        $this->assign('cate_id',$cate_id);
		if($rslist2['0']['id'] == "16" or $rslist2['0']['id'] == "15"){
			$this->display("Notice/edit_video.html");
			// $turl = 'edit_video';
		}elseif($rslist2['0']['id'] == "10" or $rslist2['0']['id'] == "9" or $rslist2['0']['id'] == "8" or $rslist2['0']['id'] == "6"){
			$this->display("Notice/edit_stare.html");
		}elseif($rslist2['0']['id'] == "11" or $rslist2['0']['id'] == "12" or $rslist2['0']['id'] == "13"){
			$this->display("Notice/edit_news.html");
		}else{
			$this->display();
			// $turl = 'edit';
		}
		
	}
	function save() { //die(var_dump($_POST));
		$cate_id = $_GET['cate_id'];

		$obj = new NoticeModel();
		$id = isset($_POST['id'])?$_POST['id']:''; 
		if ($_POST['appointed']) {
			$_POST['appointed'] = strtotime($_POST['appointed']);
		}
		$result = $obj->save($_POST,$id);
        $this->assign('id', $id);
		$rs=$_POST;
		
		if ($result>0) {
			
			if(!$id)
				$rs=$obj->findOne(null,"*"," id DESC");
			$this->assign('success',$id?"修改成功":"添加成功"); 			
		} else {
		    $this->assign('failed',$id?"修改失败":"添加失败");
		}
		$this->assign('rs', $rs);
        $obj2 = new  Notice_CateModel();
        $where = "";
		if($cate_id){
			$where = "id = ".$cate_id;
		}
        $rslist2=$obj2->getList(100,0,$where);
        $this->assign('cate_id',$cate_id);
        $this->assign('rslist2',$rslist2);
		if($rslist2['0']['id'] == "16" or $rslist2['0']['id'] == "15"){
			$this->display("Notice/edit_video.html");
			// $turl = 'edit_video';
		}elseif($rslist2['0']['id'] == "10" or $rslist2['0']['id'] == "9" or $rslist2['0']['id'] == "8" or $rslist2['0']['id'] == "6"){
			$this->display("Notice/edit_stare.html");
		}elseif($rslist2['0']['id'] == "11" or $rslist2['0']['id'] == "12" or $rslist2['0']['id'] == "13"){
			$this->display("Notice/edit_news.html");
		}else{
			$this->display("Notice/edit.html");
			// $turl = 'edit';
		}
		//$this->display("Notice/edit.html");
	}
	function batch_edit() {
		$obj = new NoticeModel ();
		$rslist = array ();
		if ($_POST ["checkList"])
			foreach ( $_POST ["checkList"] as $key => $value ) {
				if ($key != "all")
					$rslist [] = $obj->getOne ( intval ( $value ) );
			}
		$this->assign ( 'type', $_POST ["type"] );
		$cate_m = new NoticeCateModel ();
		$cate_list = $cate_m->get_tree ();
		$this->assign ( 'rslist', $rslist );
		$this->assign ( 'cate_list', $cate_list );
		$this->display ();
	}
	function batch_save() {
		if (! $_POST)
			$this->display ( "Notice/index.html" );
		$arr = $rslist = array ();
		for($i = 0; $i < count ( $_POST ["id"] ); $i ++) {
			foreach ( $_POST as $key => $value )
				$arr [$i] [$key] = $value [$i];
		}
		$obj = new NoticeModel ();
		$failed = "";
		foreach ( $arr as $key => $value ) {
			$result = $obj->save ( $value, $value ["id"] );
			if (! $result)
				$failed .= $value ["name"] . " ";
			$rslist [] = $obj->getOne ( intval ( $value ["id"] ) );
		}
		if (! $failed) {
			$this->assign ( 'success', "修改成功" );
		} else {
			$this->assign ( 'failed', $failed . "修改失败" );
		}
		$cate_m = new NoticeCateModel ();
		$cate_list = $cate_m->get_tree ();
		$this->assign ( 'rslist', $rslist );
		$this->assign ( "type", isset ( $_GET ["type"] ) ? $_GET ["type"] : "" );
		$this->assign ( 'cate_list', $cate_list );
		$this->display ( "Notice/batch_edit.html" );
	}
	function get_list() {
		$brand_m = new BrandModel ();
		$brand_list = $brand_m->getList ();
		$type_m = new NoticeTypeModel ();
		$type_list = $type_m->getList ();
		$unit_m = new UnitModel ();
		$unit_list = $unit_m->getList ();
		$cate_m = new NoticeCateModel ();
		$cate_list = $cate_m->get_tree ();
		$this->assign ( 'unit_list', $unit_list );
		$this->assign ( 'type_list', $type_list );
		$this->assign ( 'cate_list', $cate_list );
		$this->assign ( 'brand_list', $brand_list );
	}
	function ajax_edit_status() {
		if (! $_POST || ! $_GET)
			die ( 0 );
		$obj = new NoticeModel ();
		$id_list = $_POST ["id_list"];
		$status = intval ( $_GET ["status"] );
		foreach ( $id_list as $value ) {
			$obj->setStatus ( $status, intval ( $value ) );
		}
		die ( true );
	}
	function del()
	{
		$obj = new NoticeModel();
		$id = isset($_POST['id'])?intval($_POST['id']):'';
		$result=$obj->batchDel($id);
		if($result)
			die(true);
		else
			die(false);
	}

}