<?php
require "config.php";

$religion=mysqli_real_escape_string($db,$_POST['religion']);
$gender=mysqli_real_escape_string($db,$_POST['gender']);
$guardian_nic=mysqli_real_escape_string($db,$_POST['guardian_nic']);


if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
//$sql="INSERT INTO `applicant`(`first_name`, `last_name`, `date_of_birth`, `nationality`, `religion`, `gender`, `guardian_nic_no`) VALUES ('$_SESSION['first_name']','$_SESSION['last_name']','$_SESSION['dob']','$_SESSION['nationality']','$religion','$gender','$guardian_nic')";
if (mysqli_query($db, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}