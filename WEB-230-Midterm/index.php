<?php

	require_once('include/header.inc.php');
?>
<?php
$offset = 0;

  if(isset($_POST['text'])&&isset($_POST['searchfor'])&&isset($_POST['replacewith'])){
      $text = $_POST['text'];
      $search = $_POST['searchfor'];
      $replace = $_POST['replacewith'];

      $search_length = strlen($search);
      if (!empty($text)&&!empty($search)&&!empty($replace)){
        while ($strpos = strpos($text, $search, $offset)) {
          $offset = $strpos + $search_length;
          $text = substr_replace($text, $replace, $strpos, $search_length);
        }
      echo $text;
      } else {
      echo 'Please fill in all fields.';
    }
  }
?>
<hr>
<form action="index.php" method="POST">
<textarea name="text" rows="15" cols="60"></textarea>
<//input type="text" name="searchfor"><br><br>
<//input type="text" name="replacewith"><br><br>
<//input type="submit" value="Find and Replace">
</form>

<?php

	require_once('include/footer.inc.php');

?>
