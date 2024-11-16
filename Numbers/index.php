<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Numbers</title>
</head>
<body>
    
    <h1 style="text-align: center;">PHP Numbers</h1>

    <?php 
    /* echo "Hello World. <br>";
    $number = -5;
    $x = -5.6;
    $y = 3.6;

    echo abs($number);
    echo "<br>";
    echo abs($x);
    echo "<br>";
    echo round($y);
    echo "<br>";
    echo round($x);
    echo "<br>";
    echo sqrt(64);
    echo "<br>";
    echo pow(2, 3);
    echo "<br>";
    echo pow(4, 3);
    echo "<br>";
    echo max(2,4,6, 7, 8, 9, 19);
    echo "<br>";
    echo min(2,4,6, 7, 8, 9, 19);
    echo "<br>";
    echo rand(1, 6);
    echo "<br>";
    echo deg2rad(180);
    echo "<br>";
    echo rad2deg(3.1415926535898);
    echo "<br>";
    var_dump(is_finite(100000));
    echo "<br>";
    var_dump(is_finite(INF));
    echo "<br>";

    $value = 5 / 0;
    
    if(is_finite($value)){
        echo "The value is infinite.";
    }else{
        echo "The value is not infinite.";
    } */

    $x = 23;
    echo is_nan(NAN);
    echo is_nan($x);
    echo "<br>";
    echo intval(7.124);
    ?>
</body>
</html>