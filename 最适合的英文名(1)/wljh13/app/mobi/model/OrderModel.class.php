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
			$sql_a = "SELECT * FROM " . TABLE_PREFIX . 'order_goods_v';
		
			foreach ($data as $key => $value) {
				$sql = $sql_a . " WHERE order_id={$value['id']} ";
				$arr = $this -> db -> select($sql);
			    $i = 1;
				foreach ($arr as $k => $v) {
					$arr[$k] = $v;
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
			$sql_a = "SELECT * FROM " . TABLE_PREFIX . 'order_goods_v';
			$sql = $sql_a . " WHERE order_id={$rs['id']} ";

			$arr = $this -> db -> select($sql);
			$i = 1;
			foreach ($arr as $k => $v) {
				$arr[$k] = $v;
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
