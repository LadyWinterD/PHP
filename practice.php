<?php
$a = 5;
$b = &$a;
$a = 7;
echo $a."</br>";
echo $b;

?>