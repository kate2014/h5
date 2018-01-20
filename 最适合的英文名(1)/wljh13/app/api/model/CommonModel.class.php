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
		//  echo $sql;exit;

		$rs = $this -> db -> select($sql);
		return $rs;
	}
	function Other($where = null) {
		$sql = "SELECT * FROM " . TABLE_PREFIX . $this -> table . " ";
		if ($where) {
			$sql .= "WHERE $where";
		}
		//  echo $sql;exit;

		$rs = $this -> db -> select($sql);
		return $rs;
	}
	function getOthers($where = null) {
		$sql = "SELECT * FROM " . TABLE_PREFIX . $this -> table . " ";
		if ($where) {
			$sql .= "WHERE $where";
		}
		  echo $sql;exit;

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

	function getMall() {

		$sql = "SELECT * FROM " . TABLE_PREFIX . "mall_config";

		return $this -> db -> select($sql);

	}

}
