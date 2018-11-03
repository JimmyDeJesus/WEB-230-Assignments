<?php
// 01. Explaine what the time function is.
// The time function is a function that marks the time in seconds
// back until January 1st 1970.
$time = time();

// 02. Explain what the following line of code is doing and how.
// This line of code displays and processs the date, the month, the year and time stamp.
// We assign actual time with the date using the $time script.
$actual_time = date('d M Y @ H:i:s', $time);

// 03. Explain what the following line of code is doing and how.
// In this line of code we assign the modified time from $actual_time into
// just Hours and minutes.
$time_modified = date('d M Y @ H:s', $time);

// 04. Explain a way the $actual_time might be used in a web application.
// We could use the $actual_time as a release time to a brand new product online.
// We could also use this as a copyright date at the bottom of the footer.
echo '<h3>The current dte/time is: '.$actual_time.'<h3>';
// 05. Explain a way the $time_modified might be used in a web application.
// Sometimes you would need to modifiy a already existing "$acutal_time" in a Website
// leading you to modifiy it further with $time_modified.
echo '<h3>The modified dte/time is: '.$time_modified.'<h3>';

?>
