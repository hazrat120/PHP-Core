<?php
/* $a = 40;
try{
    if($a > 50){
        throw new Exception("Valid Number!");
    }else{
        throw new Exception("Invalid Number.");
    }
}
catch(Exception $e){
    echo "Your error is => " . $e -> getMessage() . ",<br>";
}
finally{
    echo "This is finally done my work";
}

echo "<br>";
echo "<br>"; */

/* $hi = 30;
try{
    if($hi < 100){
        throw new Exception("Valid Digit");
    }else{
        throw new Exception("Invalid Digit");
    }
}
catch(Exception $error){
    echo "Your error message is: " . $error . "<br>";
}
finally{
    echo "Succesfully.";
} */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form error catch</title>
</head>
<body>
    <form action="" method="post" style="max-width: 500px; margin: 0 auto; padding: 20px; background-color: #ebedef; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif; background-color: #f9f9f9;">
    <div style="margin-bottom: 15px;">
        <label for="name" style="display: block; font-size: 14px; color: #555; font-weight: bold;">Full Name</label>
        <input type="text" name="name" id="name" style="width: 100%; padding: 8px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px;">
    </div>
    
    <div style="margin-bottom: 15px;">
        <label for="email" style="display: block; font-size: 14px; color: #555; font-weight: bold;">Email</label>
        <input type="text" name="email" id="email" style="width: 100%; padding: 8px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px;">
    </div>

    <div style="margin-bottom: 15px;">
        <label for="id" style="display: block; font-size: 14px; color: #555; font-weight: bold;">ID</label>
        <input type="number" name="id" id="id" style="width: 100%; padding: 8px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px;">
    </div>

    <div style="margin-bottom: 15px;">
        <label for="batch" style="display: block; font-size: 14px; color: #555; font-weight: bold;">Batch</label>
        <select name="batch" id="batch" style="width: 100%; padding: 8px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px;">
            <option value="62" selected>Select</option>
            <option value="62">Round - 62</option>
            <option value="63">Round - 63</option>
            <option value="64">Round - 64</option>
            <option value="65">Round - 65</option>
        </select>
    </div>

    <div style="text-align: center;">
        <button type="submit" name="submit" id="sub" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Submit</button>
    </div>

    <?php
    if(isset($_POST['submit'])){
    $fname = $_POST['name'];
    $email = $_POST['email'];
    $id = $_POST['id'];
    $batch = $_POST['batch'];
   
    try{
         if($fname === "Hazrat"){
        echo "Valid form";
        }else{
            echo "Invalid form";
        }
    }catch(Exception $error){
        echo "<h2 style='text-align: center;'>Your error message is: " . $error . "<br></h2>";
    }
    finally{
        echo "Successfully";
    }
}
?>
</form>

</body>
</html>
