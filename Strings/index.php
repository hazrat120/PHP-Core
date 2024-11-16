<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strings</title>
</head>
<body>
    <h1 style="text-align:center;">PHP Strings</h1>

    <?php 
        echo str_word_count("Hello, World. How are you?");
        echo "<br>";
        echo strpos("Hi! I am Hazrat Ali.", 'Ali');
        echo "<br>";
        $string = "Hello My name is Hazrat Ali!";
        $string2 = " hello my name    is php";
        $string3 = "   Hello I am a loser!  ";
        echo strrev($string);
        echo "<br>";
        echo strpos($string, "A");
        echo "<br>";
        echo str_replace('Hazrat Ali', 'PHP', $string);
        echo "<br>";
        echo ucfirst($string2);
        echo "<br>";
        echo ucwords($string2);
        echo "<br>";
        echo trim($string3);
        echo "<br>";
        echo substr($string, 7,5);
        echo "<br>";
        $result = explode(" " ,$string);
        print_r($result);
        echo "<br>";
        $x = "We are the so-called \"Vikings\" \'from\' the \$20 north.";
        echo $x;



    ?>
</body>
</html>