<?php 
class CompanyStyleController extends BaseController {
	function index(){
		$cateid = isset($_GET['cateid'])?$_GET['cateid']:2;
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
		$cateid = isset($_GET['cateid'])?$_GET['cateid']:2;
		$this->assign('cateid',$cateid);
		$this->display();
	}

	function edit(){
		$id = $_GET['id'];
		$cateid = isset($_GET['cateid'])?$_GET['cateid']:2;
		$obj = new NoticeModel();
		$rs = $obj->getOne($id);
		$this->assign('rs', $rs);
	    $this->assign('cateid',$cateid);
		$this->display();
	}
	function save(){
		$obj = new NoticeModel();
		$id = isset($_POST['id'])?$_POST['id']:''; 
		$cateid = isset($_GET['cateid'])?$_GET['cateid']:2;
		if(empty($id)){
			$_POST['cate_id'] = $cateid;
			$_POST['inputtime'] = time();
 		}
		if(count(explode("//",$_POST["thumb"]))>1){
			$thumb_arr = explode("//",$_POST["thumb"]);
			$_POST['thumb'] = $thumb_arr[2];
		}
		$_POST['thumb'] = ($_POST['thumb'][0] == '/' ? '' : '/') . $_POST['thumb']; 
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
	    
		$this->assign('cateid',$cateid);
		$this->display("CompanyStyle/edit.html");
	}
}
?>