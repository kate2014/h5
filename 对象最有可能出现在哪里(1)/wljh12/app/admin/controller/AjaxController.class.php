<?php
class AjaxController extends Controller {
	function area() {
		$dc_id = isset($_REQUEST['dc_id'])?$_REQUEST['dc_id']:'';
		$dc_m = new DcModel();
		$dc = $dc_m->getOne($dc_id);
		$area_ids = $dc['area_ids'];
		
		$am = new AreaModel();
		$rslist = $am->selList("id IN ($area_ids) AND (type = 'all' or find_in_set('customer',type))");
		echo json_encode($rslist);
		exit;
	}
	
	//获取产品默认属性
	function getDefAttr() {
		$pro_id = $_REQUEST['id'];
		$pm = new ProductModel();
		$p = $pm->getOneById($pro_id, 'd_unit_id, d_st_id, d_pc_id');
		echo json_encode($p);
	}
	
	function checkProductname() {
		$bo = 0 ;
		$pname = isset($_REQUEST['product_name'])?trim($_REQUEST['product_name']):0;
		if ($pname) {
			$pm = new ProductModel();
			$p = $pm->findByProductname($pname);
			if ($p > 0 ) {
				$bo = 1;
			}
		}
		echo $bo;
	}
	
	function upload() {
		$upload = new UploadFile();
		$id = $_REQUEST['inputname'];
		$input_file = $_FILES[$id];
		$file = $upload->upload($input_file);
		echo json_encode($file);
		exit;
		/*
		$status = $file['status'];
		if ('success'==$status) {
			echo $file['filename'];
		} else {
			echo $file['content'];
		}
		*/
	}
	
	function checkSN() {
		$sn = $_REQUEST['sn'];
		if ($sn == $_SESSION['admin_sn']) {
			exit(1);
		} else {
			exit(0);
		}
	}
	
}