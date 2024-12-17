<?php
require 'student.php';

if(isset($_POST['submitBtn'])){
    $name = $_POST['name'];
    $id = $_POST['id'];

    $studens = new Students($name, $id);
    $studens->saveData();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        form{
            width: 300px;
            padding: 30px 20px;
            background-color: #d5d8dc;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            float: left;
            margin-right: 100px;
        }
        input{
            padding: 8px 15px;
            margin: 5px 0;
        }
        button{
            padding: 10px 15px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
       <input type="text" name="name" placeholder="Enter your name">
       <input type="text" name="id" placeholder="Enter your ID">
       <div>
        <button type="submit" name="submitBtn">Submit</button>
       </div>
    </form>
</body>
</html>
<?php
Students::Displayinfo();
?>