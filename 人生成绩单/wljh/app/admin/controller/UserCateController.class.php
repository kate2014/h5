<?php
class UserCateController extends BaseController {
	function __construct() {
		parent::__construct();
	
              
	}
	
	function index() {
		$obj = new UserCateModel();
		$rslist =$obj->getList(); // die(var_dump($rslist));
		$this->assign('rslist',$rslist);
		$this->display();
	}
	
	function add() {
		$this->display();
	}
	
	function edit() {
		$id = $_GET['id'];
		$obj = new UserCateModel(); //die(var_dump($obj));
		$rs = $obj->getOne($id);
		$this->assign('rs', $rs);
		$this->display();
	}
	
	function save() {
		$obj = new UserCateModel();
		$id = isset($_POST['id'])?$_POST['id']:''; //die(var_dump($_POST));
		$rs=$_POST;
		$result = $obj->save($_POST,$id);
		if ($result>0) {
			if(!$id)
				$rs=$obj->findOne(null,"*"," id DESC");

			$this->assign('success',$id?"修改成功":"添加成功");

            if(($id?"修改成功":"添加成功")=='添加成功'){
                    $rs2=$obj->findOne(null,"*"," id DESC");
                    //$rs=$obj->getOther("where 1=1 order by  id DESC");
                    $obj2 = new UserCateModel();
                    $obj2->addgoodszd($rs2['id']);
            }
		} else {
		    $this->assign('failed',$id?"修改失败":"添加失败");
		}
		$this->assign('rs', $rs); 
		$this->display("UserCate/edit.html");
	}
	
	function del()
	{
		$id = isset($_POST['id'])?intval($_POST['id']):'';
 		$obj = new UserModel();
		$UserCount=$obj->getCount(" cate=".$id);
 		if($UserCount>0)
 			die("当前分类下有会员，请先转移相关会员！");
 		$obj->table="user_cate";
		$result=$obj->batchDel($id); 
		if($result){
            $obj2 = new UserCateModel();
           $obj2->dropgoodszd($id);
			die();
        }
		else{
			die("删除失败！");
        }
	}
	
	function ajax_sort()
	{
		$obj = new UserCateModel();
		for($i = 0; $i < count ( $_POST ["id"] ); $i ++) {
			foreach ( $_POST as $key => $value )
				$arr [$i] [$key] = $value [$i];
		} 
		$failed = "";
		foreach ( $arr as $key => $value ) {
			$result = $obj->save ( $value, $value ["id"] );
			if (! $result)
				$failed .= $value ["name"] . " ";
		}
		if (! $failed) {
			die ();
		} else {
			die ($failed . "修改失败" );
		}
	}
	
}