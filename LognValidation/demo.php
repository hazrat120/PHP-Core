<?php
session_start();

if(!isset($_SESSION['uname'])){
    header("location:login.php");
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<form action="#" method="post">
<div>Id<br/>
<input type="text" name="txtId" />
</div>

<div>Name<br/>
<input type="text" name="txtName" />
</div>

<div>email<br/>
<input type="text" name="email" />
</div>

<div>Phone<br/>
<input type="text" name="txtPhone" />
</div>
<div>

<button><input type="submit" name="btnSubmit" value="Submit"/></button>
<button><a href="logout.php">Logout</a></button>
</div>
</form>
</body>
</html>