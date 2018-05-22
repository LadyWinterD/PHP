<?php
/*function A(){
	//调用方法
	//添加用户
	//修改用户
	$res1=addUser("ss");
	$res2=updateUser("xx");
	//修改用户
		if($res1 && $res2){
		echo "成功";
	}else{
		echo "失败";
	}
}
//添加用户
function addUser($username){
	if($username=="shunping"){
		//成功
		return true;
	}else{
		return false;
		//失败
	}
}
function updateUser($username){
	if($username="xiaoming"){
		return true;
	}else{
		return false;
	}
}
A();
*/
try{
	addUser("shunping");
	updateUser("xx");
	
}//CATCH 捕获 Exception 是异常类 是PHP提前定义好的类
catch(Exception $e){	
echo "失败".$e->getMessage();
}
function addUser($username){
	if($username=="shunping"){
	}else{
		throw new Exception("添加失败");
	}
}
function updateUser($username){
	if($username=="xiaoming"){
	}else{
		throw new Exception("修改失败");
	}
}
?>