<?php 
class MConfigController extends BaseController {

	function index(){
		$obj = new BaseModel();
		$obj -> table = "mconfig";
		$rslist = $obj -> getList();
		$rs = $rslist[0];
		$this -> assign("rs",$rslist[0]);
		$this -> display();
	}
	function save(){
		$obj = new BaseModel();
		$obj -> table = "mconfig";
		$id = isset($_POST['id'])?$_POST['id']:''; 
		if(count(explode("//",$_POST["coverImg"]))>1){
			$thumb_arr = explode("//",$_POST["coverImg"]);
			$_POST['coverImg'] = $thumb_arr[2];
		}
		if($_POST['coverImg']){
			$_POST['coverImg'] = ($_POST['coverImg'][0] == '/' ? '' : '/') . $_POST['coverImg']; 
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
		$this->display("Mconfig/index.html");
	}
	function saves(){
		$obj = new BaseModel();
		$obj -> table = "mconfig";
		$id = isset($_POST['id'])?$_POST['id']:''; 
		
		if($_POST['coverImg']){
			$_POST['coverImg'] = ($_POST['coverImg'][0] == '/' ? '' : '/') . $_POST['coverImg']; 
		}
		
		$result = $obj->save($_POST,$id);
	}
}