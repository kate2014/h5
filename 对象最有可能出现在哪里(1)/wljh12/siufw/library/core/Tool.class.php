<?php
//工具类
class Tool{
	
		
	   
	  
	//字符判断
	public function guolv($str){
		$str = strip_tags(trim($str));
        return $str;
	} 
		   
	//安全过滤
    public function dowith_sql($str){
        $str = str_replace("and","",$str);
        $str = str_replace("execute","",$str);
        $str = str_replace("update","",$str);
        $str = str_replace("count","",$str);
        $str = str_replace("chr","",$str);
        $str = str_replace("mid","",$str);
        $str = str_replace("master","",$str);
        $str = str_replace("truncate","",$str);
        $str = str_replace("char","",$str);
        $str = str_replace("declare","",$str);
        $str = str_replace("select","",$str);
        $str = str_replace("create","",$str);
        $str = str_replace("delete","",$str);
        $str = str_replace("insert","",$str);
     	$str = str_replace("'","",$str);
        $str = str_replace('"',"",$str);
       	$str = str_replace(" ","",$str);
        $str = str_replace("or","",$str);
     	 $str = str_replace("=","",$str);
        $str = str_replace("%20","",$str);

        return $str;
    }
	  
    public function sqlin(){
        foreach ($_GET as $key=>$value){
              $_GET[$key]=$this->dowith_sql($value);
         }  
         
        foreach ($_POST as $key=>$value){
               $_POST[$key]=$this->dowith_sql($value);
        }
    }
	  
	

    //静态化函数
    /*
      $from 传入的PHP文件 http://localhost/toy3/index.php
      $to 传出的PHP文件 ../index.html
      暂时只可以用连接生成不能用文件生成方式
    */


    function jth($from,$to,$filename){
        $to="../../".$filename."/".$to;
        $Html=@file_get_contents("http://localhost/toy3/".$from);
        $fpage=fopen($to,'w+');
        $fp=@fopen($to,"w+");
        @fwrite($fp,$Html);
        @chmod($to,0777);
        fclose($fp); //关闭文件
    }

    function MakeDir($dir)//生成目录函数 先检验指定目录是否存在，不存在则建立目录
    {
       if(!file_exists($dir)) //不存在目录则建立
       {
        if(mkdir($dir)) 
        {
         return true;
        }
        else
        {
         return false;//建立失败返回false;
        }
       }
       else
       {
        return true;
       }
    }

}

?>