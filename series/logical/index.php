<?php

$number = 999.999;

$upper = 1000;
$lower = 500;

if ($number>=$lower && $number<=$upper) {
  echo 'ok';
}
 echo '<br></br>';
$number = 10;

$canbe1 = 2;
$canbe2 = 4;

if (!($number==$canbe1)&&!($number==$canbe2)) {
  echo 'OK.';
} else {
  echo 'Not ok.';
}
?>
