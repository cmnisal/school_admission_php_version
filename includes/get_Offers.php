<?php
require("config.php");
//$lat = mysqli_real_escape_string($db,$_GET['lat']);
//$lng =mysqli_real_escape_string($db,$_GET['lng']);
$category =mysqli_real_escape_string($db,$_GET['category']);
$query="SELECT offers.title,offers.details,stores.name FROM `offers` JOIN stores ON (stores.id=offers.store_id) WHERE stores.type='".$category."';";
$result = mysqli_query($db,$query);
//echo $query;
$data = array();
$data['results']=array();
while($enr = mysqli_fetch_assoc($result)){
    $a=array();
    //$a = array($enr['name'], $enr['lat']);
    $a['title']=$enr['title'];
    $a['details']=$enr['details'];
    $a['name']=$enr['name'];
    array_push($data['results'], $a);
}
echo json_encode($data);
mysqli_close($db);
?>