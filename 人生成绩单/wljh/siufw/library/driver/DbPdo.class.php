<?php
class DbPdo extends DB {
    protected $db = null;
    protected $dbtype = null;
    protected $dsn = null;
    protected $username = null;
    protected $password = null;
    protected $options = null;
    protected $persistent = false;
    function __construct(&$db_conf) {
        $this->connect($db_conf);
    }
    
    /**
     * 连接数据库
     * @param array $db_conf
     * @return Ambigous <NULL, PDO>
     */
    function connect($db_conf) {
        if (isset($db_conf['dsn']) && null != trim($db_conf['dsn']) ) {
            $this->dsn = $db_conf['dsn'];
        } else {
            //mysql数据库PDO连接方式
            if ('mysql' == strtolower($db_conf['dbtype'])) {
            //    $dsn = 'mysql:host=localhost;dbname=siufw';
                $this->dsn = $db_conf['dbtype'] . ':host=' . $db_conf['host'] 
                           . ';dbname=' . $db_conf['dbname'];
            }
        }
        
        $this->username = $db_conf['username'];
        $this->password = $db_conf['passwd'];
        $this->options = $db_conf['options'];

        try {
            $this->db = new PDO($this->dsn, $this->username, $this->password, 
                                array(PDO::ATTR_PERSISTENT => $this->persistent));
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if ('mysql' === strtolower($db_conf['dbtype'])) {
                $this->db->query("set names 'utf8'");
            }
            return $this->db;
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
        
    }
    
    /**
     * 处理一条sql语句，返回所影响的条数
     * @param unknown $sql
     * @param unknown $arr
     * @return multitype:
     */
    function exec($sql) {
        $rs = $this->db->exec($sql);
        return $rs;
    }
    
    /**
     * 原生sql查询
     * @param unknown $sql
     */
    function query($sql) {
        $stmt = $this->db->query($sql);
        if ($flag) {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $result;
    }
    
    function select($sql,$arr) {
        $stmt = $this->db->prepare($sql);
        $flag = $stmt->execute($arr);
        if ($flag) {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $result;
    }
    
    /**
     * 关闭数据库连接
     */
    function close() {
        $this->db = NULL;
    }
    
    function __destruct() {
        $this->close();
    }
    
}