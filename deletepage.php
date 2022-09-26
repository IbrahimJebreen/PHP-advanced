<?php
$servername = "localhost";
$username = "root";
$password = "root";
$conn = new PDO("mysql:host=$servername;dbname=advanced", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try{
// $id=$_GET['id'];
$sql = "DELETE FROM users WHERE idnumber=:id";
$stmt =  $conn->prepare($sql);
$stmt->bindParam(":id",$_GET['id'] );
    $stmt->execute();
    header('Location:adminPage.php');
    exit;
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
?>