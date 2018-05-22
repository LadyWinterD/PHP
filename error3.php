<?php
//自定义错误函数输出

function my_error($errno,$errmes){
	echo "<fron size='5' color='red'>file doesn't exist</fron>";
		$err_info= "错误号是".$errno."--".$errmes;
		echo $err_info;
		date_default_timezone_set("Pacific/Auckland");//设置时间
	error_log("时间是".date("Y-m-d G-i-s")."--".$err_info."\r\n",3,"myerr.txt"); //默认3，必须填
	// \r\n 是文件的回车换行
	}
	//设定E_user_warning错误级别的函数
set_error_handler("my_error",E_USER_WARNING);  

	if(!file_exists("a.txt")){
		trigger_error("file doesn't exist",E_USER_WARNING);
		
	}else{
		$fp=fopen("a.txt","r");
	}
?>