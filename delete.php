<?php
include("connect.php");
if (isset($_GET['id'])) {
    $sid=$_GET['id'];
    $del="DELETE FROM imyitozo WHERE sid='$sid'";
    $query=mysqli_query($conn,$del)or die(mysqli_error());
    if ($query) {
        header("Refresh:2;URL=insert.php");

    }
    else{
        echo"try";
    }
}
?>