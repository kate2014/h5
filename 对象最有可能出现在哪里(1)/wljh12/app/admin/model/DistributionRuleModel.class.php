<?php
class DistributionRuleModel extends BaseModel {
	public $table = 'distribution_rule';
	
	function getRule() {
		$sql = 'SELECT * FROM ' . TABLE_PREFIX . $this->table 
				. ' ORDER BY id DESC LIMIT 0,1 ';
		return $this->db->getOne($sql);
	}
	
	
}