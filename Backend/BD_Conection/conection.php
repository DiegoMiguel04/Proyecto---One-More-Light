<?php
$servername = "sql110.infinityfree.com";
$username = "if0_37140935"; 
$password = "yiV5h49ve23Fg4i"; 
$dbname = "if0_37140935_onemorelight";
$port = "3306";


$conn = new mysqli($servername, $username, $password, $dbname, $port);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>