<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>


<form action="" method="POST"> 
        <input type="number" name="number">
        <input type="submit" value="submit">
</form>

    <?php
    if($_POST){
        $number = $_POST['number'];
        $fact = 1;
        if($number === 0 && $number === 1){
        echo "$number is not factorial number";
    }else{
        for($i = 2; $i <= $number; $i++){
        $fact *= $i;
        }
        echo $fact;
    }
    }
    ?>
</body>
</html>