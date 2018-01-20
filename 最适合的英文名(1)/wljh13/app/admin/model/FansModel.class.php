<?php
class FansModel extends BaseModel {
	public $table = 'fans';
	public $view = 'fans_v';
	public $where = 'agent_level=0';
	

	function save($data = array(), $id = 0) {
		$data = add_slashes($data);
		if ($id) {
			$rs = $this->db->update_array($data, $this->table,
					array('uid'=>$id));
		} else {
			$rs = $this->db->insert_array($data, $this->table);
		}
		return $rs;
	}
	
	function getList($count=30, $start=0, $where = null, $fields='*', $order_by=null) {
		$sql = "SELECT {$fields} FROM "
		. TABLE_PREFIX . $this->view . " ";
		$sql .= ' WHERE ' . $this->where;
		if ($where) {
			$sql .= " AND $where ";
		}
		if ($order_by) {
			$sql .= " ORDER BY {$order_by} ";
		}
		if ($count) {
			$sql .= " LIMIT $start, $count";
		}
		$rslist = $this->db->select($sql);
		
		foreach ($rslist as $key => $value) {
			$pid = $value['pid'];
			$superior = '厂家';
			if ($pid) {
				$rs = $this->getOne($pid, 'username');	
				$superior = $rs['username'];
			}
			$rslist[$key]['superior'] = $superior;
			
			$arr_id = $this->getSubIdList($value['id']);
			$count =  count($arr_id); 	//加上自己
			$rslist[$key]['peo_num'] = $count ;
			
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
	function selListView($conditions='', $fields='*', $order_by='', $count=0,
			$index=0) {
		$sql = "SELECT $fields FROM " . TABLE_PREFIX . $this->view . " ";
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
		$rs = $this->db->select($sql);
		return $rs;
	}
	
	function getOne($id) {
		$sql = "SELECT * FROM " . TABLE_PREFIX . $this->view
				 . " WHERE id = $id";
	
		$rs = $this->db->getOne($sql);
		if ($rs) {
			if ($rs['pid']) {
				$res = $this->getOne($rs['pid'], 'username');
				$superior = $res['username'];
			} else {
				$superior = '厂家';
			}
		}
		$rs['superior'] = $superior;
		
		return $rs;
	}

	function getOneView($id) {
		$sql = "SELECT * FROM " . TABLE_PREFIX . $this->view
		. " WHERE id = $id";
	
		$rs = $this->db->getOne($sql);
		if ($rs) {
		if ($rs['pid']) {
				$res = $this->getOne($rs['pid'], 'username');
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
	function  nodeCount() {
		
	}
	
	/**
	 * 取得所有子分类ID号
	 */
	function getSubIdList($id=0, &$array = array(), &$num = 3) {
		if(!$id) {
			return $array;
		}
		$sql = "SELECT id FROM " . TABLE_PREFIX . $this->view . " WHERE pid='" . $id . "' ";
		$rslist = $this->db->select($sql);
		if(!$rslist) {
			return $array;
		} else {
			if ($num>0) {
				$num--;
				foreach($rslist AS $key=>$value) {
					$array[] = $value['id'];
					$this->getSubIdList($value["id"], $array, $num);
				}
			}
		}
		return $array;
	}


	function getCount($where = '') {
		$sql = "SELECT COUNT(id) FROM " . TABLE_PREFIX . $this->view;
		$sql .= ' WHERE ' . $this->where;
		if ($where) {
			$sql .= " AND $where ";
		}
		$rs = $this->db->getCount($sql);
		return $rs;
	}
	
	
}