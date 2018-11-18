<?php
      // 01. Explain what this variable will be used for and how.
      //~~~~  This variable will be used for validating the password we set
      //~~~~    as a variable, in this case pass123. We $match pass123 so when
      //~~~~~~~   the client types the password they can proceed.
      $match = 'pass123';

      if ( isset($_POST['password']) ) {
        $password = $_POST['password'];
        $msg = '';
        $msgType = 'success';
        // 02. Explain the process of the following if statment.
        //~~~~ We are saying when the password box is not empty make sure to
        //~~~~ echo a message to display wether the password was correct or not.
        if ( !empty($password)) {
          if($password == $match){
            echo 'That is correct!';
          }else{
            echo 'That is incorrect!';
          }
        }else{
          echo 'Please enter a password.';
        }
      }
    ?>
        <form action="index.php" method="POST">
            Password:<br>
            <input type="password" name="password"><br><br>
            <input type="submit" class="btn" value="Submit">
        </form>
