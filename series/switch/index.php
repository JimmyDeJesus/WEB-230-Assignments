<?php
$day = 'Saterday';
$number = 3;

  switch ($number) {
    case 1:
      echo 'One';
        break;
    case 2:
      echo 'Two';
        break;
    case 3:
      echo 'Three';
        break;
      default:
        echo 'Number not found.';
        break;
}

 switch ($day) {
   case 'Saterday':
   case 'Sunday':
        echo 'It\'s a weekend.';
  break;
  default:
          echo 'Not a weekend.';
  break;
 }

?>
