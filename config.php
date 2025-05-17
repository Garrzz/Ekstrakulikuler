<?php
$host ="localhost";
$user ="root";
$pass ="root";
$db ="login_db";
$conn=mysqli_connect($host, $user, $pass, $db);
if (!$conn){
    die("gagal konek: " .mysqli_connect_error());

}

// $server = 'localhost';
// $user = 'root';
// $password = 'root';
// $db = 'login_db';

// try{
//     $pdo = new PDO("mysql:host=$server;dbname$db", $user, $password);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }catch(PDOException $e){
//     die('koneksi gagal'. $e->getMessage());
// }
?>