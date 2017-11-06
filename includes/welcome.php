<?php
include('session.php');
if(!isset($_SESSION['logged_in'])) {
    header("Location: ../index.php");
}else{
    header("Location: ../views/school_clerk.php");
}

?>
<html">

<head>
    <title>Welcome </title>
</head>

<body>
<h1>Welcome <?php echo $login_session; ?></h1>
<h2><a href = "logout.php">Sign Out</a></h2>
<?php echo implode(",", $_SESSION)  ?>
</body>

</html>