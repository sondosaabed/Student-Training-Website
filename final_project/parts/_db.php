<?php
$dbhost='localhost';
$user='c465training';
$pass='comp334!';
$dbname='c465training';
try {
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname",$user,$pass);
    echo "Connected to database successfully";
}
catch (PDOException $e) {
    echo "Could not connect to database".$e->getMessage();
}
?>