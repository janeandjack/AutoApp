

<?php
$host = "localhost";
$user = "root";
$password = ""; // leave this blank for windows users
$db = "db_autoapp";
$conn = mysqli_connect($host, $user, $password, $db);
//mysqli_set_charset($conn. 'utf8');
if (!$conn) {
    echo "something broke... connection isn't working";
    exit;
}

// get one item from the database
if (isset($_GET["car_moduels"])) {
    $car = $_GET["car_type"];
    $myQuery = "SELECT * FROM car_moduels WHERE car_type = '$car'";
    $result = mysqli_query($conn, $myQuery);
    $rows = array();
    // fill the array with the result set and send it to the browser
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
       
    }
  
}

// encode the result and send it back
// echo json_encode($rows);
?>