<?php

$servername = 'localhost';
$username = 'root';
$password = '';

try{
    $conn = new PDO("mysql:host=$servername",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = "create database facehook";
    $conn->exec($sql);

    echo "database created";

}
catch(PDOException $ex){
    echo 'Error : ' . $ex->getMessage();
}

$conn = null;