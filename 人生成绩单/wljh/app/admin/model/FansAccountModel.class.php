<?php
class FansAccountModel extends BaseModel {
	public $table = 'fans_account';
	
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
	
}