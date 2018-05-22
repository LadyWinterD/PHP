<?php
function my_error($errno,$errmes){
	echo "<fron size='5' color='red'>$error</fron><br/>";
	echo"错误信息:$errmes";
	exit();
}
//自定义错误信息
function my_error1($errno,$errmes){}


$set_error_handler("my_error",E_WARNING);
$set_error_handler("my_error1",E_NOTICE);

function my_error3($errno,$errmes){
	echo "错误号是".$errno."--".$errmes;
	error_log($err_info."\r\n",3,"myerr.txt");
	
}
set_error_handler("my_error3",E_USER_WARNING);

$age=120;
if($age>100){
	trigger_error( "年龄过大".E_USER_WARNING);
	exit();
}

?>