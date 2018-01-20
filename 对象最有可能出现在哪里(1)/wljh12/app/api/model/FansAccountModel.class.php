<?php
class FansAccountModel extends BaseModel {
	public $table='fans_account';
	
	function getOneByUserId($id) {
		$sql = "SELECT * FROM " . TABLE_PREFIX . $this->table
		. " WHERE uid = $id";
	
		$rs = $this->db->getOne($sql);
		return $rs;
	}
	
	/**
	 * 更新余额
	 */
	function updateBalance($money, $uid = 0, $o = '-') {
		$money = add_slashes($money);
		$uid = add_slashes($uid);
		if ($uid) {
			$sql = "UPDATE `eb_fans_account` SET `balance`=`balance`{$o}{$money} WHERE `uid`={$uid}";
			$rs = $this->db->update($sql);
		} else {
			$rs = null;
		}
		return $rs;
	}
	
	/**
	 * 更新帐户
	 * 佣金，余额
	 * 存在就更新，不存在就插入
	 */
	function updateAccount($money, $uid = 0, $o = '-') {
		$money = add_slashes($money);
		$uid = add_slashes($uid);
		if ($uid) {
			$sql = "INSERT INTO `" . TABLE_PREFIX . "fans_account` (`uid`, `commission`, `balance`) values ('{$uid}', '{$money}', '{$money}') "; 
			$sql .= " ON DUPLICATE KEY UPDATE `balance`=`balance`{$o}{$money}, `commission`=`commission`{$o}{$money} ";
			$rs = $this->db->query($sql);
		} else {
			$rs = false;
		}
		return $rs;
	}
	
	/**
	 * 更新积分
	 */
	function updatePoints($points, $uid = 0, $o = '-') {
		$money = add_slashes($money);
		$uid = add_slashes($uid);
		if ($uid) {
			$sql = "UPDATE `eb_fans_account` SET `now_points`=`now_points`{$o}{$points} WHERE `uid`={$uid}";
			$rs = $this->db->update($sql);
		} else {
			$rs = null;
		}
		return $rs;
	}
	
}