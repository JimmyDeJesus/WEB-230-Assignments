<?php
/*
Healthy
Salad
Vegetable
Pasta

Unhealthy
Pizza
Ice cream
*/
$food = array('Healthy'=>
                          array('Salad', 'Vegetables', 'Pasta'),

              'Unhealthy'=>
                            array('Pizza', 'Ice cream'));

  echo $food['Healthy'][2], ['Unhealthy'][0];
  echo $food['Unhealthy'][0];
?>
