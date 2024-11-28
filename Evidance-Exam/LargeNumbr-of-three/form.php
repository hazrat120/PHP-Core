<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Large number of three</title>
</head>
<body>
<form action="" method="post" style="display: flex; flex-direction: column; align-items: center; padding: 20px; background-color: #f4f4f4; border-radius: 8px; width: 300px; margin: auto; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <input type="text" name="num1" placeholder="Enter first number!" style="margin: 10px 0; padding: 10px; width: 100%; border: 1px solid #ccc; border-radius: 4px;">
    <input type="text" name="num2" placeholder="Enter second number!" style="margin: 10px 0; padding: 10px; width: 100%; border: 1px solid #ccc; border-radius: 4px;">
    <input type="text" name="num3" placeholder="Enter third number!" style="margin: 10px 0; padding: 10px; width: 100%; border: 1px solid #ccc; border-radius: 4px;">
    
    <div style="text-align: center;">
        <button type="submit" name="submitBtn" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">
            Submit
        </button>
    </div>
    
<?php
if ($_POST) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    // Check which number is the largest
    if ($num1 > $num2 && $num1 > $num3) {
        echo "<h3>Large number: $num1</h3>";
    } elseif ($num2 > $num1 && $num2 > $num3) {
        echo "<h3>Large number: $num2</h3>";
    } else {
       echo "<h3>Large number: $num3</h3>";
    }
}
?>
</form>
</body>
</html>


