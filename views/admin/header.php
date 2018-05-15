<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<link rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="../../Javascript/sb-admin.min.js" ></script>
<script src="../../public/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../../public/stylesheets/sb-admin.min.css">
<link rel="stylesheet" href="../../public/stylesheets/font-awesome/css/font-awesome.min.css">
<?php
require "../../includes/config.php";
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: ../login_view.php");
}
?>