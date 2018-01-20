<?php
class MyTpl extends Smarty {
    function __construct() {
        parent::__construct();
		global $tpl_config;
		// 方法调用链
		$this->setTemplateDir(TPL_PATH)
			 ->setCompileDir('runtime/'.APP_NAME.'/templates_c')
			 ->setCacheDir('runtime/'.APP_NAME.'/cache')
             ->setPluginsDir('app/smarty_plugins')
             ->setConfigDir('app/smarty_configs');
		$this->left_delimiter = $tpl_config['left_delimiter'];   //模板文件中使用的“左”分隔符号
		$this->right_delimiter = $tpl_config['right_delimiter'];   //模板文件中使用的“右”分隔符号
 		$this->force_compile = $tpl_config['force_compile']; //强迫编译
 		$this->debugging = $tpl_config['debugging'];  //调试
		$this->caching = $tpl_config['caching'];   //开启缓存
		$this->cache_lifetime = $tpl_config['cache_lifetime'];  //缓存存活时间（秒）-1:永久缓存

	}
	
	function display($filename = null, $cache_id = null, $compile_id = null, $parent = null) {
		if (!$filename) {
			$filename = CONTROL . '/' . ACT . '.html';
		}
		$file = TPL_PATH . $filename;
		if (file_exists($file)) {
			parent::display($filename, $cache_id, $compile_id, $parent);
		} else {
			exit('模板文件“' . $filename . '”不存在！');
		}
	}
	
	/**
	 * 提取文件所有内容
	 */
	function fetch($filename = null, $cache_id = null, $compile_id = null, $parent = null, $display = false, $merge_tpl_vars = true, $no_output_filter = false) {
		if (!$filename) {
			$filename = CONTROL . '/' . ACT . '.html';
		}
		$file = TPL_PATH . $filename;
		if (file_exists($file)) {
			return parent::fetch($filename, $cache_id, $compile_id, $parent, $display, $merge_tpl_vars, $no_output_filter);
		} else {
			exit('模板文件“' . $filename . '”不存在！');
		}
	}
	
	/**
	 * 生成静态页面
	 * 
	 */
	function createHtml($template) {
		//下面这句取得页面中所有内容, 注意最后一个参数为false
		$content = $this->fetch($template);
		//压缩文档
	//	$content = $this->compressHtml($content);
		//下面将内容写入至一个静态文件
		$path = '';
		$html = '';
		$control_name=isset($_GET['c'])?$_GET['c']:'index';
		$method = isset($_GET['act'])?$_GET['act']:'index';
		if ($control_name == 'index' && $method == 'index' ) {
			$path .= '';
			$html = $control_name.'.html';
		} else {
			$path = 'html/';
			$html = $control_name.'-'.$method.'.html';
		}
		$file = $path.$html;
		//判断页面内容是否有更新，决定是否重新生成静态页
		$old_con = file_get_contents($file);
		if ($old_con !== $content) {
			file_put_contents($file,$content,LOCK_EX);
			/*
			$fp = fopen($file, 'w');
			fwrite($fp, $content);
			fclose($fp);
			*/
		} else {
			echo "<!--notice:Don't need to update the page!-->";
		}
		//OK, 到这里这个news.html静态页就生成了, 你可以处理你下一步的工作了
	}
	
	/**
	 * 压缩html : 清除换行符,清除制表符,去掉注释标记
	 * @param $string
	 * @return 压缩后的$string
	 * */
	function compressHtml($string) {
		$string = str_replace("\r\n", '', $string); //清除换行符
		$string = str_replace("\n", '', $string); //清除换行符
		$string = str_replace("\t", '', $string); //清除制表符
		$pattern = array (
				"/> *([^ ]*) *</", //去掉注释标记
				"/[\s]+/",
				"/<!--[^!]*-->/",
				"/\" /",
				"/ \"/",
				"'/\*[^*]*\*/'"
		);
		$replace = array (
				">\\1<",
				" ",
				"",
				"\"",
				"\"",
				""
		);
		return preg_replace($pattern, $replace, $string);
	}
	
}