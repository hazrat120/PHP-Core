<?php
require_once 'students.php';

if(isset($_POST['submitbtn'])){
    $name = $_POST['name'];
    $id = $_POST['id'];
    $batch = $_POST['batch'];

    $student = new Students($name, $id, $batch);
    $student->SaveData();
    echo 'succes';

    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form data post</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter your name.">
        <input type="text" name="id" placeholder="Enter your id.">
        <input type="text" name="batch" placeholder="Enter your batch.">
        <button type="submit" name="submitbtn" value="submit">Submit</button>
    </form>
</body>
</html>

<?php
student::DisplayStudent();
?>