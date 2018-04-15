<?php
require "config.php";
session_start();
if(isset($_SESSION['logged_in'])) {
    header("Location: includes/welcome.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);

    $sql = "SELECT * FROM users WHERE username = '$myusername' and password =PASSWORD('$mypassword')";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {
        $_SESSION['login_user'] = $myusername;
        $_SESSION['logged_in']= true;
        header("location: includes/welcome.php");
    }else {
        $error = "Your Login Name or Password is invalid";
        echo "<script type='text/javascript'>alert(\"$error\");</script>";
        header("location:../index.php");
    }
}
?>