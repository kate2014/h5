<?php
class FansModel extends BaseModel {
	public $table = 'fans';
	public $view = 'fans_v';
	public $where = 'agent_level=0';

	/**
	 * 更新帐户
	 * 佣金，余额
	 * 存在就更新，不存在就插入
	 */
	function getMCount($user_id) {
		$sql = "SELECT count(*) FROM " . TABLE_PREFIX . $this->table . " where pid=" .$user_id;
		$rs = $this->db->select($sql);
		return $rs;
	}
	function saveWxFans($data) {
		$data = add_slashes($data);
		$sql_fields = array();
		$sql_val = array();
		foreach ($data AS $key => $value) {
			$sql_fields[] = "`" . $key . "`";
			$sql_val[] = "'" . $value . "'";
		}
		$insert_sql = "(" . (implode(",", $sql_fields)) . ") " . "VALUES(" . (implode(",", $sql_val)) . ")";

		$sql_fields = array();
		foreach ($data AS $key => $value) {
			$sql_fields[] = "`" . $key . "`='" . $value . "'";
		}
		$update_sql = implode(",", $sql_fields);

		$sql = "INSERT INTO `" . TABLE_PREFIX . "fans` {$insert_sql} ";
		$sql .= " ON DUPLICATE KEY UPDATE {$update_sql} ";
		$rs = $this -> db -> query($sql);
		return $rs;
	}

	function save($data = array(), $id = 0) {
		$data = add_slashes($data);
		if ($id) {
			$rs = $this -> db -> update_array($data, $this -> table, array('uid' => $id));
		} else {
			$rs = $this -> db -> insert_array($data, $this -> table);
		}
		return $rs;
	}

	function getList($count = 30, $start = 0, $where = null, $fields = '*', $order_by = null) {
		$sql = "SELECT {$fields} FROM " . TABLE_PREFIX . $this -> view . " ";
		$sql .= ' WHERE ' . $this -> where;
		if ($where) {
			$sql .= " AND $where ";
		}
		if ($order_by) {
			$sql .= " ORDER BY {$order_by} ";
		}
		if ($count) {
			$sql .= " LIMIT $start, $count";
		}
		$rslist = $this -> db -> select($sql);

		foreach ($rslist as $key => $value) {
			$pid = $value['pid'];
			$superior = '厂家';
			if ($pid) {
				$rs = $this -> getOne($pid, 'username');
				$superior = $rs['username'];
			}
			$rslist[$key]['superior'] = $superior;

			$arr_id = $this -> getSubIdList($value['id']);
			$count = count($arr_id);
			//加上自己
			$rslist[$key]['peo_num'] = $count;

		}
		return $rslist;
	}

	/**
	 * 下拉提示选择框显示内容
	 * @param string $field 查询字段
	 * @param string $where 查询条件
	 * @param string $count 查询数量
	 * @param number $index 开始下标
	 * @return array $rs
	 */
	function selListView($conditions = '', $fields = '*', $order_by = '', $count = 0, $index = 0) {
		$sql = "SELECT $fields FROM " . TABLE_PREFIX . $this -> view . " ";
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
		$rs = $this -> db -> select($sql);
		return $rs;
	}

	function getOne($id) {
		$sql = "SELECT * FROM " . TABLE_PREFIX . $this -> view . " WHERE id = $id";

		$rs = $this -> db -> getOne($sql);
		if ($rs) {
			if ($rs['pid']) {
				$res = $this -> getOne($rs['pid'], 'username');
				$superior = $res['username'];
			} else {
				$superior = '厂家';
			}
		}
		$rs['superior'] = $superior;

		return $rs;
	}

	function getOneByUserId($uid) {
		$sql = "SELECT * FROM " . TABLE_PREFIX . $this -> view . " WHERE uid = $uid";

		$rs = $this -> db -> getOne($sql);
		if ($rs) {
			if ($rs['pid']) {
				$res = $this -> getOne($rs['pid'], 'username');
				$superior = $res['username'];
			} else {
				$superior = '厂家';
			}
		}
		$rs['superior'] = $superior;

		return $rs;
	}

	function getOneView($id) {
		$sql = "SELECT * FROM " . TABLE_PREFIX . $this -> view . " WHERE id = $id";

		$rs = $this -> db -> getOne($sql);
		if ($rs) {
			if ($rs['pid']) {
				$res = $this -> getOne($rs['pid'], 'username');
				$superior = $res['username'];
			} else {
				$superior = '厂家';
			}
		}
		$rs['superior'] = $superior;

		return $rs;
	}

