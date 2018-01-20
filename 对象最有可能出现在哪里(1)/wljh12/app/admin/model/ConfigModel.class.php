<?php
class ConfigModel extends BaseModel {
	protected $table = 'config';
	function __construct() {
		parent::__construct();
	}
	
    function selList($conditions='', $fields='*', $order_by='id ASC', $count=0, 
                     $index=0) {
    	$sql = "SELECT $fields FROM " . TABLE_PREFIX . $this->table . " ";
    	$sql .= " WHERE 1=1 ";
    	if ($conditions) {
    		$sql .= " AND $conditions ";
    	}
    	if ($order_by) {
    		$sql .= " ORDER BY $order_by ";
    	}
    	if ($count) {
    		$sql .= " LIMIT $index, $count ";
    	}
    //	echo $sql;
    	$rs = $this->db->select($sql);
    	return $rs;
    }
	
}