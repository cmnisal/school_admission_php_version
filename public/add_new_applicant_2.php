<?php

//finally, let's store our posted values in the session variables
session_start();
$_SESSION['first_name'] = $_POST['first_name'];
$_SESSION['last_name'] = $_POST['last_name'];
$_SESSION['dob'] = $_POST['dob'];
$_SESSION['nationality'] = $_POST['nationality'];

?>
<html>
<head>
    <title><?php
        session_start();
        echo $_SESSION['login_user'];
        ?>
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel = "stylesheet"
          type = "text/css"
          href = "../stylesheets/myStyle.css" />
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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
        <input type="number" class="form-control" name="guardian_nics">V
    </div>
    <div></div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</body>
</html>