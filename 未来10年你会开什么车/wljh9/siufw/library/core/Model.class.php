<?php
class Model {
    protected $db;
    protected $tablePrefix = 'siu_';
    protected $table = '';
    
    function __construct() {
	//    $this->db = DB::getInstance();
    	
    	$this->db = new DbMysqli();
	    
	    $this->tablePrefix = TABLE_PREFIX;
    }
    
    function __call($functionName, $args) {
        echo"你所调用的方法： ".$functionName."不存在！\n";
    }
	
    /**
     * 启动事务
     * @access public
     * @return void
     */
    public function beginTrans() {
    	$this->commit();
    	$this->db->beginTrans();
    	return ;
    }
    
    /**
     * 提交事务
     * @access public
     * @return boolean
     */
    public function commit() {
    	return $this->db->commit();
    }
    
    /**
     * 事务回滚
     * @access public
     * @return boolean
     */
    public function rollback() {
    	return $this->db->rollback();
    }
    
    /**
     * 查询返回多条记录
     * @param unknown $sql
     * @return number
     */
    public function query($sql) {
    	return $this->db->select($sql);
    }
	
    
    
    /**
     * 指定当前的数据表
     * @access public
     * @param mixed $table
     * @return Model
     */
    public function table($table) {
    	$prefix =   $this->tablePrefix;
    	if (is_array($table)) {
    		$this->options['table'] =   $table;
    	} elseif (!empty($table)) {
    		//将__TABLE_NAME__替换成带前缀的表名
    	//	$table  = preg_replace_callback("/__([A-Z_-]+)__/sU", function($match) use($prefix){ return $prefix.strtolower($match[1]);}, $table);
    		$this->options['table'] =   $table;
    	}
    	return $this;
    }
    
    /**
     * 指定查询条件 支持安全过滤
     * @access public
     * @param string $where 条件表达式
     * @param mixed $parse 预处理参数
     * @return Model
     */
    public function where($where){
    	if(isset($this->options['where'])){
    		$this->options['where'] =   $this->options['where'] . $where;
    	}else{
    		$this->options['where'] =   $where;
    	}
    	return $this;
    }
    
    /**
     * 指定查询字段 支持字段排除
     * @access public
     * @param string $field
     * @return Model
     */
    public function field($field){
    	$arr = explode(',', $field);
    	foreach ($arr as $key=>$value) {
    		$arr[$key] = '`' . $value . '`';
    	}
    	$field = implode(',', $arr);
    	$this->options['field']   =   $field;
    	return $this;
    }
    
    /**
     * 查询数据集
     * @access public
     * @param array $options 表达式参数
     * @return mixed
     */
    public function select() {
    	$fields = $this->options['field']?$this->options['field']:'*';
    	$table = $this->options['table'];
    	$where = $this->options['where'];
    	$sql = "SELECT $fields FROM $table WHERE $where ";
    	
    	$resultSet = $this->db->select($sql);
    	return $resultSet;
    }
    
    /**
     * 查询数据
     * @access public
     * @param mixed $options 表达式参数
     * @return mixed
     */
    public function find() {
    	$fields = isset($this->options['field'])?$this->options['field']:'*';
    	$table = $this->options['table'];
    	$where = $this->options['where'];
    	$sql = "SELECT $fields FROM $table WHERE $where  LIMIT 1";
    	$resultSet  =  $this->db->getOne($sql);
    	return $resultSet;
    }
    
    
    
}