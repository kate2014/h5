<?php
class BaseModel extends Model {
	public $table = null;
	
    function save($data = array(), $id = 0) {
    	$data = add_slashes($data);
        if ($id) {
            $rs = $this->db->update_array($data, $this->table,
                    array('id'=>$id));
        } else {
            $rs = $this->db->insert_array($data, $this->table);
        }
        return $rs;
    }
    
    /**
     * 根据标识串得到id
     * @param unknown $id
     */
    function getId($identifier) {
    	$sql= 'SELECT id FROM ' . TABLE_PREFIX . $this->table;
    	$sql .= " WHERE identifier='{$identifier}' ";
    	$id = $this->db->getId($sql);
    	return $id;
    }

    function getOne($id) {
    	$sql = "SELECT * FROM " . TABLE_PREFIX . $this->table
    	. " WHERE id = $id";

    	$rs = $this->db->getOne($sql);
    	return $rs;
    }

    function all2($w = null, $c=null, $s=0, $o='id desc', $f = '*') {
        $sql = "SELECT $f FROM "
                . TABLE_PREFIX . $this->table . " ";
        if ($w) {
            $sql .= " WHERE $w ";
        }
        if ($o) {
            $sql .= " ORDER BY $o ";
        }
        if ($c) {
            $sql .= " LIMIT $s, $c";
        }
        // echo $sql;die;
        $rs = $this->db->select($sql);
        return $rs;
    }
    
    function selOne($id, $field = null) {
    	
    	$sql = "SELECT {$field}  FROM " . TABLE_PREFIX . $this->table
    	. " WHERE id = $id";
		$sql .= " LIMIT 0,1 ";
    	$rs = $this->db->getOne($sql);
    	return $rs;
    }
    function addgoodszd($id) {

    	$sql1 = "ALTER TABLE " . TABLE_PREFIX . "goods"
    	. " ADD COLUMN "." sale_price".$id . " int(11) NULL DEFAULT NULL;";
      $sql3 = "UPDATE " . TABLE_PREFIX . "goods"
        . " u SET "." u.sale_price".$id ." =u.price";
       $rs1['l1']= $this->db->query($sql1);
       $rs1['l3']= $this->db->query($sql3);

    	return $rs1;
    }

    function dropgoodszd($id) {
        //$a=
    	//ALTER TABLE `eb_goods` ADD COLUMN `sale_price3` int(11) NULL DEFAULT NULL;
    	$sql = "ALTER TABLE " . TABLE_PREFIX . "goods"
    	. " DROP COLUMN "." sale_price".$id;

       $rs= $this->db->query($sql);
    	//$rs = $this->db->getOne($sql);
    	return $rs;
    }


    function getOther($where = null) { 
    	$sql = "SELECT * FROM "
    			. TABLE_PREFIX . $this->table . " ";
    	if ($where) {
    		$sql .= "WHERE $where";
    	}

    	$rs = $this->db->select($sql);
    	return $rs;
    }

    function getCount($condition = '') {
        $sql = "SELECT COUNT(*) FROM " . TABLE_PREFIX . $this->table;
		
        if ($condition) {
        	$sql .= " WHERE $condition ";
        }
        $rs = $this->db->getCount($sql);
        return $rs;
    }

    function getList($count=30, $start=0, $where = null, $fields='*', $order_by='id desc') {
    	$sql = "SELECT {$fields} FROM "
    			. TABLE_PREFIX . $this->table . " ";
    	if ($where) {
    		$sql .= " WHERE $where ";
    	}
    	if ($order_by) {
    		$sql .= " ORDER BY {$order_by} ";
    	}
    	if ($count) {
    		$sql .= " LIMIT $start, $count";
    	}
    	$rs = $this->db->select($sql);
    	return $rs;
    }
    
    function batchSet($field,$val,$id='') {
        $sql = "UPDATE " . TABLE_PREFIX . $this->table
        . " SET " . $field . " ='" . $val . "' ";
        if ($id) {
            $sql .= "WHERE id IN(" . $id . ")";
        }
        return $this->db->update($sql);
    }
    
