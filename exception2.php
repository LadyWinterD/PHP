<?php
function my_exception($e){    //需要修改顶级处理器
	echo "顶级异常处理器".$e->getMessage()."--".$e->getLine();
}
set_exception_handler("my_exception");
function  checkNum($val){
if($val>100){
throw new Exception("err_no1:这个数据过大");
}else{
echo "输入值正常";
}
}
try{
checkNum(300);
}
catch(Exception $e){
	echo $e->getMessage()."--".$e->getLine();
	throw $e;//抛出异常
}

?>