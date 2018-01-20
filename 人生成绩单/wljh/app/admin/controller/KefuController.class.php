<?php 
class KefuController extends BaseController {
	function index(){
		$obj = new BaseModel();
		$obj -> table = "kefu";
		$rslist = $obj -> getOther("1=1");
		$this -> assign('rslist',$rslist);
		$this -> display();
	}

	function add(){

		$this -> display();
	}

	function edit(){
		$id = $_GET['id'];
		$obj = new KefuModel();
		$rs = $obj->getOne($id);
		$this->assign('rs', $rs);
	       
		$this->display();
	}
	function save(){
		$obj = new KefuModel();
		$id = isset($_POST['id'])?$_POST['id']:''; 
		
		if(empty($id)){
			$_POST['inputtime'] = time();
 		}else{
 			$_POST['lastinputtime'] = time();
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
	       
		$this->display("Kefu/edit.html");
	}
}