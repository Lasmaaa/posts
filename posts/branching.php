<?php
require_once "functions.php";
//$x = "Kaķēni";
dd (isset($x));


/*if (isset($x)) {
  $y = $x;
} else {
  $y = "Ups!";
}

dd($y);



$y = isset($x) ? $x : "Ups!";   trīskāršais operātors*/




$y = $x ?? "Ups!";//Null Coalescing Operator


