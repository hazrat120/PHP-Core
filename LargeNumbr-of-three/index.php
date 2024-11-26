<?php
if($_POST['submitBtn']){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];


    if($num1 > $num2 && $num1 > $num3){
        echo 'The large number is:' .$num1;
    }else if($num1 > $num2 && $num1 > $num3){
        $global =+ $num2;
    }else{
        $global =+ $num3;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Large number of three</title>
</head>
<body>
    <form action="" method="post">
        <p>Large number is: <?php $global ?></p>
        <input type="text" name="num1" placeholder="Enter first number!">
        <input type="text" name="num2" placeholder="Enter first number!">
        <input type="text" name="num3" placeholder="Enter first number!">
        <div>
            <button type="submit" name="submitBtn">Submit</button>
        </div>

        
    </form>
</body>
</html>