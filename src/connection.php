<?php

$servername = "localhost";
$username = "root";
$password = "";
$baseName = "Twitter";
//Tworzenie nowego polaczenia
$conn = new mysqli($servername, $username, $password, $baseName);
//sprawdzenie czy polacznie sie udalo:
if($conn->connect_error){
    die("Polaczenie nieudane. Blad: ".$conn->connect_error);
}
else{
    $conn->set_charset("utf8");
}
//Niszczymy polaczenie
//$conn->close();
//$conn = null;
