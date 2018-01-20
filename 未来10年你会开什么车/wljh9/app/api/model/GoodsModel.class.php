<?php
class GoodsModel extends BaseModel {
	public $table = 'goods';
	function __construct() {
		parent::__construct();
	}

	function orderGoodsDel($id) {
		if (!$id) {
			return false;
		}
		$sql = "DELETE FROM " . TABLE_PREFIX . "order_goods WHERE order_id IN(" . $id . ") ";

		return $this -> db -> delete($sql);
	}
	
	function cate2($id) {
		$sql = "SELECT cate_id FROM " . TABLE_PREFIX . "goods ";
		$sql .= " WHERE id=$id ";
		$rs = $this -> db -> select($sql);
		$cid = $rs[0][cate_id];
		
		$sql = "SELECT name FROM " . TABLE_PREFIX . "goods_cate ";
		$sql .= " WHERE id=$cid ";
		$rs = $this -> db -> select($sql);
		$name = $rs[0][name];
		
		return $name;
	}
	
	function cate($id) {
		$sql = "SELECT cate_id FROM " . TABLE_PREFIX . "goods ";
		$sql .= " WHERE id=$id ";

		$rs = $this -> db -> select($sql);
		$cid = $rs[0][cate_id];
		
		$sql = "SELECT pid FROM " . TABLE_PREFIX . "goods_cate ";
		$sql .= " WHERE id=$cid ";
		$rs = $this -> db -> select($sql);
		$pid = $rs[0][pid];
		
		$sql = "SELECT name FROM " . TABLE_PREFIX . "goods_cate ";
		$sql .= " WHERE id=$pid ";
		$rs = $this -> db -> select($sql);
		$name = $rs[0][name];
		
		return $name;
	}
}
