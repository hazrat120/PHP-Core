<?php
require "main.php";
require "pageTwo.php";
use user\Munna;
use test\Ismail;

$ismailKaku = new Ismail();
$ismailKaku->hello();
echo "<br>";
$ismailKaku->munna();
echo "<br>";
echo "<br>";

$munna = new Munna;
$munna->personOne();
echo "<br>";
$munna -> Razib();
?>