<html>
<head>
<title>Calculator</title>
<script language="javascript">
 function check(){
	 var num1val=document.getElementById("num1").value;
	 var num2val=document.getElementById("num2").value;
	  if(isNaN(num1val)||isNaN(num2val)){
		  window.alert("num1 and num2 should be a number");
		  return false;
	  }
 }
</script>
</head>
<h1>calculator<h1>
<form action="CalProcess.php" method="post" onsubmit="return check()">
num1:<input type = "text" name="num1"><br/>
num2:<input type = "text" name="num2"><br/>
oper:
<select name="oper">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select>
<input type="submit" value="submit">
</form>
</html>