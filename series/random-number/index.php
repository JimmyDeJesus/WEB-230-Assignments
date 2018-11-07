<?php

  // 01. Explaine what the if statment is doing here.
  // The if statement is saying if the click button has been clicked
  //    it will post a number between 1 and 6.
  if(isset($_POST['roll'])){
  // 02. Explaine what the rand function is.
  // We are specifiing a lower limmit and higher limmit for the random number.
    $rand = rand(1, 6);
    echo 'You rolled a '.$rand;
  }

  // 03. Explain a way the $rand might be used in a web application.
  // The $rand might be used in a web application to pull a random
  //    winner in a lottery or some kind of prize pool.

?>
  <form action="index.php" method="POST">
    <input type="submit" name="roll" value="Roll dice.">
  </form>
