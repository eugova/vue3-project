<?php
$host = "localhost"; 
$user = "yugova_vyatg";      
$password = "RootRoot8";      
$dbname = "yugova_vyatg"; 


$conn = new mysqli($host, $user, $password, $dbname);


if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
?>