<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'facehook';

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE `users` (
        `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `username` varchar(100) NOT NULL,
        `email` varchar(100) NOT NULL,
        `password` varchar(100) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

    $conn->exec($sql);

    echo "table created";

}
catch(PDOException $ex){
    echo 'Error : ' . $ex->getMessage();
}

$conn = null;