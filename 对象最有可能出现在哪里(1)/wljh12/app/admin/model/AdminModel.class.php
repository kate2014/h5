<?php
class AdminModel extends BaseModel {
    public $db = null;
    public $prefix = 'siu_';
    public $table = null ;
    
    function __construct() {
        global $db_config;
        parent::__construct();
        $this->table = 'admin';
        
    }
    
    function checkAdmin($account,$password) {
        $sql = "SELECT * FROM " . TABLE_PREFIX . $this->table;
        $sql .= " WHERE username='$account' AND password='$password' ";
        echo TABLE_PREFIX;
        return $this->db->getOne($sql);
    }
    
    function checkPassword($id,$password) {
        
    }
    
    function getAdminByAccount($account) {
        $sql = "SELECT * FROM " . TABLE_PREFIX . $this->table . " "
             . "WHERE username='$account' ";
        return $this->db->getOne($sql);
    }
    
    function getList($count=30,$start=0,$where=null, $where = null, $fields='*', $order_by=null) {
        $sql = "SELECT * FROM " . TABLE_PREFIX . $this->table ." ";
    	if ($count>0) {
    		$sql .= " LIMIT $start, $count ";	
    	}
        return $this->db->select($sql);
        
    }
    
    function getListR($where = null) {
    	$sql = "SELECT a.id, a.username, a.note, a.real_name, aga.* FROM " . TABLE_PREFIX . $this->table . " a ";
    	$sql .= "LEFT JOIN " . TABLE_PREFIX . "auth_group_access aga "
    			 . "ON a.id = aga.uid ";
    	if ($where) {
	    	$sql .= "WHERE $where ";
    	}
    	return $this->db->select($sql);
    }
    
}