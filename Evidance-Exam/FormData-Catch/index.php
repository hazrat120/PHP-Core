<?php
include("student_class.php");

if (isset($_POST['submitbtn'])) {
    $id = $_POST['id'];   // Set $id correctly
    $name = $_POST['name'];  // Set $name correctly
    $batch = $_POST['batch']; // Set $batch correctly
    
    $student = new Student($id, $name, $batch);  // Instantiate the Student class (Note: 'Student' not 'Students')
    $student->SaveData();
    echo "Success";
    
    header("Location: " . $_SERVER["PHP_SELF"]);  // Corrected header redirection
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form data</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="number" name="id" id="id" placeholder="Enter your id">
        <input type="text" name="batch" id="batch" placeholder="Enter your batch">
        <button type="submit" name="submitbtn" value="submit">Submit</button>
    </form>

</body>
</html>

<?php
Student::Display_Students();
?>