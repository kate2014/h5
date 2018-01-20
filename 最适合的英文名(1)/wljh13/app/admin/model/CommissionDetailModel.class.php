<?php
class CommissionDetailModel extends BaseModel {
	public $table = 'commission_detail';
	
	function getList($count=30, $start=0, $where = null, $fields='*', $order_by=null) {
		$sql = "SELECT {$fields} FROM "
		. TABLE_PREFIX . $this->table . " ";
		if ($where) {
			$sql .= " WHERE $where ";
		}
		if ($order_by) {
			$sql .= " ORDER BY {$order_by} ";
		}
		if ($count) {
			$sql .= " LIMIT $start, $count";
		}
		$rs = $this->db->select($sql);
		return $rs;
	}
	
	/**
	 * 获取粉丝帐户信息列表
	 * 多表联连查询
	 */
	function getListJoin($count=30, $start=0, $where = null, $fields='*', $order_by=null) {
		$sql = "SELECT u.id, u.nickname, f.pid, f.agent_level, f.agent_group, fa.commission, fa.balance, fa.points, cd.* "
				. " FROM  " . TABLE_PREFIX . 'user u ';
		$sql .= " LEFT JOIN " . TABLE_PREFIX . "fans f "
				. " ON u.id = f.uid ";
		$sql .= " LEFT JOIN " . TABLE_PREFIX . "fans_account fa "
				. " ON u.id = fa.uid ";
		$sql .= " LEFT JOIN " . TABLE_PREFIX . "commission_detail cd "
				. " ON u.id = cd.user_id ";
		if ($where) {
			$sql .= " WHERE $where ";
		}
		if ($order_by) {
			$sql .= " ORDER BY {$order_by} ";
		}
		if ($count) {
			$sql .= " LIMIT $start, $count";
		}
		$rslist = $this->db->select($sql);
		if ($rslist) {
			$o = new UserModel();
			$base_m = new BaseModel();
			foreach ($rslist as $key => $value) {
				$pid = $value['pid'];
				$superior = '厂家';
				if ($pid) {
					$rs = $o->getOne($pid, 'username');
					$superior = $rs['username'];
				}
				$rslist[$key]['superior'] = $superior;
				 
				$uid = $value['id'];
				$bank = array();
				$base_m->table = 'user_bank';
				$bank = $base_m->findOne('user_id=' . $uid);
				$rslist[$key]['bank'] = $bank ? $bank : null;
	
				$al_id = $value['agent_level'];
				if ($al_id>0) {
					$base_m->table = 'agent_level';
					$agent = $base_m->findOne('id=' . $al_id);
					$rslist[$key]['agent_lv_name'] = $agent ? $agent['name'] : null;
				}
			}
		}
		 
		return $rslist;
	}

	/**
	 * 获得数量
	 */
	function getCount($condition = '') {
		$sql = "SELECT COUNT(*) FROM " . TABLE_PREFIX . $this->table . ' cd ';
		if ($condition) {
			$sql .= " WHERE $condition ";
		}
		$rs = $this->db->getCount($sql);
		return $rs;
	}
}