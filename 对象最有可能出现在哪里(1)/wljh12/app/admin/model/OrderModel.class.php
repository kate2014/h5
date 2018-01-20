<?php
class OrderModel extends BaseModel {
	//public $table = 'order_v';
	public $table = 'order';
	function __construct() {
		parent::__construct();
	}
	


	function getCounts($condition = '') {
        $sql = "SELECT COUNT(id) FROM " . TABLE_PREFIX . "order ";
        if ($condition) {
        	$sql .= " WHERE $condition ";
        }
        $rs = $this->db->getCount($sql);
        return $rs;
    }
	
	function getLists($count=30, $start=0, $where = null) {
		$sql = "SELECT * FROM " . TABLE_PREFIX . "order ";

		if($where) { 
			$sql .= " WHERE ".$where;
		}
        $sql .= " ORDER BY id DESC  ";
    	if ($count) {
    		$sql .= "  LIMIT $start, $count";
    	}
        
    	//echo $sql;die();
    	$rs = $this->db->select($sql);
    	return $rs;
    }
	
	function getOne($id) {
    	$sql = "SELECT * FROM " . TABLE_PREFIX ."order WHERE id = $id";
    	$rs = $this->db->getOne($sql);
    	return $rs;
    }
	
	//订单产品
	function productList($order_id) {
		$fields = "og.*, g.thumb, g.name, g.sale_price";
		$left_join = " LEFT JOIN " . TABLE_PREFIX . "goods AS g ON g.id = og.goods_id ";
		$sql = "SELECT $fields FROM " . TABLE_PREFIX ."order_goods AS og $left_join WHERE order_id = ".$order_id;
		//echo $sql;
		$rs = $this->db->select($sql);
		
		return $rs;
	}


	




}