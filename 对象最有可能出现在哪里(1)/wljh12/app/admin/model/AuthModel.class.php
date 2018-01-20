<?php
class AuthModel extends BaseModel {
	public $table = '';

	function getRules() {
		$sql = "SELECT id,name,title FROM " . TABLE_PREFIX . "auth_rule ";
		return $this -> db -> select($sql);
	}

	function getGroup($id) {
		$sql = "SELECT id,title,rules FROM " . TABLE_PREFIX . "auth_group ";
		$sql .= "WHERE id = $id";
		return $this -> db -> getOne($sql);
	}

	function saveGroup($data = array(), $id = 0) {
		if ($id) {
			$rs = $this -> db -> update_array($data, $this -> table, array('id' => $id));
		} else {
			$rs = $this -> db -> insert_array($data, $this -> table);
		}
		return $rs;
	}

	/**
	 * 查询用户权限
	 * @param string $name URL
	 * @param string $uid 用户ID
	 * @return true
	 */
	function check($name, $url_id) {

		$url_id = substr($url_id, 0, -1);
		$url_id = substr($url_id, 1);

		$sql = "SELECT `condition` FROM " . TABLE_PREFIX . "auth_rule ";
		$sql .= "WHERE id IN({$url_id})";
		$rs = $this -> db -> select($sql);
		$p = '';
		foreach ($rs as $k => $v) {
			$p .= $v['condition'] . ",";
		}
		if (preg_match("/{$name},/i", $p)) {
			return TRUE;
		} else {
			return false;
		}

	}

}
