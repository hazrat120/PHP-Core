<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
</head>
<body>
      <?php
        $imageStorePath = 'images/';

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
        
    <button style="background-color: red; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">
        <a href="logout.php" style="text-decoration: none; color: white;">Logout</a>
    </button>

</body>
</html>