<?php
  // 01. Explaine why we use ob_start.
  //   ~ The page output will be stored within a buffer
  //   ~ rather then just a header.
  ob_start(); ?>

<h1>My Page</h1>
This is my page.
<?php
//~~~~The $redirect_page can be a file within the server (index.php) or a URL
    $redirect_page = 'http://google.com';
    $redirect = true;
    if($redirect == true){
      // 02. Explaine what is happening here.
      //    We are re-locateing a user to a specific page.
      header('Location: '.$redirect_page);
    }
    // 03. Explaine why we use ob_end_flush.
    //      Flushing the buffer we used from ob_start and producing
    //      the contents back onto the page.
    ob_end_flush();

 ?>
