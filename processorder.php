<html>
<head>
<title>Bob's Auto parts - order Results</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Order Results</h2>
<p>Order Processed.</p>
</body>
</html>
<?php
echo "<p>Order processed at".date('F j, Y, g:i a')."</p>";
//create short variable names
$tireqty = $_POST['tireqty'];
$oilqty= $_POST[ 'oilqty'];
$sparkqty=$_POST[ 'sparkqty']; //post the data to the website
echo '<p>Your order is as follows:</p>';
echo $tireqty.'tires<br />';
echo $oilqty.'bottles of oil<br />';
echo $sparkqty.'spark plugs<br />';
echo '=======================================<br/>';
$totalqty=0;
$totalqty=$tireqty + $oilqty +$sparkqty;
echo "Item ordered:".$totalqty."<br />";
$totalamount = 0.00;
define('TIREPRICE',100);
define('OILPRICE',10);
define('SPARKPRICE',4);
$totalamount = $tireqty * TIREPRICE 
              + $oilqty * OILPRICE
			  + $sparkqty * SPARKPRICE;
echo "Subtotal:".number_format($totalamount,2)."<br />";

$taxrate = 0.10;
$totalamount = $totalamount * (1+$taxrate);
echo "Total including tax:$".number_format($totalamount,2)."<br/>";
if($totalqty==0){
	echo '<p style="color:red">';
	echo 'You did not order anything in the previous page!<br/>';
	echo '</p>';
}else{
	if($tireqty>0)
		echo $tireqty." tires <br/>";
	if($oilqty>0)
		echo $oilqty." bottles of oil <br/>";
	if($sparkqty > 0)
		echo $sparkqty.' spark plugs <br/>';	
	}
    if($tireqty<10){
	   $discount=0;
	}elseif(($tireqty>=10)&&($tireqty<=49)){
		$discount=5;
	}elseif(($tireqty>=50)&&($tireqty<=99)){
		$discount=10;
	}elseif($tireqty>=100){
		$discount=15;
	}
	switch($find){
		case "a" :
		echo "<p>Regular customer.</p>";
		break;
		case "b" :
		echo "<p>Customer referred by TV advert</p>";
		break;
		case "c":
		echo "<p>Customer referred by photo directory.</p>";
		break;
		case "d" :
		echo "<p>Customer referred by word of mouth.</p>";
		break;
		default :
		echo "<P>We do not know how this customer found us.</p>";
		}
		
?>