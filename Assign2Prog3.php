<?php
     $str1 = $_GET['str'];
     $str2 = strrev($str1);
     if(strcmp($str1,$str2) === 0)
     echo "<h3> $str1 is palindrome </h3>";
     else echo "<h3> $str1 is not palindrome </h3>";
?>
