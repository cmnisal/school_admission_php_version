<?php
require("config.php");
$lat = mysqli_real_escape_string($db,$_GET['lat']);
$lng =mysqli_real_escape_string($db,$_GET['lng']);
$category =mysqli_real_escape_string($db,$_GET['category']);
$query="SELECT *, ( 6371 * acos( cos( radians(" . $lat . ") ) * 
        cos( radians( lat ) ) * cos( radians( lng ) - radians(" . $lng . ") ) + sin( radians(" . $lat . ") ) *
        sin( radians( lat ) ) ) ) AS distance FROM public_stores HAVING distance < 100 and  type='".$category."';";
$result = mysqli_query($db,$query);
echo $query;
$data = array();
$data['results']=array();
while($enr = mysqli_fetch_assoc($result)){
    $a=array();
    //$a = array($enr['name'], $enr['lat']);
    $a['name']=$enr['name'];
    $a['lat']=$enr['lat'];
    $a['lng']=$enr['lng'];
    array_push($data['results'], $a);
}
echo json_encode($data);
mysqli_close($db);
?>