    /**
     * 批量修改
     * @param array $data 键值对
     * @param string $where
     * @return number
     */
    function batchUpdate($data = array(),$where = '') {

    	$sql = "UPDATE " . TABLE_PREFIX . $this->table ." SET ";
    	
    	foreach($data AS $key=>$value) {
    		$sql_fields[] = "`".$key."`='".$value."'";
    	}
    	$sql .= implode(",",$sql_fields);
    	
    	if ($where) {
    		$sql .= " WHERE $where";
    	}
    	return $this->db->update($sql);
    }
    
    function batchDel($id) {
        if (!$id) {
            return false;
        }
        $sql = "DELETE FROM " . TABLE_PREFIX . $this->table
        . " WHERE id IN(" . $id . ") ";
		
        return $this->db->delete($sql);
    }
    
    function setStatus($status, $id = 0) {
        $sql = "UPDATE " . TABLE_PREFIX . $this->table
        . " SET status = $status "
        . "WHERE id IN($id)";
        $rs = $this->db->update($sql);
        return $rs;
    }
    
    
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
    	$sql .= " WHERE status=1 ";
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

    /**
	 * 更新多条记录
	 * array([字段名[id[字段值],],])
	 * @param array $arr  二维数组
	 */
	function updates($arr,$where = null) {
		$sql = "UPDATE " . TABLE_PREFIX . $this->table . " SET ";
		
		foreach ($arr as $field => $row) {
			$str = "$field = CASE id ";
			$arr_ids[] = implode(',', array_keys($row));
			foreach ($row as $k=>$v) {
				$str .= "WHEN '$k' THEN '$v' ";
			}
			$kv[] = $str . ' END ';
		}
		$sql .= implode(',', $kv);

		$ids = implode(',', $arr_ids);

		$tmp = substr($ids,0,1);
        // echo $tmp;

		$sql .= " WHERE id in ($ids) ";
		if ($where) {
		    $sql .= " AND $where ";
		}
        		            		// print_r($sql);die;
		//return $this->db->update($sql);
		$rs =$this->db->query($sql);
        return $rs;
		
	}
	
	/**
	 * 更新多条记录
	 * array([字段名[id[字段值],],])
	 * @param array $arr  二维数组
	 */
	function updateMore($arr,$where = null) {
		$sql = "UPDATE " . TABLE_PREFIX . $this->table . " SET ";
		$fields = array_keys($arr);
		
		foreach ($arr as $field=>$values) {
			foreach ($values as $key=>$value) {
				$str = "`{$field}`= CASE `{$key}` ";
				foreach ($value as $k=>$v) {
					$str .= " WHEN '{$k}' THEN '{$v}' ";
					$arr_zd[$k] = $k;
				}
				$str .= ' END ';
				$str_zd = implode(',', $arr_zd);
				$arr_case[] = $str;
			}
			$where = "`{$key}` IN (" . $str_zd . ") ";
		}
		$sql .= implode(',', $arr_case);
		$sql .= " WHERE {$where}";
		return $this->db->update($sql);
		
	}

	function inserts($arr_values,$fields) {
		$values = implode(',', $arr_values);
		$sql = "INSERT INTO " . TABLE_PREFIX . $this->table . " $fields VALUES $values";
		//	echo $sql;
		return $this->db->insert($sql);
	}
	
	/**
	 * 根据条件查找
	 * @param string $where
	 * @return Ambigous <boolean, unknown>
	 */
	function findOne($where = null, $field = '*', $order_by = null ) {
		if (!$field) {
			$field = '*';
		}
		$sql = "SELECT {$field}  FROM " . TABLE_PREFIX . $this->table;
		if ($where) {
				$sql .= " WHERE $where";
		}
		if ($order_by) {
			$sql .= " ORDER BY {$order_by} ";
		}
		$sql .= " LIMIT 0,1 ";
		$rs = $this->db->getOne($sql);
		return $rs;
	}
	
    
}