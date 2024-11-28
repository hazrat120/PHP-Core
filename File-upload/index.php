<?php
if(isset($_POST['submit'])){
    $image = $_FILES['image'];
    $filename = $_FILES['image']['name'];
    $filetype = $_FILES['image']['type'];
    $fullpath = $_FILES['image']['full_path'];
    $file_size = $_FILES['image']['size'];
    $temp_file = $_FILES['image']['tmp_name'];
    $imgpath = "image/";
    $fileType = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    $kb =$file_size/1024;

    if(($kb > 200) && (($fileType == "jpg") || ($fileType == 'png') || ($fileType == 'pdf'))){
        move_uploaded_file($temp_file, $imgpath.$filename);
        echo "Successfully uploaded";
       
    }else {
        echo "FIle is too large";
        echo "<h1>File extension support .jpg, .png, .document are supported! </h1>";
    }

    // var_dump($image);
    echo "<br>";
    echo "<br>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image" >
        <button type="submit" name="submit">Submit</button>
    </form>
    <img src="./image/banner-06-1.png" alt="">
    <img src="./image/Contact Information.png" alt="">
</body>
</html>