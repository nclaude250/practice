<?php
include('connect.php');
if (isset($_POST['login'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sel="SELECT*FROM imyitozo  WHERE username='$username' AND password='$password'";
$sel=mysqli_query($conn,$sel)or die(mysqli_error());
while($row=mysqli_fetch_array($sel)){
    if ($username==$row['username'] AND $password==$row['password']) {
        header("location:homepage.php");
    }
    else{
        echo"try";
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <input type="text" name="username" placeholder="enter your username"><br>
            <input type="text" name="password" placeholder="enter your password"><br>
            <button name="login">Login</button>
    </form>
</body>
</html>