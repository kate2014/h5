<?php
class RegionsModel extends BaseModel {
	public $table = 'regions';

	/**
	 * 下拉提示选择框显示内容
	 * @param string $field 查询字段
	 * @param string $where 查询条件
	 * @param string $count 查询数量
	 * @param number $index 开始下标
	 * @return array $rs
	 */
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