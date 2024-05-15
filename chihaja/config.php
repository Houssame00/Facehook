<?php 

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'facehook';

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


}
catch(PDOException $ex){
    echo 'Error : ' . $ex->getMessage();
}