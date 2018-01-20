<?php
class AuthGroupModel extends BaseModel {
	public $table = 'auth_group';
	function checks($uid) {
		$sql = "SELECT note FROM " . TABLE_PREFIX . "admin ";
		$sql .= "WHERE id = $uid";
		$rs = $this -> db -> getOne($sql);

		$sql = "SELECT rules FROM " . TABLE_PREFIX . "auth_group ";
		$sql .= "WHERE id = {$rs['note']}";
		$rs = $this -> db -> getOne($sql);
		
		return $rs['rules'];

	}

}
