<?php
// 01.Explain why we are creating the $offset variable and what it is being used for.
//
$offset = 0;

// 02.Explain what we are doing in the if statement and why we would do it.
if(isset($_POST['text'])&&isset($_POST['searchfor'])&&isset($_POST['replacewith'])){
  // 03.Provide a reason why we would make a variable to capture a variable we could already use.
  $text = $_POST['text'];
  $search = $_POST['searchfor'];
  $replace = $_POST['replacewith'];
 // 04.Explain why we need to create this variable $search_length.
 // We want this part of the code to be seemless and auto update.
  $search_length = strlen($search);
  if (!empty($text)&&!empty($search)&&!empty($replace)){
    while ($strpos = strpos($text, $search, $offset)) {
 // 05.Explain why we change the value of the $offset variable here.
 // We havn't even assigned the 0 to something.
 // We then assigned the offset to search the start of the text variable.
      $offset = $strpos + $search_length;
 // 06.Explain what we are doing here to the $text variable.
 // We are calling the text from a array.
 // We assign the $text to a substitution replace array because we want it to find $text first.
      $text = substr_replace($text, $replace, $strpos, $search_length);
    }
    echo $text;
  } else {
  // 07.Explain why we include this here.
  // We put this line specifically here just incase the client forgot to input a section.
  // This line is helpful just in showing if something is wrong on the client side.
  // Somthing else is if this echo shows up we know that the problem lies within the above code.
    echo 'Please fill in all fields.';
  }
}
?>
<hr>
<!-- 08.Explain the action and method attributes. -->
    <!--Action is the place or location we are targeting.
    While the method is the type of action we are taking
    to the 'action'. In this case it is the "index.php".-->
<form action="index.php" method="POST">
    <textarea name="text" rows="6" cols="30"></textarea><br><br>
    Search for:<br><br>
    <input type="text" name="searchfor"><br><br>
    Replace with:<br>
    <input type="text" name="replacewith"><br><br>
<!-- 09.Explain what the type and value attributes are and do. -->
      <!--The type in this case creates the "submit" button.
          The value replaces the "submit" in submit button into your making.
          In this case we put the value of "find and Replace".-->

    <input type="submit" value="Find and Replace">
</form>
