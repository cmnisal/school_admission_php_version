<?php
require "includes/config.php";
//finally, let's store our posted values in the session variables
session_start();


session_regenerate_id();
$_SESSION['first_name']=mysqli_real_escape_string($db,$_POST['first_name']);;
$_SESSION['last_name']=mysqli_real_escape_string($db,$_POST['last_name']);;
$_SESSION['dob']=mysqli_real_escape_string($db,$_POST['dob']);;
$_SESSION['nationality']=mysqli_real_escape_string($db,$_POST['nationality']);;
if(!isset($_SESSION['login_user']))      // if there is no valid session
{
    header("Location: ../index.php");
}elseif (!isset($_SESSION['first_name'],$_SESSION['last_name'],$_SESSION['dob'],$_SESSION['nationality'])){
    header("Location: add_new_appicant.php");
}

?>
<html>
<head>
    <title><?php
        session_start();
        echo $_SESSION['login_user'];
        ?>
    </title>
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel = "stylesheet" type = "text/css" href = "../public/stylesheets/myStyle.css" />
    <link rel = "stylesheet" type = "text/css" href = "../public/xel/stylesheets/material.theme.css" />
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">School Admissions</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="add_new_appicant.php">Add New Applicant</a></li>
            <li><a href="#">Page 2</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="../includes/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
    </div>
</nav>
<div class="container">
<form action="../includes/appicant_details_handler.php" method="post">
    <div class="form-group">
        <label for="nationality"> Religion </label>
        <div class="dropdown" id="religion">
            <select id="input_3" name="religion"  data-component="dropdown">
                <option value="Buddhist"> Buddhist </option>
                <option value="Christian"> Christian</option>
                <option value="Islam"> Islam </option>
                <option value="Hindu"> Hindu </option>
                <option value="Other"> Other </option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="nationality"> Grnder </label>
        <div class="dropdown" id="gender">
            <select id="input_3" name="gender"  data-component="dropdown">
                <option value="Male"> Male </option>
                <option value="Female"> Female</option>
                <option value="Other"> Other </option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="guardian_nic" class="left">Guardian NIC no:</label>
        <input type="number" class="form-control" name="guardian_nic">V
    </div>
    <div></div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

<script src="../vendor/components/jquery/jquery.min.js"></script>
<script src="./.public/xel/xel.min.js" ></script>
<script src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>