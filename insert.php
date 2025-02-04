<?php
include('connect.php');
if (isset($_POST['insert'])) {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $insert="INSERT INTO imyitozo(fname,lname,username,password) values('$fname','$lname','$username','$password')";
    mysqli_query($conn,$insert);
    if ($insert==true) {
        echo"welcome";
    }
    else{
        echo"not";
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
    <center>
        <form action="" method="POST">
            <input type="text" name="fname" placeholder="enter your fname"><br>
            <input type="text" name="lname" placeholder="enter your lname"><br>
            <input type="text" name="username" placeholder="enter your username"><br>
            <input type="text" name="password" placeholder="enter your password"><br>
            <button name="insert">insert</button>
        </form>
    </center>
</body>
</html>
<table border="1">
    <tr>
        <th>sid</th>
        <th>fname</th>
        <th>lname</th>
        <th>username</th>
        <th>password</th>
        <th>option</th> 
    </tr>
    <?php
    $sel="SELECT *FROM imyitozo";
    $query=mysqli_query($conn,$sel)or die(mysqli_error());
    while($row=mysqli_fetch_array($query))
    {
        echo"<tr>";
        echo"<td>".$row['sid']."</td>";
        echo"<td>".$row['fname']."</td>";
        echo"<td>".$row['lname']."</td>";
        echo"<td>".$row['username']."</td>";
        echo"<td>".$row['password']."</td>";
       ?>
       <td>
        <a href="delete.php?=id<?php echo $row['sid']; ?>">delete</a>
        <a href="update.php?=id<?php echo $row['sid']; ?>">update</a>
        
       </td></tr>
    <?php
    }
    
    ?>


</table>
