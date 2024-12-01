<?php
if(isset($_POST['subBtn'])){
    $filepath = $_FILES['imagein'];

    $filename = $_FILES['imagein']['name'];
    $file_tmp_name = $_FILES['imagein']['tmp_name'];
    $file_type = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    $file_size = $_FILES['imagein']['size'];
    $imageStorePath = 'image/';
    $kb = $file_size / 1024;

    if($kb > 100 || !in_array($file_type, ['jpg', 'png', 'jpeg', 'gif'])){
       if($kb > 100){
         $msg1 = "<div>File is too large. Your file must be under 100KB</div>";
       }
       if(!in_array($file_type, ['jpg', 'png', 'jpeg', 'gif'])){
        $msg2 = "<div>Sorry, only JPG, JPEG, PNG, and GIF files are allowed.</div>";
       }
    }else{
        if(file_exists($imageStorePath . $filename)){
            $msg3 = "<div>The image with this name already exists. Please change your file and try again.</div>";
        }else{
            // Move the uploaded file to the desired folder
            if(move_uploaded_file($file_tmp_name, $imageStorePath . $filename)){
                $msg4 = "<div>File uploaded successfully!</div>";
            } else {
                $msg5 = "<div>Sorry, there was an error uploading your file.</div>";
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
    <title>Image Upload</title>
</head>
<body>
    <?php
    // Display error or success messages
    echo isset($msg1) ? $msg1 : "";
    echo "<br>";
    echo isset($msg2) ? $msg2 : "";
    echo "<br>";
    echo isset($msg3) ? $msg3 : "";
    echo "<br>";
    echo isset($msg4) ? $msg4 : "";
    echo "<br>";
    echo isset($msg5) ? $msg5 : "";
    ?>
    
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="imagein" id="imagein">
        <button type="submit" name="subBtn">Submit</button>
    </form>

    <section class="image-container">
        <?php
        $imageStorePath = 'image/';

        // Fetch and display images
        $images = glob($imageStorePath . "*.{jpg,png,jpeg,gif}", GLOB_BRACE);

        if(count($images) > 0){
            foreach($images as $image){
                echo '<img src="' . $image . '" alt="Uploaded image" style="width:300px; height:auto;"/>';
            }
        }else{
            echo "No images uploaded yet.";
        }
        ?>
    </section>
</body>
</html>
