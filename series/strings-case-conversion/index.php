<?php

 if (isset($_GET['user_name'])&&!empty($_GET['user_name'])) {
   $user_name = $_GET['user_name'];
   $user_name_1c = strtolower($user_name);

   if($user_name_1c=='jimmy') {
     echo 'You are weird, '.$user_name;
   }
 }
 ?>

 <form action="index.php" method="GET">
        Name: <input type="text" name="user_name"><br><br>
        <input type="submit" value="Submit">
 </form>
