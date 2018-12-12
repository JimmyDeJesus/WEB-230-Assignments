<?php

	// Pulls data elements used through out the entier website
		//require_once 'menu.data.php';

	// Pulls functionsused through out the entier website
		require_once 'functions.inc.php';

    /*
	     The following will be passed along to Javascript by establising
		 variables in PHP and passing them into the HTML via Global
		 JavaScript variables the same names used for PHP

	*/

$siteName = 'Insights | Communications Portal';

?>

<!doctype html>
     <?php
          //this is begining of the html the browser will process
     ?>
<html>
     <?php
     //information used by the browser
     ?>
     <head>
		 <meta charset="utf-8">
          <?php
          /*
               displayed anywhere the title is used
               for the browser, search engines, etc.
          */
          ?>
          <title><?php echo $siteName; ?></title>
          <?php
          /*
               used to display information about the
               page by search engines and other sites
               looking at our page.
          */
          ?>
          <meta name="description" content="Our connections to our colluges."/>
          <link rel="stylesheet" type="text/css" href="assets/css/style.css">
          <script>
               var siteName = '<?php echo $siteName; ?>';
          </script>
     </head>
     <?php
     //contnet displayed in the browser window
     ?>
     <body>
          <header>
               <h1><a href="index.php"><?php echo $siteName; ?></a></h1>
               <h2>Our connections to our colluges.</h2>
			  <nav>
				  <?php// echo menuBuilder($menuItems); ?>
			  </nav>
          </header>
