<?php session_start();

if(isset($_POST['loginBtn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'admin' && $password == '123'){
        $_SESSION['uname'] = $username;
        header("location: demo.php");
    }else{
        $msg = "Username or Password is incorrect!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login check</title>
</head>
<body>
    <?php
    echo isset($msg) ? $msg: "";
    ?>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Please enter your name">
        <input type="text" name="password" placeholder="Please enter your password">
        <div>
            <button type="submit" value="submit" name="loginBtn">Submit</button>
        </div>
    </form>
</body>
</html>
















