<?php
$original_string = "myPassword";

// MD5 is an insecure hash, but here's how to use it
$hashed_string = md5($original_string);

echo "Original String: " . $original_string . "<br>";
echo "MD5 hash value: " . $hashed_string . "<br>";  
?>


