<?php
class MallconfigModel extends BaseModel {
	public $table = 'mall_config';
	function __construct() {
		parent::__construct();
	}
	
    function selLists($conditions='', $fields='*', $order_by='id ASC') {
    	$sql = "SELECT $fields FROM " . TABLE_PREFIX . $this->table . " ";
    	$sql .= " WHERE 1=1 ";
    	if ($conditions) {
    		$sql .= " AND $conditions ";
    	}
    	if ($order_by) {
    		$sql .= " ORDER BY $order_by ";
    	}
    	
    	$rs = $this->db->select($sql);
    	return $rs;
    }
	
}