<?php
/**
 * 数据库类
 * 
 * Copyright(c) 2014 by siuloong. all rights reserved
 * 
 * @author siuloong
 */

/**
 * DB 抽象类
 * 其中主要是创建了一个静态变量$db，所有集成类的对象实例化到$db中方便调用
 * 该抽象类初始化时候根据配置文件存入$db变量，并调用子类进行DB实例化，使用DB::init()进行调用
 * 本类只实现了一个静态方法，并规定了其子类必须实现的一些方法。
 */
abstract class Db {

	public static $instance = NULL;
   	 // 事务指令数
 	protected $transTimes = 0;
    // 错误信息
    protected $error      = '';
    // 当前SQL指令
    protected $sql   = '';
    
    protected function __construct() {}
    
    /**
     * DB初始化，通过工厂模式+单例模式实例化
     * 
     * @param array $db_config 配置文件数据库信息
     * @return DB对象
     */
    public static function getInstance() {
        global $db_config;
		$driver = ucfirst(strtolower($db_config['driver']));
		$class = 'Db' . $driver;
		if (!(self::$instance instanceof $class )) {
			self::$instance = new $class;
		}
		return self::$instance;
    }
    
    
    function close() {
        self::$instance = null;
    }
    
    function __destruct() {
        $this->close();
    }
    
    abstract function beginTrans();
    abstract function commit();
    abstract function rollback();
    
    abstract function insert($sql);
    abstract function delete($sql);
    abstract function update($sql);
    abstract function select($sql);
    abstract function insert_array($data,$table,$insert_type="insert");
    abstract function update_array($data,$table,$condition);
    abstract function getCount($sql);
}