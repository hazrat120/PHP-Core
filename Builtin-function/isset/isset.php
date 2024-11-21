<?php
$num= TRUE;

if ($num === ""){
   $num = NULL;
}

$result = isset($num);

if($result){
    echo "True";
}else{
    echo "false";
}

$str = "Hello Ismail how are you?";
print_r(explode(" ", $str));
echo "<br>";

$my_array = array("Ismail", "Munna", 'Munni', 'Razib', "Sawon vai");
list($a, $b, $c, $d,$e) = $my_array;
echo "I have some friends. Whos name $a. $b. $c. $d.$e";

?>