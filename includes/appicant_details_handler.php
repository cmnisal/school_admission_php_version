<?php
require "config.php";

$religion=mysqli_real_escape_string($db,$_POST['religion']);
$gender=mysqli_real_escape_string($db,$_POST['gender']);
$guardian_nic=mysqli_real_escape_string($db,$_POST['guardian_nic']);


