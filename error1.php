<?php
//判断文件是否存在，
if(!file_exists("aa.txt")){
	echo "file doesn't exist";
	exit();
}else{
	$fp=fopen("aa.txt","r");
	echo "文件打开成功";
	fclose($fp);
}
//-------------------------------------------
if(!file_exists("aa.txt")){
	die("文件不存在");
}else{
	
}
//--------------------------------
file_exists("aa.txt")or die("文件不存在");
echo "ok";
?>