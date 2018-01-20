<?php 
class AboutUsController extends BaseController {

	function index(){
		$cateid = isset($_GET['cateid'])?$_GET['cateid']:4;
		$where = " cate_id = ".$cateid;
		
		if ($_POST) 
		{
			if($_POST["title"])
			{
				$title=$_POST["title"];
				$where.=" AND title like '%".$title."%'";
			}
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
		$this->assign('cateid',$cateid);
		$this->display();
	}

	function add(){
		$cateid = isset($_GET['cateid'])?$_GET['cateid']:4;
		$this->assign('cateid',$cateid);
		$this->display();
	}

	function edit(){
		$cateid = isset($_GET['cateid'])?$_GET['cateid']:4;
		$id = $_GET['id'];
		$obj = new NoticeModel();
		$rs = $obj->getOne($id);

		if($rs['extra']){
			$extra_arr = json_decode($rs['extra'],true);
			$rs['phone'] = $extra_arr['phone'];
			$rs['tell'] = $extra_arr['tell'];
			$rs['email'] = $extra_arr['email'];
			$rs['website'] = $extra_arr['website'];
			$rs['address'] = $extra_arr['address'];
			$rs['latitude'] = $extra_arr['latitude'];
			$rs['longitude'] = $extra_arr['longitude'];
		}
		$this->assign('rs', $rs);
	    $this->assign('cateid',$cateid);
		$this->display();
	}
	function save(){
		$obj = new NoticeModel();
		$id = isset($_POST['id'])?$_POST['id']:''; 
		$cateid = isset($_GET['cateid'])?$_GET['cateid']:4;
		
		if(empty($id)){
			$_POST['cate_id'] = isset($_GET['cateid'])?$_GET['cateid']:4;
			$_POST['inputtime'] = time();
 		}
		
		if ($result>0) {
			if(!$id)
				$rs=$obj->findOne(null,"*"," id DESC");
			$this->assign('success',$id?"修改成功":"添加成功"); 			
		} else {
		    $this->assign('failed',$id?"修改失败":"添加失败");
		}
		$this->assign('rs', $rs);
	    $this->assign('cateid',$cateid);
		$this->display("AboutUs/edit.html");
	}
}
?>