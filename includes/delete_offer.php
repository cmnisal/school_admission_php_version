<?php
require("config.php");
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: welcome.php");
}
// Gets data from URL parameters.
$id = $_GET['id'];


$sql =sprintf( "DELETE FROM `offers` WHERE `offer_id`='%s';",
    mysqli_real_escape_string($db,$id));


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