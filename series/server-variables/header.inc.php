<?php

  include 'config.inc.php';

  // 01. Explaine the $_SERVER['SCRIPT_NAME'].
  // ~~~~This line of code is calling all data through SCRIPT_NAME. It's gonna apply
  // ~~~~SCRIPT_NAME as a variable.
  $script_name = $_SERVER['SCRIPT_NAME'];

  // 02. Explain what is happening to reduce the resaulting output of the $images variable.
  //  ~~~~We are having the server load directly from the folder the images are located.
  //  ~~~~This helps the server not waste time jumping through loops.
  echo $images;

 ?>

  <!-- 03. Explaine how using the $script_name variable benefits us.
  //~~~~ The $script_name can help our websites become more dinamic, leeting someone
  // ~~~~  stay on the same page after a submition. -->
  <form action="<?php echo $script_name; ?>" method="POST">
    <input type="submit" name="submit" value="Submit">
  </form>
