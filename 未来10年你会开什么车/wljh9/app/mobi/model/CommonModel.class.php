<?php
class CommonModel extends Model {
	public $table = null;
	function save($data = array(), $id = 0) {
		$data = add_slashes($data);
		if ($id) {
			$rs = $this -> db -> update_array($data, $this -> table, array('id' => $id));
		} else {
			$rs = $this -> db -> insert_array($data, $this -> table);
		}
		return $rs;
	}

	function sum($condition = '') {
        $sql = "SELECT COUNT(id) FROM " . TABLE_PREFIX . $this->table;
		
        if ($condition) {
        	$sql .= " WHERE $condition and status=1";
        }
        //echo $sql."<br />";
        $rs = $this->db->getCount($sql);
        return $rs;
    }

    function checkRepeat($where){
    	$sql = "SELECT id FROM " . TABLE_PREFIX . $this->table;
    	if($where){
    		$sql .=" WHERE $where ";
    	}
    	$rs = $this->db->select($sql);
    	// echo $sql;
    	return $rs;
    }
	
	function sum2($condition = '') {
        $sql = "SELECT COUNT(id) FROM " . TABLE_PREFIX . $this->table;
		
        if ($condition) {
        	$sql .= " WHERE $condition ";
        }
        //echo $sql."<br />";
        $rs = $this->db->getCount($sql);
        return $rs;
    }
	
	function all($w = null, $c=null, $s=0, $o='id desc', $f = '*') {
		$sql = "SELECT $f FROM "
				. TABLE_PREFIX . $this->table . " ";
		$sql .= " WHERE status=1 ";
		if ($w) {
			$sql .= " AND $w ";
		}
		if ($o) {
			$sql .= " ORDER BY $o ";
		}
		if ($c) {
			$sql .= " LIMIT $s, $c";
		}
		
		$rs = $this->db->select($sql);
		return $rs;
	}
	
	function all2($w = null, $c=null, $s=0, $o='id desc', $f = '*') {
		$sql = "SELECT $f FROM "
				. TABLE_PREFIX . $this->table . " ";
		if ($w) {
			$sql .= " WHERE $w ";
		}
		if ($o) {
			$sql .= " ORDER BY $o ";
		}
		if ($c) {
			$sql .= " LIMIT $s, $c";
		}
		// echo $sql;die;
		$rs = $this->db->select($sql);
		return $rs;
	}
	
	function one($k, $v, $f='*') {
		$sql = "SELECT $f FROM "
				. TABLE_PREFIX . $this->table . " ";
		$sql .= " WHERE $k='$v' ";
		$rs = $this->db->select($sql);
		// echo $sql;die;
		return $rs[0];
	}

	function dels($where = null) {
		$sql = "DELETE FROM " . TABLE_PREFIX . $this -> table . " ";
		if ($where) {
			$sql .= "WHERE $where";
		}
		$rs = $this -> db -> delete($sql);
		return $rs;
	}

	function inserts($values, $fields) {
		$sql = "INSERT INTO " . TABLE_PREFIX . $this -> table . " ({$fields}) VALUES ({$values})";
		//echo $sql;
		//exit;
		return $this -> db -> insert($sql);
	}

	function insertss($values, $fields) {
		$sql = "INSERT INTO " . TABLE_PREFIX . $this -> table . " ({$fields}) VALUES ({$values})";
		echo $sql;
		exit ;
		return $this -> db -> insert($sql);
	}

	function getId($identifier) {
		$sql = 'SELECT id FROM ' . TABLE_PREFIX . $this -> table;
		$sql .= " WHERE identifier='{$identifier}' ";
		$id = $this -> db -> getId($sql);
		return $id;
	}

	function update($arr, $where = null) {
		$sql = "UPDATE " . TABLE_PREFIX . $this -> table . " SET ";
		$i = 0;
		$num = count($arr) - 1;
		foreach ($arr as $field => $row) {

			if ($i != $num) {
				if (preg_match("/'/i", $row)) {
					$sql .= "$field = $row ,";
				} else {
					$sql .= "$field = '$row' ,";
				}
			} else {
				if (preg_match("/'/i", $row)) {
					$sql .= "$field = $row";
				} else {
					$sql .= "$field = '$row'";
				}
			}
			$i++;
		}

		if ($where) {
			$sql .= " WHERE $where";
		}
		//echo $sql;
		//exit ;
		return $this -> db -> update($sql);

	}

	function getOne($id) {
		$sql = "SELECT * FROM " . TABLE_PREFIX . $this -> table . " WHERE id = $id";

		$rs = $this -> db -> getOne($sql);
		return $rs;
	}

	function getOther($where = null) {
		$sql = "SELECT * FROM " . TABLE_PREFIX . $this -> table . " ";


		if ($where) {
			$sql .= "WHERE $where";
		}
		 // echo $sql;exit;

		$rs = $this -> db -> select($sql);
		return $rs;
	}
	function getOthers($where = null) {
		$sql = "SELECT * FROM " . TABLE_PREFIX . $this -> table . " ";
		if ($where) {
			$sql .= "WHERE $where";
		}

		$rs = $this -> db -> select($sql);
		return $rs;
	}

	function getCount($condition = '') {
		$sql = "SELECT COUNT(id) FROM " . TABLE_PREFIX . $this -> table;



		if ($condition) {
			$sql .= " WHERE $condition ";
		}
		$rs = $this -> db -> getCount($sql);
		return $rs;
	}

	function getList($count = 30, $start = 0, $where = null, $fields = '*', $order_by = null) {
		$sql = "SELECT {$fields} FROM " . TABLE_PREFIX . $this -> table . " ";
		if ($where) {
			$sql .= " WHERE $where ";
		}
		if ($order_by) {
			$sql .= " ORDER BY {$order_by} ";
		}
		if ($count) {
			$sql .= " LIMIT $start, $count";
		}
		$rs = $this -> db -> select($sql);
		return $rs;
	}
	function getList2($count = 30, $start = 0, $table ,$where = null, $fields = '*', $order_by = null) {
		$sql = "SELECT {$fields} FROM " . $this -> table . " ";
		//echo $sql;exit;
		if ($where) {
			$sql .= " WHERE $where ";
			//echo $sql;exit;
		}
		if ($order_by) {
			$sql .= " ORDER BY {$order_by} ";
		}
		if ($count) {
			$sql .= " LIMIT $start, $count";
		}

		$rs = $this -> db -> select($sql);
		return $rs;
	}
	function goods($id,$page,$pages) {
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

	function getMall() {

		$sql = "SELECT * FROM " . TABLE_PREFIX . "mall_config";

		return $this -> db -> select($sql);

	}

}
