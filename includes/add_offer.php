<?php
require("config.php");
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

$title = $_POST['title'];
$description = $_POST['description'];
$store = $_POST['store'];
$user = $_SESSION['username'];

$sql =sprintf( "INSERT INTO `offers`(`store_id`, `title`, `details`) VALUES 
((SELECT stores.id FROM stores where stores.user='%s' and stores.name='%s'),'%s','%s');",
    mysqli_real_escape_string($db,$user),
    mysqli_real_escape_string($db,$store),
    mysqli_real_escape_string($db,$title),
    mysqli_real_escape_string($db,$description));

if($stmt = $db->prepare($sql)){
    // Bind variables to the prepared statement as parameters
    //$stmt->bind_param("ssssssss", $user, $store_name,$add_1,$add_2,$add_3,$type,$lat,$lng);


    // Attempt to execute the prepared statement
    if($stmt->execute()){
        // Redirect to login page
        echo $sql;
    } else{
        //echo "<script type='text/javascript'>alert('error');window.location='../views/admin/add_new_admin.php';</script>";;
        echo $sql;
    }
}

// Close statement
$stmt->close();
$db->close();

?>