<?php

//定义提供计算的类

class OperService{
public function getResult($num1,$num2,$oper){
	switch($oper){
	  case "+":
	  return intval($num1)+intval($num2);
	  break;
	  
	  case "-":
	  return intval($num1)-intval($num2);
	  break;
	  
	  case "*":
	  return intval($num1)*intval($num2);
	  break;
	  
	  case "/":
	  return intval($num1)/intval($num2);
	  defualt:
	  echo "操作符错误";
}

}
}

?>