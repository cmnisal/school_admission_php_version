<?php
require("config.php");
session_start();
if(isset($_SESSION['username'])) {
    header("Location: includes/welcome.php");
}
// Gets data from URL parameters.
$store_name = $_GET['store_name'];
$add_1 = $_GET['address_line_1'];
$add_2 = $_GET['address_line_2'];
$add_3 = $_GET['address_line_3'];
$lat = $_GET['lat'];
$lng = $_GET['lng'];
$type = $_GET['type'];
$user = @$_SESSION['username'];

// Opens a connection to a MySQL server.


// Sets the active MySQL database.


// Inserts new row with place data.
$query = sprintf("INSERT INTO stores " .
    " (id,user,name,add_1,add_2,add_3,type,lat,lng,approved) " .
    " VALUES (NULL, '%s', '%s', '%s', '%s', '%s','%s','%s','%s','%s','FALSE');",
    mysqli_real_escape_string($user),
    mysqli_real_escape_string($store_name),
    mysqli_real_escape_string($add_1),
    mysqli_real_escape_string($add_2),
    mysqli_real_escape_string($add_3),
    mysqli_real_escape_string($type),
    mysqli_real_escape_string($lat),
    mysqli_real_escape_string($lng));


$result = mysqli_query($query);

if (!$result) {
    die('Invalid query: ' . mysql_error());
}

?>