<?php
class NavModel extends BaseModel {
	public $table = 'nav';
	public $prefix ='';
	
	function __construct() {
		global $db_config;
		parent::__construct();
		$this->prefix = TABLE_PREFIX;
		
	}
	
	/*
	 * 菜单
	 */
	function getnav($pid=0) {
		$sql = "SELECT * FROM " . $this->prefix . "nav"
				. " WHERE pid = $pid AND status = 1 AND hide = 0 ORDER BY sort ASC, id ASC " ;
				
				$rs = $this->db->select($sql);
				
				if (is_array($rs)) {
					foreach ($rs as $key=>$value) {
						$son = $this->getnav($value['id']);
						if ($son) {
							$rs[$key]['son'] = $son;
						}
					}
				}
				return $rs;
	}


	function getTree($pid=0) {
		$sql = "SELECT * FROM " . $this->prefix . "nav"
				. " WHERE pid = $pid AND status = 1 AND ((hide = 0 AND pid=0) OR (hide=1 AND pid > 0)) ORDER BY sort ASC, id ASC " ;
				$rs = $this->db->select($sql);
				if (is_array($rs)) {
					foreach ($rs as $key=>$value) {
						$son = $this->getTree($value['id']);
						if ($son) {
							$rs[$key]['son'] = $son;
						}
					}
				}
				return $rs;
	}
	
	function getList2($pid=0,$status=1,$where=null) {
		$sql = "SELECT * FROM " . $this->prefix . "nav"
			 . " WHERE pid = $pid AND status = $status $where ORDER BY sort ASC, id ASC " ; 
	    $rs = $this->db->select($sql); 

		if (is_array($rs)) {
			foreach ($rs as $key=>$value) {
				$son = $this->getSonList($value['id']);
				if ($son) {
					$rs[$key]['son'] = $son; 
				}
			}
		}		
		return $rs;
	}
	
	function getSonlist($pid=0,$status=1,$where=null) {
		$sql = "SELECT * FROM " . $this->prefix . "nav"
			 . " WHERE pid = $pid AND status = $status ORDER BY sort ASC, id ASC " ;
	    $rs = $this->db->select($sql); 
		if (is_array($rs)) {
			foreach ($rs as $key=>$value) {
				$son = $this->getList($value['id']); 
				if ($son) {
					$rs[$key]['son'] = $son;
				}
			}
		}
		return $rs;
	}
	
}