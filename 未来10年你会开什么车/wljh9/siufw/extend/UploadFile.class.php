<?php
class UploadFile {
	/**
	 * 附件上传
	 * @param $input_file POST文件信息
	 */
	function upload($input_file) {
	
		if(!isset($input_file)) {
			return array('status'=>'error','content'=>'没有指定上传的文件');
		}
		
		if($input_file["error"]) {
			return array('status'=>'error','content'=>$input_file["error"]);
		}
		
		if(!is_uploaded_file($input_file['tmp_name'])) {
			return array('status'=>'error','content'=>'没有找到临时文件');
		}
		
		
		$file_info = $this->title_format($input_file['name']);
		$filetype = $file_info['ext'];
		if(!$filetype || $filetype == 'unknown') {
			return array('status'=>'error','content'=>'获取文件类型失败');
		}
		
		$file_type = 'jpg,png,gif,zip,rar,jpeg'; //允许上传的文件类型
		$filetype = strtolower($filetype);
		if(!in_array($filetype,explode(",",$file_type))) {
			return array('status'=>'error','content'=>'文件类型不符合系统要求');
		}
		
		$dir_root = './uploads/'; //存放路径
		$folder = date('Ymd', time()) . '/'; //存放文件夹
		$dir = $dir_root . $folder;
		$filename = time() . rand(1000, 9999);
		$file = $dir . $filename . '.' . $filetype;
		if (is_dir($dir)) {
			@chmod($dir,0777);//赋予权限
		} else {
			mkdir($dir,0777);
		}
		if(move_uploaded_file($input_file['tmp_name'],$file))
		{
			$title = $file_info['title'];
			if(!$title) { 
				$title = $filename;
			}
			$title = strtolower($title);
			$title = str_replace('.' . $filetype, '', $title);
			@chmod($file, 0644);
			return array("status"=>"success","title"=>$title,"filename"=>$file, 'name'=>$filename);
		}
		return array('status'=>'error','content'=>'附件上传失败');
	}
	
	//分解文件名
	public function title_format($title) {
		$tmp = explode(".",$title);
		if(count($tmp)<2)
		{
			return array('title'=>$title,'ext'=>'unknown');
		}
		elseif(count($tmp) == 2)
		{
			return array('title'=>$tmp[0],'ext'=>strtolower($tmp[1]));
		}
		else
		{
			$title = $ext = '';
			$total = count($tmp);
			foreach($tmp as $key=>$value)
			{
				if($key<1)
				{
					$title = $value;
					continue;
				}
				if($key==($total-1))
				{
					$ext = strtolower($value);
					break;
				}
				$title .= ".".$value;
			}
			return array('title'=>$title,'ext'=>$ext);
		}
	}
	
}