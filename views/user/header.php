<link rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css">


<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="../../Javascript/sb-admin.min.js" ></script>
<script src="../../public/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../../public/stylesheets/sb-admin.min.css">
<link rel="stylesheet" href="../../public/stylesheets/font-awesome/css/font-awesome.min.css">
<?php
require "../../includes/config.php";
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: ../login.php");
}
?>