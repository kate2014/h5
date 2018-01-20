<?php
class AuthGroupAccessModel  extends BaseModel {
	protected $table='auth_group_access';
	
	/**
	 * 批量插入
	 * @param array $arr_values
	 * @param string $fields
	 */
	function inserts($arr_values, $fields = null, $method = 'INSERT') {
	
		$values = implode(',', $arr_values);
		$sql = "$method INTO " . TABLE_PREFIX . $this->table . " $fields VALUES $values";
		return $this->db->insert($sql);
	}
	
	/**
	 * 删除组成员
	 */
	function delete($where = null) {
		$sql = "DELETE FROM " . TABLE_PREFIX . $this->table ;
		if ($where) {
			$sql .= " WHERE $where ";
		}
		return $this->db->delete($sql);
	}
	
	
}