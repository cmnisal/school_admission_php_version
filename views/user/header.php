<link rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<script src="../../Javascript/sb-admin.min.js" ></script>
<link rel="stylesheet" href="../../public/stylesheets/sb-admin.min.css">
<link rel="stylesheet" href="../../public/stylesheets/font-awesome/css/font-awesome.min.css">
<?php
require "../../includes/config.php";
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: ../login.php");
}
?>