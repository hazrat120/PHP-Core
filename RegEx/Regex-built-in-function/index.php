<?php
/* $input = [
    "It's is 9 o'clock",
    "40 days",
    "No number here!",
    "In the year 2024",
    "Fuck you Rajib"
];

$result = preg_filter('/[a-z]+/', '($5)', $input );
print_r($result); */

/* $input = [
  "Red",
  "Pink",
  "Green",
  "Blue",
  "purple"
];
$result = preg_grep("/^p/", $input);
print_r($result); */

/* $str = "The reqular expression is invalid.";
$pattern = "/invalid//";
$match = @preg_match($pattern, $str, $matches);

if($match === false){
  $err = preg_last_error();
  if($err == PREG_INTERNAL_ERROR){
    echo "Invalid reqular expression.";
  }
}else if($match){
  echo $match[0];
}else{
  echo "No matches found!";
} */

/* $str = "Visite W3schools";
$pattern = "/W3schools/i";
echo preg_match($pattern, $str);
 */

/*  $str = "Hello World. And Hello Mr.X";
 $pattern = "/hello/i";
 preg_match($pattern, $str, $matches, PREG_OFFSET_CAPTURE);
 print_r($matches); */

/*  $str = "Visite Microsoft!";
 $pattern = "/microsoft/i";
 echo preg_replace($pattern, "W3Schools", $str); */

 function countLetters($match){
  return $match[0] . '(' . strlen($match[0]) . ')';
 }

 $input = "Welcome to W3schools.com";
 $pattern = '/[a-z0-9\.]+/i';
 $result = preg_replace_callback($pattern, 'countLetters', $input);
 echo $result;
echo "<br>";
$date = "1970-01-01 00:00:00";
$pattern = "/[-\s:]/";
$components = preg_split($pattern, $date);
print_r($components);
?>