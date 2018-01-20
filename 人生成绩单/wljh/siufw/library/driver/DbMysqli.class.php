<?php
class DbMysqli extends Db {
    protected $db = null;
    protected $rs = null;
	protected $rs_type = MYSQLI_ASSOC;//返回结果集类型，默认是数字+字符
	protected $result;
    
    public function __construct() {
        $this->connect();
    }
    
    function connect() {
        global $db_config;
        $this->db = new mysqli($db_config['host'], $db_config['username'], $db_config['passwd'], $db_config['dbname'], $db_config['port']);
		mysqli_query($this->db, "SET NAMES 'utf8'");
        if (mysqli_connect_errno()) {
            echo '数据库连接失败:' . mysqli_connect_error();
            return false;
        } else {
            return $this->db;
        }
    }
    
    /** 插入一条数据,将数组写入数据中
     * !CodeTemplates.overridecomment.nonjd!
     * @see Db::insert_array()
     */
    function insert_array($data,$table,$insert_type="insert") {
    	if(!$table || !is_array($data) || !$data) {
    		return false;
    	}
    	$table = TABLE_PREFIX . $table;//自动增加表前缀
    	if($insert_type == "insert") {
    		$sql = "INSERT INTO ".$table;
    	}
    	else {
    		$sql = "REPLACE INTO ".$table;
    	}
    	$sql_fields = array();
    	$sql_val = array();
    	foreach($data AS $key=>$value) {
    		$sql_fields[] = "`".$key."`";
    		$sql_val[] = "'".$value."'";
    	}
    	$sql .= "(".(implode(",",$sql_fields)).") "
    	     . "VALUES(".(implode(",",$sql_val)).")"; //die(var_dump($sql));
    	return $this->insert($sql);
    }
    
    /**
     * 更新数据,更新一条数据
     * @param array $data
     * @param string $table
     * @param array $condition
     * @return boolean
     */
    function update_array($data,$table,$condition) {
    	if(!$data || !$table || !$condition || !is_array($data) || 
    	    !is_array($condition)) {
    		return false;
    	}
    	$table = TABLE_PREFIX . $table;//自动增加表前缀
    	$sql = "UPDATE ".$table." SET ";
    	$sql_fields = array();
    	foreach($data AS $key=>$value) {
    		$sql_fields[] = "`".$key."`='".$value."'";
    	}
    	$sql.= implode(",",$sql_fields);
    	$sql_fields = array();
    	if ($condition) {
	    	foreach($condition AS $key=>$value) {
	    		$sql_fields[] = "`".$key."`='".$value."' ";
	    	}
    	}
    	$sql .= " WHERE ".implode(" AND ",$sql_fields);
    	//echo $sql; die;
    	return $this->query($sql);
    }
    
    /*
     * 创建一个准备查询语句:
    * ?是个通配符,可以用在任何有文字的数据
    * 相当于一个模板，也就是预备sql语句
    */
    function select($sql) {
        return $this->exec($sql, __FUNCTION__);
    }
    
    function insert($sql) {
    	return $this->exec($sql, __FUNCTION__);
    }
    
    function delete($sql) {
        return $this->exec($sql, __FUNCTION__);
    }
    
    function update($sql) {
        return $this->exec($sql, __FUNCTION__);
    }
    
    function getCount($sql) {
    	if ($sql) {
    		$this->rs_type = MYSQLI_NUM;
    		$this->query($sql);
    		$rs = $this->getOne();
    		$this->rs_type = MYSQLI_ASSOC;
    		return $rs[0];
    	} else {
    		return mysqli_num_rows($this->result);
    	}
    }

    function getId($sql) {
    	$this->sql = $sql;
    	$result = $sql ? $this->query($sql) : $this->result;
    	if(!$result) {
    		return false;
    	}
    	$rows = mysqli_fetch_array($result,$this->rs_type);
    	return $rows['id'];
    }

	function getOne($sql="") {
		$this->sql = $sql;
		$result = $sql ? $this->query($sql) : $this->result;
		if(!$result) {
			return false;
		}
		$rows = mysqli_fetch_array($result,$this->rs_type);
		return $rows;
	}
    
    function query($sql) {
    	$this->sql = $sql;
    	if(!mysqli_ping($this->db)) {
    		$this->free();
    		$this->close();
    		$this->connect();
    	}
    	$this->result = mysqli_query($this->db,$sql);
    	if(!$this->result) {
    		return false;
    	}
    	return $this->result;
    }
    
    function free() {
    	$this->db->free_result();
    	$this->db = null;
    }
    
    /**
     * 启动事务
     * @access public
     * @return void
     */
    public function beginTrans() {
    	if(!mysqli_ping($this->db)) {
    		$this->close();
    		$this->connect();
    	}
        //数据rollback 支持
        if ($this->transTimes == 0) {
            $this->db->autocommit(false);
        }
        $this->transTimes++;
        return true;
    }

    /**
     * 用于非自动提交状态下面的查询提交
     * @access public
     * @return boolen
     */
    public function commit() {
        if ($this->transTimes > 0) {
            $result = $this->db->commit();
            $this->db->autocommit( true);
            $this->transTimes = 0;
            if(!$result){
                $this->error();
                return false;
            }
        }
        return true;
    }

    /**
     * 事务回滚
     * @access public
     * @return boolen
     */
    public function rollback() {
        if ($this->transTimes > 0) {
            $result = $this->db->rollback();
            $this->transTimes = 0;
            if(!$result){
                $this->error();
                return false;
            }
        }
        return true;
    }
    
    /**
     * 除了insert之外的操作
     * @param unknown $sql
     * @param unknown $method
     * @return int
     */
    function exec($sql,$method) {
    	$this->sql =  $sql;
        $stmt = $this->db->prepare($sql);
        if ($stmt) {
       // 	$stmt->bind_param();
            $stmt->execute();
            if ('select' == $method) {
                $stmt->store_result();
                $variables = array();
                $data = array();
				
                $meta = $stmt->result_metadata();
                while ($field = $meta->fetch_field()) {
                    $variables[] = &$data[$field->name];
                }
				
    			//用所有字段名绑定到bind_result方上
                call_user_func_array(array($stmt,'bind_result'), $variables);
                $result = array();
                while ($stmt->fetch()) {
                    $row = array(); //一条记录关联数组
                    foreach ($data as $k=>$v) {
                        $row[$k] = $v;
                    }
                    $result[] = $row;
                }
                $rs = $result;
            } else if ('insert' == $method) {
                $rs = $this->db->insert_id;
            } else {
                $rs = $stmt->affected_rows; 
            }
            $stmt->close();
            return $rs;
        } else {
        	return null;
        }
    }
    
    function insert_id() {
    	return mysqli_insert_id($this->db);
    }
    
    function close() {
        mysqli_close($this->db);
    }

    /**
     * 数据库错误信息
     * 并显示当前的SQL语句
     * @static
     * @access public
     * @return string
     */
    public function error() {
    	$this->error = $this->db->errno.':'.$this->db->error;
    	if('' != $this->sql){
    		$this->error .= "\n [ SQL语句 ] : ".$this->sql;
    	}
    	trace($this->error,'','ERR');
    	return $this->error;
    }
    
    /**
     * SQL指令安全过滤
     * @static
     * @access public
     * @param string $str  SQL指令
     * @return string
     */
    public function escapeString($str) {
    	if($this->db) {
    		return  $this->db->real_escape_string($str);
    	}else{
    		return addslashes($str);
    	}
    }
    
    function __destruct() {
        $this->close();
    }
    
}