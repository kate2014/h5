<?php
class UserModel extends BaseModel {
	public $table = 'user';

	function getOneByOpenid($openid) {
		$sql = "SELECT * FROM " . TABLE_PREFIX . $this->table
		. " WHERE openid = '$openid'";
		$rs = $this->db->getOne($sql);
		return $rs;
	}
	
	function getOne($id) {
		$sql = "SELECT * FROM " . TABLE_PREFIX . $this->table
		. " WHERE id = $id";
	
		$rs = $this->db->getOne($sql);
		return $rs;
	}

	function getOneV($id) {
		$sql = "SELECT * FROM " . TABLE_PREFIX . $this->table
		. " WHERE id = $id";
	
		$rs = $this->db->getOne($sql);
		return $rs;
	}

	function getUserByUserName($username) {
		$sql = "SELECT id FROM " . TABLE_PREFIX . $this -> table . " " . "WHERE nickname='$username' ";
		return $this -> db -> getOne($sql);
	}
	
	/**
	 * 更新帐户
	 * 佣金，余额
	 * 存在就更新，不存在就插入
	 */
	function saveWxUser($data) {
		$data = add_slashes($data);
		$sql_fields = array();
		$sql_val = array();
		foreach($data AS $key=>$value) {
			$sql_fields[] = "`".$key."`";
			$sql_val[] = "'".$value."'";
		}
		$insert_sql = "(".(implode(",",$sql_fields)).") "
				. "VALUES(".(implode(",",$sql_val)).")";
		
		$sql_fields = array();
		unset($data['reg_time']);
		foreach($data AS $key=>$value) {
			$sql_fields[] = "`".$key."`='".$value."'";
		}
		$update_sql = implode(",",$sql_fields);
		
		$sql = "INSERT INTO `" . TABLE_PREFIX . "user` {$insert_sql} ";
		$sql .= " ON DUPLICATE KEY UPDATE {$update_sql} ";
		$rs = $this->db->query($sql);
		return $rs;
	}
	
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
}