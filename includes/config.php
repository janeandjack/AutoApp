<?php
include 'connect.php';



$photo_query = 'SELECT * FROM `project_list`';

$getImg = $pdo -> query($photo_query);

$results = array();
while($row = $getImg -> fetch(PDO::FETCH_ASSOC)){

    $results[] = $row; 
}

header('Access-Control-Allow-Origin: *');
header('Connect-Type: application/json;charset=UTF8');
$reslut_json = json_encode($results, JSON_PRETTY_PRINT);
echo $reslut_json;
?>