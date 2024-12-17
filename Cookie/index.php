<?php
setcookie('pname', 'This is a main page.' , time() + 200000, '/');


echo $_COOKIE['pname'];
echo "<br>";
var_dump($_COOKIE['pname']);
?>