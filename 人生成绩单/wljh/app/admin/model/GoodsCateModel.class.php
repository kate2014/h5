<?php
class GoodsCateModel extends BaseModel {
	public $table = 'goods_cate';
	function __construct() {
		parent::__construct ();
	}
	
	function get_tree($pid=0) {
		$where=" pid =".$pid;
		$sql = "SELECT * FROM " . TABLE_PREFIX . $this->table . " WHERE " . $where . " ORDER BY sort ASC,id DESC";
		
		$result = $this->db->select($sql); // die(var_dump($sql));
		if (! $result)
			return;
		foreach ( $result as $key => $value ) {
			$value ["space"] = "";
			$value["level"]=0; 
			$value["branch"]="";
			$tree [] = $value;
			$sonlist = $this->get_tree ( $value ["id"] );
			if ($sonlist) {
				foreach ( $sonlist as $k => $v ) {
					$v["level"]++;
					$v["branch"]="└─";
					if($v["level"]>1)
					{
						$v ["space"] .= "&nbsp;&nbsp;&nbsp;&nbsp;";
					}
					$tree [] = $v;
				}
			}
		}
		return $tree;
	}
	
	function get_sonlist($pid=0)
	{
		$where=" pid =".$pid;
		$sql = "SELECT id FROM " . TABLE_PREFIX . $this->table . " WHERE " . $where . " ORDER BY sort ASC,id DESC";
		$result = $this->db->select($sql); // die(var_dump($sql));
		if (! $result)
			return;
		foreach ( $result as $key => $value )
		 {
			$id_list [] = $value;
			$sonlist = $this->get_sonlist ( $value ["id"] );
			if ($sonlist)
				foreach ( $sonlist as $k => $v ) 
				{
					$id_list[]=$v;
				}
		}
		return $id_list;
	}
}