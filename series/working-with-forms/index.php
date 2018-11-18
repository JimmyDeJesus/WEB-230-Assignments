<?php
 ?>
 <!--
   01. Explain what the action attribute is and does.
   ~~~ The action attribute sends data when the submit button is pressed to the page index.php.

   02. Explain what the method attribute is and does.
   ~~~ The method can either be GET or Post.
        GET sends the data/variables through the format of the url to the url.
 -->
 <form action="index.php" method="GET">
   Day:<br/><input type="text" name="day"><br>
   Date:<br/><input type="text" name="date"><br>
   Year:<br/><input type="text" name="year"><br>
 </form>
