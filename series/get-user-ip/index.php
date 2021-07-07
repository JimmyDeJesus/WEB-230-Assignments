<?php
  require 'config.inc.php';
  /* 
    01. Explaine what this foreach loop is doing.
        The for each is Takeing each element of the array to check the current ip address agenst each section
        of the ip address until it gets blocked. Then we kill the page with the die call to show
        that the ip adress has been blocked.
  */
    foreach ($ip_blocked as $ip) {
      if($ip == $ip_address){
        die('Your IP address, '.$ip_address.' has been blocked');
      }
    }
 ?>
 <h1>Welcome</h1>
