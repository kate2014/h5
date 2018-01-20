<?php
class RegionsModel extends BaseModel {
	public $table = 'regions';
	
	/**
	 * 更新帐户积分
	 * 存在就更新，不存在就插入
	 */
	function updatePoints($points, $uid = 0, $o = '+') {
		$points = add_slashes($points);
		$uid = add_slashes($uid);
		$sql = "UPDATE " . TABLE_PREFIX . 'user set ' . " `points`=`points`{$o}{$points} ";
		if ($uid) {
			$sql .= " WHERE `id`={$uid} ";
		}
		$rs = $this->db->update($sql);
		return $rs;
	}
	function selList($conditions='', $fields='*', $order_by='', $count=0,
			$index=0) {
		$sql = "SELECT $fields FROM " . TABLE_PREFIX . $this->table . " ";
		$sql .= " WHERE 1=1 ";
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
}