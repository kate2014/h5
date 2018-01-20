<?php 
class TrainingController extends BaseController {

	function index(){
		$cate_id = $_GET['cate_id'];

		if(empty($cate_id)){
			$where = " pid = 3 ";
			$obj_cate = new Notice_CateModel();
			$cateids = $obj_cate -> getList("30","0",$where,"id");
			$cateids = arrayToString($cateids);
		}else{
			$cateids = $cate_id;
		}
		
		$where = "n.cate_id in (".$cateids.") ";

		if ($_POST) 
		{
			if($_POST["title"])
			{
				$title=$_POST["title"];
				$where.=" AND n.title like '%".$title."%'";
			}
		}
		$obj = new  NoticeModel();
		$obj -> table = "notice n left join ".TABLE_PREFIX."notice_cate c on n.cate_id = c.id ";
		$rowtotal = $obj->getCount($where); //总记录数
		$nowpage = isset($_GET['p'])?$_GET['p']:1;
		$pagesize = 30; //每页记录数
		$start = ($nowpage-1) * $pagesize;
		$rslist = $obj->getList($pagesize, $start,$where,"n.*,c.name cate_name","n.id desc");
		$pages = Page::pages($rowtotal,$pagesize);
		$this -> catelist();
		$this->assign('page',$pages);
		$this -> assign("cate_id",$cate_id);
		$this->assign('rslist',$rslist);
		$this->display();
	}

	function add(){
		$this -> catelist();
		$this->display();
	}

	function edit(){
		$id = $_GET['id'];
		$obj = new NoticeModel();
		$rs = $obj->getOne($id);

		$this -> catelist();
		$this->assign('rs', $rs);
		$this->display();
	}
	function save(){
		$obj = new NoticeModel();
		$id = isset($_POST['id'])?$_POST['id']:''; 
		
		if(empty($id)){
			$_POST['inputtime'] = time();
 		}
		if(count(explode("//",$_POST["thumb"]))>1){
			$thumb_arr = explode("//",$_POST["thumb"]);
			$_POST['thumb'] = $thumb_arr[2];
		}
 		$_POST['begin'] = strtotime($_POST['begin']);
 		$_POST['closure'] = strtotime($_POST['closure']);
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
		
		$this -> catelist();
		$this->assign('rs', $rs);
	       
		$this->display("Training/edit.html");
	}

	function catelist(){
		$obj = new Notice_CateModel();
		$where = "pid =3";
		$catelist = $obj -> getOther($where);
		$this -> assign("catelist",$catelist);
	}
}
?>