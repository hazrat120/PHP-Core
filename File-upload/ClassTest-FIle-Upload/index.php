<?php
    session_start();
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $filepath = $_FILES['image'];
    $filename = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_type = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    $tmp_file = $_FILES['image']['tmp_name'];
    $path = "images/";
    $kb = $file_size / 2024;


    if(($name !== 'Hazrat') || ($kb > 100 || !in_array($file_type, ['jpg', 'png', 'jpeg', 'gif'])) || ($email !== "example@gmail.com")){
        if($kb > 100){
            $msg1 = "<div>File is too large. Your file must be under 100KB</div>";
        }
        if(!in_array($file_type, ['jpg', 'png', 'jpeg', 'gif'])){
        $msg2 = "<div>Sorry, only JPG, JPEG, PNG, and GIF files are allowed.</div>";
       }
       if($name !== "Hazrat"){
         $msg3 = "<div>Invalid name. Please enter valid name!</div>";
       }
       if($email !== "example@gmail.com"){
        $msg7 = "<div>Invalid email. Please enter valid email!</div>";
       }
    }else{
        if(file_exists($path . $filename)){
            $msg4 = "<div>The image with this name already exists. Please change your file and try again.</div>";
        }else{
            if(move_uploaded_file($tmp_file, $path . $filename)){
                $msg5 = "<div>File uploaded successfully!</div>";
                $_SESSION['myfile'] = $name;
                header('location:display.php');
                exit();
            } else {
                $msg6 = "<div>Sorry, there was an error uploading your file.</div>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Validation</title>
</head>
<body>
    <?php
    echo isset($msg1) ? $msg1 : "";
    echo "<br>";
    echo isset($msg2) ? $msg2 : "";
    echo "<br>";
    echo isset($msg3) ? $msg3 : "";
    echo "<br>";
    echo isset($msg4) ? $msg4 : "";
    echo "<br>";
    echo isset($msg5) ? $msg5 : "";
    echo "<br>";
    echo isset($msg6) ? $msg6 : "";
    echo "<br>";
    echo isset($msg7) ? $msg7 : "";
    ?>
    <form action="" method="post" enctype="multipart/form-data" style="max-width: 500px; margin: 0 auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif;">
    <div style="margin-bottom: 15px;">
        <label for="name" style="display: block; font-size: 14px; color: #555; font-weight: bold;">Full Name</label>    
        <input type="text" name="name" id="name" style="width: 100%; padding: 8px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px;">
    </div>
    
    <div style="margin-bottom: 15px;">
        <label for="email" style="display: block; font-size: 14px; color: #555; font-weight: bold;">Email</label>    
        <input type="email" name="email" id="email" style="width: 100%; padding: 8px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px;">
    </div>

    <div style="margin-bottom: 15px;">
        <label for="file" style="display: block; font-size: 14px; color: #555; font-weight: bold;">File upload</label>    
        <input type="file" name="image" id="file" style="width: 100%; padding: 8px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px;">
    </div>

    <div style="text-align: center;">
        <button type="submit" name="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Submit</button>
    </div>
</form>

</body>
</html>