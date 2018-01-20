<?php
class IndexModel extends BaseModel {
	public $db = null;
	public $prefix = 'siu_';
	public $table = null;

	function __construct() {
		global $db_config;
		parent::__construct();

	}

	function getCateList() {
		$sql = "SELECT * FROM " . TABLE_PREFIX . "goods_cate ";
		$sql .= " WHERE status=1 and pid=17 ";
		$sql .= " ORDER BY  sort ASC, id DESC";

		return $this -> db -> select($sql);

	}
	
	function getCateList2($pid) {
		$sql = "SELECT * FROM " . TABLE_PREFIX . "goods_cate ";
		$sql .= " WHERE status=1 and pid=$pid ";
		$sql .= " ORDER BY  sort ASC, id DESC";

		return $this -> db -> select($sql);

	}

	function getGoodsList($id,$page,$pages) {
		if ($id != '') {
			$sql = "SELECT id FROM " . TABLE_PREFIX . "goods_cate ";
		$sql .= " WHERE status=1 and pid=$id ";
		$rs = $this -> db -> select($sql);
		
		//return count($rs);
		$w3 = " and cate_id in ( ";
		//return $w3;
		foreach($rs as $k => $v){
			$cid = $v['id'];
			$w2 .= "'$cid',";
		}
		$w2 = substr($w2,0,-1)." )";
		$w = $w3.$w2;
			
		if ( count($rs) == 0 ) {
			$w = " and cate_id={$id} ";
		}	
			
		$sqls = " WHERE status=1 $w ";
		} else {
			$sqls = " WHERE status=1 ";
		}

		$sql = "SELECT * FROM " . TABLE_PREFIX . "goods {$sqls} ORDER BY  id DESC LIMIT $page,$pages";
		//return $sql;
		return $this -> db -> select($sql);

	}
	function getGoodsList2($id,$page,$pages) {
		if ($id != '') {
			$sqls = " WHERE  status=1 and name like '%" . $id . "%'";

		} else {
			$sqls = " WHERE status=1 ";
		}

		$sql = "SELECT * FROM " . TABLE_PREFIX . "goods {$sqls} ORDER BY sort DESC, id DESC LIMIT $page,$pages";
		return $this -> db -> select($sql);

	}
	function getCarouselList() {


		$sql = "SELECT * FROM " . TABLE_PREFIX . "carousel ORDER BY sort";

		return $this -> db -> select($sql);

	}


}