	/**
	 * 获取所有下级数量
	 */
	function nodeCount() {

	}

	/**
	 * 取得所有子分类ID号
	 */
	function getSubIdList($id = 0, &$array = array(), &$num = 3) {
		
		if (!$id) {
			return $array;
		}
		$sql = "SELECT `id` FROM " . TABLE_PREFIX . $this -> view . " WHERE `pid` IN ('" . $id . "') AND `pid` > 1 ";
		//echo $sql;exit;
		$rslist = $this -> db -> select($sql);
		if (!$rslist) {
			return $array;
		} else {
			if ($num > 0) {
				$num--;
				foreach ($rslist AS $key => $value) {
					$array[] = $value['id'];
					$this -> getSubIdList($value["id"], $array, $num);
				}
			}
		}
		return $array;
	}

	/**
	 * 取得直接子分类ID号
	 */
	function getSonIdList($id = 0) {
		$array = array();
		$sql = "SELECT `id` FROM " . TABLE_PREFIX . $this -> view . " WHERE `pid` IN ('" . $id . "') AND `pid` > 1 ";
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
	 * 取得直接父级ID号
	 */
	function getParentIdList($id = 0) {
		$array = array();
		$sql = "SELECT `pid` FROM " . TABLE_PREFIX . $this -> view . " WHERE `id` = " . $id . " ";
		$rs = $this -> db -> getOne($sql);
		if ($rs) {
			$pid = $rs['pid'];
			return $pid;
		} else {
			return null;
		}
	}

	function getCount($where = '') {
		$sql = "SELECT COUNT(id) FROM " . TABLE_PREFIX . $this -> view;
		$sql .= ' WHERE ' . $this -> where;
		if ($where) {
			$sql .= " AND $where ";
		}
		$rs = $this -> db -> getCount($sql);
		return $rs;
	}

	function getPercent($type = 'fans', $fields = 'level, percent') {

		$sql = "SELECT $fields FROM " . TABLE_PREFIX . "{$type}_level ";
		$sql .= " ORDER BY level ASC ";
		$rs = $this -> db -> select($sql);
		$level = array();
		if ($rs) {
			foreach ($rs as $key => $value) {
				$level[$value['level']] = $value['percent'];
			}
		}
		return $level;

	}

	function getPercents($type = 'fans', $fields = 'level, percent', $goods_id = '') {
		$sql = "SELECT $fields FROM " . TABLE_PREFIX . "goods_{$type}_level ";
		$sql .= "WHERE goods_id = '$goods_id' ORDER BY level ASC ";
		$rs = $this -> db -> select($sql);
		$level = array();
		if ($rs) {
			foreach ($rs as $key => $value) {
				$level[$value['level']] = $value['percent'];
			}
		}
		return $level;
	}

	function getOrderid($type) {
		$sql = "SELECT * FROM " . TABLE_PREFIX . "order_goods ";
		$sql .= "WHERE order_id = '$type' ORDER BY id ASC ";
		$rs = $this -> db -> select($sql);
		$level = array();
		if ($rs) {
			$i = 0;
			foreach ($rs as $key => $value) {
				$level[$key] = $value;
				$rsS = $this -> db -> select("SELECT * FROM " . TABLE_PREFIX . "goods_fans_level WHERE goods_id = '{$value['goods_id']}' AND (SELECT is_distribution FROM " . TABLE_PREFIX . "goods WHERE id ='{$value['goods_id']}') = 1 ORDER BY id ASC");
				if ($rsS) {
					$level[$key]['row'][$i] = $rsS;
				} else {
					$rsS = $this -> db -> select("SELECT * FROM " . TABLE_PREFIX . "fans_level ORDER BY id ASC");
					$level[$key]['row'][$i] = $rsS;
				}
				$i++;

			}
		}
		$i = 0;
		foreach ($level as $key => $value) {

			foreach ($value['row'] as $k => $v) {

				foreach ($v as $keys => $values) {

					$levels[$i][$values['level']] = $values['percent'];

				}
				$levels[$i]['price'] = $rs[$i]['price']*$rs[$i]['num'];
				$levels[$i]['order_sn'] = $rs[$i]['order_sn'];
				$i++;
			}

		}
        
        
        //var_dump($levels);
		//echo "00000000000000000000";
		//exit;
		
		return $levels;
	}

}
