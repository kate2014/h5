<?php
class Person_infoModel extends BaseModel {
	public $table = 'person_info';
	
	/**
	 * 更新帐户积分
	 * 存在就更新，不存在就插入
	 */
	function updatePoints($points, $uid = 0, $o = '+') {
		$points = add_slashes($points);
		$uid = add_slashes($uid);
		$sql = "UPDATE " . TABLE_PREFIX . 'Person_info set ' . " `points`=`points`{$o}{$points} ";
		if ($uid) {
			$sql .= " WHERE `id`={$uid} ";
		}
		$rs = $this->db->update($sql);
		return $rs;
	}
	
}