<?php
class CashbackDetailModel extends BaseModel {
	public $table = 'cashback_detail';
	
	
	
	/**
	 * 获取粉丝帐户信息列表
	 * 多表联连查询
	 */
	function getListJoin($count=30, $start=0, $where = null, $fields='*', $order_by=null) {
		$sql = "SELECT u.id, u.nickname, f.pid, f.agent_level, f.agent_group, fa.commission, fa.balance, fa.points, cd.* "
				. " FROM  " . TABLE_PREFIX . 'cashback_detail cd ';
		$sql .= " LEFT JOIN " . TABLE_PREFIX . "user u "
				. " ON u.id = cd.user_id ";
		$sql .= " LEFT JOIN " . TABLE_PREFIX . "fans f "
				. " ON f.uid = cd.user_id ";
		$sql .= " LEFT JOIN " . TABLE_PREFIX . "fans_account fa "
				. " ON fa.uid =  cd.user_id ";
		if ($where) {
			$sql .= " WHERE $where ";
		}
		if ($order_by) {
			$sql .= " ORDER BY {$order_by} ";
		}
		if ($count) {
			$sql .= " LIMIT $start, $count";
		}
		
	//	echo $sql;
		
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
					$rslist[$key]['agent_lv_name'] = $agent ? $agent['name'] : '粉丝';
				} else {
					$rslist[$key]['agent_lv_name'] = '粉丝';
				}
			}
		}
		 
		return $rslist;
	}

	/**
	 * 获得数量
	 */
	function getCount($condition = '') {
		$sql = "SELECT COUNT(*) FROM " . TABLE_PREFIX . 'cashback_detail cd ';
		if ($condition) {
			$sql .= " WHERE $condition ";
		}
		$rs = $this->db->getCount($sql);
		return $rs;
	}
}