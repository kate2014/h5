<?php
class MenuModel extends BaseModel {
	public $table = 'menu';

	function __construct() {
		global $db_config;
		parent::__construct();
		$this->prefix = $db_config['prefix'];
	}
	
	/*
	 * 菜单
	 */
	function getMenu($pid=0) {
		$sql = "SELECT * FROM " . $this->prefix . "menu"
				. " WHERE pid = $pid AND status = 1 AND hide = 0 ORDER BY sort ASC, id ASC " ;
				
				$rs = $this->db->select($sql);
				
				if (is_array($rs)) {
					foreach ($rs as $key=>$value) {
						$son = $this->getMenu($value['id']);
						if ($son) {
							$rs[$key]['son'] = $son;
						}
					}
				}
				return $rs;
	}
	
	/**
	 * 后台系统菜单可能用到
	 * @param number $pid
	 * @return Ambigous <unknown, number>
	 */
	function getMenuTree($pid=0) {
		$sql = "SELECT * FROM " . $this->prefix . "menu"
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
	
	
	/**
	 * 权限AUTH有用到
	 * @param number $pid
	 * @return Ambigous <unknown, number>
	 */
	function getTree($pid=0) {
		$sql = "SELECT * FROM " . $this->prefix . "menu"
				. " WHERE pid = $pid AND status = 1 ORDER BY sort ASC, id ASC " ;
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
	
	function getList($pid=0,$status=1,$where=null, $where = null, $fields='*', $order_by=null) {
		$sql = "SELECT * FROM " . $this->prefix . "menu"
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