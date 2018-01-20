<?php
class OrderModel extends BaseModel {
	public $table = 'order';

	function getOne($id) {
		$sql = "SELECT o.*, p.title pay_type  FROM " . TABLE_PREFIX . 'order o ';
		$sql .= " LEFT JOIN " . TABLE_PREFIX . 'payment p ON p.id=o.pay_type_id';
		$sql .= " WHERE o.id = $id";
		$rs = $this -> db -> getOne($sql);
		return $rs;
	}
	
	function getOneByOrderSn($sn){
		$sql = "SELECT * FROM " . TABLE_PREFIX . 'order';
		$sql .= " WHERE order_sn = $sn";
		$rs = $this -> db -> getOne($sql);
		return $rs;
	}



	/**
	 * 获得订单商品列表
	 * @param unknown $data
	 */
	function getOrdersGoods($data) {
		if ($data) {
			$sql_a = "SELECT * FROM " . TABLE_PREFIX . 'order_goods';
			$sql_b = "SELECT * FROM " . TABLE_PREFIX . 'goods';
		
			foreach ($data as $key => $value) {
				$sql = $sql_a . " WHERE order_id={$value['id']} ";
				$arr = $this -> db -> select($sql);
			    $i = 1;
				foreach ($arr as $k => $v) {
					$arr[$k] = $v;
					
				$sql = $sql_b . " WHERE id={$v['goods_id']} ";
				$g = $this -> db -> select($sql);
				$arr[$k]['goods_name'] = $g[0]['name'];
					
					$arr[$k]['i'] = $i;
					$i++;
				}
				$data[$key]['goods'] = $arr;

				
			}
		}
		//var_dump($data);
		//exit;
		return $data;

	}

	/**
	 * 获得订单商品列表
	 * @param unknown $data
	 */
	function getOrderGoods($rs) {
		if ($rs) {
			$sql_a = "SELECT * FROM " . TABLE_PREFIX . 'order_goods';
			$sql = $sql_a . " WHERE order_id={$rs['id']} ";

			$arr = $this -> db -> select($sql);
			
			$sql_a = "SELECT * FROM " . TABLE_PREFIX . 'goods';
			
			
			$i = 1;
			foreach ($arr as $k => $v) {
				$arr[$k] = $v;
				
				$sql = $sql_a . " WHERE id={$v['goods_id']} ";
				$g = $this -> db -> select($sql);
				$arr[$k]['goods_name'] = $g[0]['name'];
				
				$arr[$k]['i'] = $i;
				$i++;
			}
			$rs['goods'] = $arr;
		}
		return $rs;

	}

	/**
	 * 更新
	 * @param unknown $data 字段数组
	 * @param unknown $array 条件
	 */
	function update($data, $condition = array()) {
		$rs = $this -> db -> update_array($data, $this -> table, $condition);
		return $rs;
	}

}
