

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Recorde</h2>
                    </div>
                    
                    <form action="edit.php" method="post">
                        <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" class="form-control">

                            <label>Name</label>
                            <input type="text" name="name" value="<?php echo $_GET['name'] ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input type="text" name="password" value="<?php echo $_GET['password'] ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input type="email" name="email" value="<?php echo $_GET['email'] ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>mobile</label>
                            <input type="email" name="mobile" value="<?php echo $_GET['mobile'] ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>date</label>
                            <input type="date" name="date" value="<?php echo $_GET['date'] ?>" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>


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
header('Location:index.php');
    exit;

$conn->close();

?>
