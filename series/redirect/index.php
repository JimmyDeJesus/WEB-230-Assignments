<h1>My Page</h1>
<?php
    $redirect_page = 'http://google.com';
    $redirect = true;
    if($redirect == true){
      // 01. Explaine what is happening here.
      //    The code is using the $redirect_page to redirect the page
      //       to the assigned browser, which in this case is 'http://google.com'
      header('Location: '.$redirect_page);
    }

 ?>
