<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Check</title>
    <style>
    form{
        display: flex;
        width: 250px;
        flex-direction: column;
        padding: 20px 50px;
        margin: 0 auto;
         background-color: #ebedef;
        border-radius: 5px;
    }
    label{
        font-size: 20px;
        font-weight: 500;   
        margin-bottom: 10px;
    }

    input{
        padding: 8px 20px;
        margin-bottom: 10px;
    }
    button{
        margin: 0 auto;
        padding: 8px 15px;
        font-weight: 500;
        font-size: 18px;
        background-color: #4CAF50;
        border: none;
        border-radius: 5px;
        color: #ffff;
        margin-top: 20px;
    }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Prime Number Checker</h1>
    <form action="" method="post">
        <label for="number">Enter a number: </label>
        <input type="number" name="number" id="number" required>
        <div>
            <button type="submit" name="submitBtn">Submit</button>
        </div>
    <?php
    function isPrime($number) {
        if ($number <= 1) {
            return false; 
        }

        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false; 
            }
        }
        return true; 
    }

    if (isset($_POST['submitBtn'])) {
        $number = $_POST['number'];

        if (isPrime($number)) {
            echo "<h2>$number is a prime number.</h2>";
        } else {
            echo "<h2>$number is not a prime number.</h2>";
        }
    }
    ?>
    </form>
</body>
</html>

