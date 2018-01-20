<?php
class BaseModel extends Model {
	public $table = null;
	
	function pinglun($count = 30, $start = 0,$cid,$order_by = null){
		//select a.cid,a.pid,a.time,b.avatars,b.nickname from eb_discuss as a left join eb_user as b on a.uid=b.id where a.cid=273
		$sql = "select a.cid,a.pid,a.time,b.avatars,b.nickname from    " . TABLE_PREFIX . "discuss as a left join  ". TABLE_PREFIX ."user as b on a.uid=b.id where a.cid=".$cid;
		if ($order_by) {
			$sql .= " ORDER BY {$order_by} ";
		}
		if ($count) {
			$sql .= " LIMIT $start, $count";
		}
		$rs = $this -> db -> select($sql);
		return $rs;
		
	}
	function shoucang($count = 30, $start = 0,$uid){
		//select * from eb_shoucang as a left join eb_goods as b on a.cid=b.id where a.uid=1868
		$sql = "select b.id,b.thumb,b.name,b.price  from   " . TABLE_PREFIX . "shoucang as a left join ". TABLE_PREFIX ."goods as b on a.cid=b.id where a.uid=".$uid;
		if ($count) {
			$sql .= " LIMIT $start, $count";
		}
		$rs = $this -> db -> select($sql);
		return $rs;
		
	}
	function showlist($count = 30, $start = 0,$user_id){
		//select a.content,a.time, a.goods_id,a.order_id,b.thumb,b.name,b.price   from eb_kefu as a left join eb_goods as b on a.goods_id=b.id where a.uid=1311
		$sql = "select a.content,a.time, a.goods_id,a.order_id,b.thumb,b.name,b.price  from   " . TABLE_PREFIX . "kefu as a left join eb_goods as b on a.goods_id=b.id where a.uid=".$user_id;
		// echo $sql;die;
		if ($count) {
			$sql .= " LIMIT $start, $count";
		}
		$rs = $this -> db -> select($sql);
		return $rs;
	}
	function insertlist($order_id,$goods_id){
		//update eb_order_goods set user_id=1 where order_id=9063 and goods_id=269
		$sql = "update  " . TABLE_PREFIX . "order_goods set user_id=1 where order_id=".$order_id." and goods_id=".$goods_id;
		// echo $sql;die;
		$rs = $this -> db -> query($sql);
		return $rs;
	}
	function orderlist($count = 30, $start = 0,$user_id,$status){
		//select * from eb_order as a left join eb_order_goods as b on  a.id=b.order_id where a.id=b.order_id and a.user_id=1311 and b.user_id!=1
		$sql = "SELECT   b.goods_id,b.order_id,d.thumb,d.name,d.price   FROM " . TABLE_PREFIX . "order as a left join ". TABLE_PREFIX . "order_goods as b on  a.id=b.order_id  left join eb_goods as d on d.id=b.goods_id  where a.id=b.order_id and a.user_id=".$user_id." and b.user_id=".$status;
		// echo $sql;die;
		if ($count) {
			$sql .= " LIMIT $start, $count";
		}
		$rs = $this -> db -> select($sql);
		return $rs;
	}
	function insertkefu($order_id) {
		//select b.id from eb_order_goods as a left join eb_goods as b on a.goods_id = b.id where a.order_id=9063
		//select * from eb_order as a left join eb_order_goods as b on  a.id=b.order_id where a.id=b.order_id and a.user_id=1311 and b.user_id!=1
		$sql = "SELECT b.id FROM " . TABLE_PREFIX . "order_goods as a left join ". TABLE_PREFIX . "goods as b on a.goods_id = b.id where a.order_id=".$order_id;
		//echo $sql;die;
		$rs = $this -> db -> select($sql);
		return $rs;
	}
	function showkefu($uid) {
		//select b.id from eb_order_goods as a left join eb_goods as b on a.goods_id = b.id where a.order_id=9063
		$sql = "SELECT * FROM " . TABLE_PREFIX . "kefu where uid=".$uid." group by order_id";
		//echo $sql;die;
		$rs = $this -> db -> select($sql);
		return $rs;
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
		
		//die($sql);
		
		return $this -> db -> update($sql);

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
    
    
}
