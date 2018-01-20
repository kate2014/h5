<?php
class BaseModel extends Model {
	public $table = null;
	function mydelete($order_sn){
		// echo 1;die;
		//delete from eb_order_goods where order_sn='201506010602546249';
		$sql = "delete from " . TABLE_PREFIX . $this -> table . " WHERE order_sn ='".$order_sn."'";
		$rslist = $this -> db -> query($sql);
		return $rslist;
	}	function goods($id,$page,$pages) {		if ($id != '') {			$sql = "SELECT id FROM " . TABLE_PREFIX . "goods_cate ";		$sql .= " WHERE status=1 and pid=$id ";		$rs = $this -> db -> select($sql);				//return count($rs);		$w3 = " and cate_id in ( ";		//return $w3;		foreach($rs as $k => $v){			$cid = $v['id'];			$w2 .= "'$cid',";		}		$w2 = substr($w2,0,-1)." )";		$w = $w3.$w2;					if ( count($rs) == 0 ) {			$w = " and cate_id={$id} ";		}						$sqls = " WHERE status=1 $w ";		} else {			$sqls = " WHERE status=1 ";		}		$sql = "SELECT * FROM " . TABLE_PREFIX . "goods {$sqls} ORDER BY  id DESC LIMIT $page,$pages";		//return $sql;		return $this -> db -> select($sql);	}	
	function getMcount($user_id,$goods_id){
		// echo 1;die;
		$sql = "SELECT sum(num) FROM " . TABLE_PREFIX . $this -> table . " WHERE user_id =".$user_id." and goods_id=".$goods_id;
		$rslist = $this -> db -> select($sql);
		return $rslist;
	}
	function save($data = array(), $id = 0) {
		$data = add_slashes($data);
		if ($id) {
			$rs = $this -> db -> update_array($data, $this -> table, array('id' => $id));
		} else {
			$rs = $this -> db -> insert_array($data, $this -> table);
		}
		return $rs;
	}
	function saves($data = array(), $array) {
		$data = add_slashes($data);
		$array = add_slashes($array);
		if ($id) {
			$rs = $this -> db -> update_array($data, $this -> table, $array);
		} else {
			$rs = $this -> db -> insert_array($data, $this -> table);
		}
		return $rs;
	}

	/**
	 * 取得所有子分类ID号
	 */
	function getSubIdLists($id = 0, &$array = array(), &$num = 3) {
		//echo "00000000000";exit;
		if (!$id) {
			return $array;
		}
		$sql = "SELECT `id` FROM " . TABLE_PREFIX . "fans_v WHERE `pid` IN ('" . $id . "') AND `pid` > 1 ";
		//echo $sql;exit;
		$rslist = $this -> db -> select($sql);
		if (!$rslist) {
			return $array;
		} else {
			if ($num > 0) {
				$num--;
				foreach ($rslist AS $key => $value) {
					$array[] = $value['id'];
					$this -> getSubIdLists($value["id"], $array, $num);
				}
			}
		}
		return $array;
	}

	/**
	 * 取得直接子分类ID号
	 */
	function getSonIdLists($id = 0) {
		$array = array();
		$sql = "SELECT `id` FROM " . TABLE_PREFIX . "fans_v WHERE `pid` IN ('" . $id . "') AND `pid` > 1 ";
			//echo $sql;exit;
		$rslist = $this -> db -> select($sql);
		if ($rslist) {
			foreach ($rslist AS $key => $value) {
				$array[] = $value['id'];
			}
		}
		return $array;
	}

	/**
	 * 根据标识串得到id
	 * @param unknown $id
	 */
	function getId($identifier) {
		$sql = 'SELECT id FROM ' . TABLE_PREFIX . $this -> table;
		$sql .= " WHERE identifier='{$identifier}' ";
		$id = $this -> db -> getId($sql);
		return $id;
	}

	function getOne($id) {
		$sql = "SELECT * FROM " . TABLE_PREFIX . $this -> table . " WHERE id = $id";

		$rs = $this -> db -> getOne($sql);
		return $rs;
	}

	function selOne($id, $field = null) {

		$sql = "SELECT {$field}  FROM " . TABLE_PREFIX . $this -> table . " WHERE id = $id";
		$sql .= " LIMIT 0,1 ";
		$rs = $this -> db -> getOne($sql);
		return $rs;
	}

	function getOther($where = null) {
		$sql = "SELECT * FROM " . TABLE_PREFIX . $this -> table . " ";
		if ($where) {
			$sql .= "WHERE $where";
		}
		$rs = $this -> db -> select($sql);
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
		//echo $sql;die;
		$rs = $this -> db -> select($sql);
		return $rs;
	}

	function batchSet($field, $val, $id = '') {
		$sql = "UPDATE " . TABLE_PREFIX . $this -> table . " SET " . $field . " ='" . $val . "' ";
		if ($id) {
			$sql .= "WHERE id IN(" . $id . ")";
		}
		return $this -> db -> update($sql);
	}

	/**
	 * 批量修改
	 * @param array $data 键值对
	 * @param string $where
	 * @return number
	 */
	function batchUpdate($data = array(), $where = '') {

		$sql = "UPDATE " . TABLE_PREFIX . $this -> table . " SET ";

		foreach ($data AS $key => $value) {
			$sql_fields[] = "`" . $key . "`='" . $value . "'";
		}
		$sql .= implode(",", $sql_fields);

		if ($where) {
			$sql .= " WHERE $where";
		}
		return $this -> db -> update($sql);
	}

	function batchDel($id) {
		if (!$id) {
			return false;
		}
		$sql = "DELETE FROM " . TABLE_PREFIX . $this -> table . " WHERE id IN(" . $id . ") ";

		if ('module' == $this -> table) {
			$sql .= " AND is_system = 0 ";
		}
		return $this -> db -> delete($sql);
	}

	function setStatus($status, $id = 0) {
		$sql = "UPDATE " . TABLE_PREFIX . $this -> table . " SET status = $status " . "WHERE id IN($id)";
		$rs = $this -> db -> update($sql);
		return $rs;
	}
	
	/**
	 * 下拉提示选择框显示内容
	 * @param string $field 查询字段
	 * @param string $where 查询条件
	 * @param string $count 查询数量
	 * @param number $index 开始下标
	 * @return array $rs
	 */
	function selList($conditions = '', $fields = '*', $order_by = '', $count = 0, $index = 0) {
		$sql = "SELECT $fields FROM " . TABLE_PREFIX . $this -> table . " ";
		$sql .= " WHERE status=1 ";
		if ($conditions) {
			$sql .= " AND $conditions ";
		}
		if ($order_by) {
			$sql .= " ORDER BY $order_by ";
		}
		if ($count) {
			$sql .= " LIMIT $index, $count ";
		}
		// echo $sql;die;
		$rs = $this -> db -> select($sql);
		return $rs;
	}

	/**
	 * 更新多条记录
	 * array([字段名[id[字段值],],])
	 * @param array $arr  二维数组
	 */
	function updates($arr, $where = null) {
		$sql = "UPDATE " . TABLE_PREFIX . $this -> table . " SET ";

		foreach ($arr as $field => $row) {
			$str = "$field = CASE id ";
			$arr_ids[] = implode(',', array_keys($row));
			foreach ($row as $k => $v) {
				$str .= "WHEN '$k' THEN '$v' ";
			}
			$kv[] = $str . ' END ';
		}
		$sql .= implode(',', $kv);

		$ids = implode(',', $arr_ids);

		$sql .= " WHERE id in ($ids) ";
		if ($where) {
			$sql .= " AND $where ";
		}
		return $this -> db -> update($sql);

	}

	/**
	 * 更新多条记录
	 * array([字段名[id[字段值],],])
	 * @param array $arr  二维数组
	 */
	function updateMore($arr, $where = null) {
		$sql = "UPDATE " . TABLE_PREFIX . $this -> table . " SET ";
		$fields = array_keys($arr);

		foreach ($arr as $field => $values) {
			foreach ($values as $key => $value) {
				$str = "`{$field}`= CASE `{$key}` ";
				foreach ($value as $k => $v) {
					$str .= " WHEN '{$k}' THEN '{$v}' ";
					$arr_zd[$k] = $k;
				}
				$str .= ' END ';
				$str_zd = implode(',', $arr_zd);
				$arr_case[] = $str;
			}
			$where = "`{$key}` IN (" . $str_zd . ") ";
		}
		$sql .= implode(',', $arr_case);
		$sql .= " WHERE {$where}";
		return $this -> db -> update($sql);

	}

	function inserts($arr_values, $fields) {
		$values = implode(',', $arr_values);
		$sql = "INSERT INTO " . TABLE_PREFIX . $this -> table . " $fields VALUES $values";
		//	echo $sql;
		return $this -> db -> insert($sql);
	}

	/**
	 * 根据条件查找
	 * @param string $where
	 * @return Ambigous <boolean, unknown>
	 */
	function findOne($where = null, $field = '*', $order_by = null) {
		if (!$field) {
			$field = '*';
		}
		$sql = "SELECT {$field}  FROM " . TABLE_PREFIX . $this -> table;
		if ($where) {
			$sql .= " WHERE $where";
		}
		if ($order_by) {
			$sql .= " ORDER BY {$order_by} ";
		}
		$sql .= " LIMIT 0,1 ";
		$rs = $this -> db -> getOne($sql);
		return $rs;
	}

	function getMall() {

		$sql = "SELECT * FROM " . TABLE_PREFIX . "mall_config";

		return $this -> db -> select($sql);

	}

	function insertsA($values, $fields) {
		$sql = "INSERT INTO " . TABLE_PREFIX . $this -> table . " ({$fields}) VALUES ({$values})";
		//	echo $sql;exit;
		return $this -> db -> insert($sql);
	}
	
	function leftjoinon($user_id, $orderprice) {
		$sql = "SELECT *, eb_yhq_detail.id as aa,eb_yhq.id as bb FROM eb_yhq_detail LEFT JOIN  eb_yhq  ON eb_yhq.id =eb_yhq_detail.wd_time where eb_yhq_detail.user_id=".$user_id." and eb_yhq_detail.oper_id=0 and eb_yhq.hide<=".$orderprice." group by wd_time";
		// $sql = "INSERT INTO " . TABLE_PREFIX . $this -> table . " ({$fields}) VALUES ({$values})";
		//	echo $sql;exit;
		$rslist=$this -> db -> select($sql);
		//print_r($rslist);die;
		return $rslist;
	}
    
    
}
