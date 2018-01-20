<?php
class Area_priceController extends BaseController {

	function index(){
        
        
        		$obj = new Area_priceModel();
		$rowtotal = $obj->getCount(); //总记录数
		$nowpage = isset($_GET['p'])?$_GET['p']:1;
		$pagesize = 40; //每页记录数
		$start = ($nowpage-1) * $pagesize;
		$rslist = $obj->getList($pagesize, $start);
		
		$pages = Page::pages($rowtotal,$pagesize);

		$this->assign('page',$pages);
		$this->assign('rslist',$rslist);
        

		 $this->display();
		
	}
    
	function add() {
        $this->display();
	}
    function edit() {
		$id = $_GET['id'];
		$obj = new Area_priceModel();
		$rs = $obj->getOne($id);
        $obj2 = new Area_priceModel();
        $rs2=$obj2->getList();
        $this->assign('rslist2', $rs2);

       // var_dump($rs);die();
		$this->assign('rslist', $rs);
		$this->display();
	}
    function del()
	{
		$obj = new Area_priceModel();
		$id = isset($_POST['id'])?intval($_POST['id']):'';
		$result=$obj->batchDel($id);
		if($result)
			die(true);
		else
			die(false);
	}
	function save() {

    


        $arr=array();
        $arr['a_name']=$_POST['hot'];    
        $arr['start_price']=$_POST['ctl00$contentHolder$txtWeight'];    
        $arr['add_price']=$_POST['ctl00$contentHolder$txtAddWeight'];    
        //$arr['state']=$_POST['hot'];
        $obj = new Area_priceModel();
		$id = isset($_POST['id'])?$_POST['id']:''; 
		$result = $obj->save($arr,$id);
		$rs=$arr;
		if ($result>0) {
			if(!$id)
			$rs=$obj->findOne(null,"*"," id DESC");
            

            /*$arr2=array();
            $arr2['a_name']=$_POST['ctl00$contentHolder$txtRegion'];
            $arr2['start_price']=$_POST['ctl00$contentHolder$txtRegionPrice'];
            $arr2['add_price']=$_POST['ctl00$contentHolder$txtAddRegionPrice'];
            $arr2['freight_id']=$rs['id'];
            $obj2 = new Area_priceModel();
            $id2 = isset($_POST['id'])?$_POST['id']:''; 
            if($_POST['ctl00$contentHolder$txtRegion']!=null){
            $result = $obj2->save($arr2,$id2);
            }*/
            
            //$this->assign('id',$rs['id']);
			$this->assign('success',$id?"修改成功":"添加成功"); 			
		} else {
		    $this->assign('failed',$id?"修改失败":"添加失败");
		}

		$this->assign('rslist', $rs);
        $obj2 = new Area_priceModel();
        $rs2=$obj2->getList();
        $this->assign('rslist2', $rs2);
		$this->display("Area_price/edit.html");

    
        //$obj->inserts('start_weight',$start_weight);
        //print_r($_POST['start_weight']);die();
		
	}

    function saves() { 
		if(!$_POST) { 
			$this->error('非法操作！');
		}
		if ($_POST) {
			$payment_m = new PayModel();
		    $payment_m -> table = 'payment';
			$rslist = $payment_m->batchUpdate($_POST,'id = '.$_POST['id']);
			if ($rslist>0) {
				$url = '?c=Pay';
				$url2 = '?c=Pay';
				$this->success('保存成功！', $url, $url2);
			} else {
			    $this->error('操作失败，记录已经存在！');
			}
		} else {
		    $this->error('未做任何修改！');
		}
	}

}
