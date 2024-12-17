<?php
require('student.php');

if (isset($_POST['submitBtn'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $batch = $_POST['batch'];

    if (empty($id) || empty($name) || empty($batch)) {
        echo "<script>alert('All fields are required plz!');</script>"; 
    } else {

        $student = new Students( $id, $name, $batch);
        $student->SaveData();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post data and get data show table</title>
    <style>
        form{
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 300px;
            margin: 0  100px 0 100px;
            padding: 40px 20px;
            border-radius: 5px;
            float: left;
            background-color: #ebedef;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
        }

        #wrap{
            display: flex;
            flex-direction: column;
            row-gap: 5px;
        }

        #wrap > label{
            font-size: 18px;
            font-weight: 400;
            font-family: sans-serif;
        }
        #wrap > input{
            margin-bottom: 15px;
            padding: 8px 12px;
        }
        #btn{
            width: 100px;
            border: none;
            height: 40px;
            border-radius: 5px;
            background-color: #4CAF50;
            font-size: 18px;
            font-weight: 500;
        }
       
    </style>
</head>
<body>
    <form action="" method="post">
         <div id="wrap">
            <label for="id">Id</label>
            <input type="text" name="id" id="id" require>
        </div>

        <div id="wrap">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div id="wrap">
            <label for="batch">Batch</label>
            <input type="text" name="batch" id="batch">
        </div>
       <div style="margin: 0 auto; margin-top: 20px">
         <button type="submit" name="submitBtn" id="btn" value="submit">Submit</button>
       </div>
    </form>
</body>
</html>

<?php
Students::Displaydata();
?>

