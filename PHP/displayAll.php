<?php

require_once "../components/db_connect.php";

header("Content-Type:application/json");


$sql = "SELECT * FROM lacasamia";
$result = mysqli_query($conn,$sql);

$api=mysqli_fetch_all($result, MYSQLI_ASSOC);


echo  json_encode($api,JSON_PRETTY_PRINT) ;


?>