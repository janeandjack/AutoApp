<?php
include 'connect.php';



$car_content = 'SELECT * FROM `car_moduels`';

$getcar_type = $pdo -> query($car_content);

$results = array();
while($row = $getcar_type -> fetch(PDO::FETCH_ASSOC)){

    $results[] = $row; 
}

header('Access-Control-Allow-Origin: *');
header('Connect-Type: application/json;charset=UTF8');
$reslut_json = json_encode($results, JSON_PRETTY_PRINT);
echo $reslut_json;
?>