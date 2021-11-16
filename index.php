<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Typewriter PHP</title>
		<link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>
		<?php
        $str = "The quick brown fox jumps over the lazy dog.";
				
        echo strToUpper(substr($str,24, 1)), substr($str,1,1), substr($str,-8,1), substr($str,14,1), substr($str,-11,1), substr($str,14,1), substr($str, 3,1), strToUpper(substr($str,-8,1)), substr($str,5,1), substr($str, -4,1), substr($str,-15,1), substr($str,-11,1), substr($str,-6,1), substr($str,-5,1), strToUpper(substr($str,23,1)), substr($str,-11,1), substr($str,-15,1), substr($str,-11,1), substr($str,-7,1);
    ?>
		</h1>
  </body>
</html>