<?php
// Function to calculate factorial
function calculateFactorial($n) {
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if input is set and valid
    $number = isset($_POST['number']) ? $_POST['number'] : 0;
    
    // Validate input to make sure it's a non-negative integer
    if ($number >= 0 && is_numeric($number)) {
        $result = calculateFactorial($number);
    } else {
        $error = "Please enter a valid non-negative integer.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    <h1>Factorial Calculator</h1>
    
    <form method="POST">
        <label for="number">Enter a number: </label>
        <input type="text" name="number" id="number" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    // Display the result or error message
    if (isset($result)) {
        echo "<h3>Factorial of $number is: $result</h3>";
    }

    if (isset($error)) {
        echo "<h3 style='color:red;'>$error</h3>";
    }
    ?>
</body>
</html>
