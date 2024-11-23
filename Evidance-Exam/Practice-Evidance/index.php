<?php
require ("student_class.php");

if(isset($_POST['submitBtn'])){
    $id = $_POST['id'];
    $name = $_POST['name'];

    $student = new Students($id, $name);
    $student->SaveData();
    echo "Success";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collect Student Id Name</title>
</head>
<body>
    <form action="#" method="POST">
        <input type="text" name="name"  placeholder="Enter your name"> <br> <br>
        <input type="number" name="id" placeholder="Enter your id"> <br> <br>
        <button type="submit" name="submitBtn" value="submit" id="formSubmit">Submit</button>
    </form>
</body>
</html>

<?php
Students::display_students();
?>