<?php
include('session.php');
if(!isset($_SESSION['username'])) {
    header("Location: ../views/login_view.php");
}else{
    if($_SESSION['role']==='admin'){
        header("Location: ../views/admin/admin_home.php");
    }else if($_SESSION['role']==='user'){
        header("Location: ../views/user/user_home.php");
    }
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