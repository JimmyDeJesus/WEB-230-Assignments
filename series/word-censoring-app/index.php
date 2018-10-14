<?php

//Be sure to declare the “$user_input” variable in the top of your page – not done in the video.
$user_input='';
$find =array('jimmy', 'geraint', 'gera');
$replace  = array('j***y', 'g*****t', 'g**a');

if(isset($_POST['user_input'])&&!empty($_POST['user_input'])){
    $user_input = $_POST['user_input'];
    $user_input_new = str_ireplace($find,$replace,$user_input);
      echo $user_input_new;
}
?>
<hr>
<form action="index.php" method="POST">
    <textarea name="user_input" rows="6" cols+"30"><?php echo $user_input; ?></textarea><br><br>
    <input type="submit" value="submit">
</form>
