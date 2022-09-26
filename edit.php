<?php

$id = $_POST["id"];
$name = $_POST["name"];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password = $_POST["password"];
$idrol = $_POST["IDrol"];

$servername = "localhost";
$username = "root";
$password = "root";
$db = "advanced";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "update users set fullname='$name',email='$email',mobile='$mobile', password='$password' where IDnumber='$id'";

if ($conn->query($sql) === TRUE) {
	echo "Records updated: ".$id."-".$name."-".$age."-".$address;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}
// header('Location:index.php');
//     exit;

$conn->close();

?>
