<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_POST['number'];

    // Check if the input is a valid number
    if (is_numeric($number) && $number >= 0) {
        // Calculate the factorial
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }
        $result = "The factorial of $number is: $factorial";
    } else {
        $result = "Please enter a valid non-negative number.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
    <style>
        /* Simple CSS to style the form */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        input[type="number"] {
            padding: 10px;
            margin: 10px 0;
            width: 100%;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }

    </style>
</head>
<body>

<div class="container">
    <h2>Factorial Calculator</h2>
    <form method="POST">
        <input type="number" name="number" placeholder="Enter a number" required min="0">
        <button type="submit">Calculate Factorial</button>
    </form>

    <?php if (isset($result)) : ?>
        <div class="result"><?php echo $result; ?></div>
    <?php endif; ?>
</div>

</body>
</html>
