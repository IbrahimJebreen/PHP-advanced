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
                        <h2>Siginup Form</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" class="form-control" pattern="^[A-Za-zÀ-ÿ ,.'-]+$" required>
                        </div>
                        <!-- // at least one number, one lowercase and one uppercase letter
                            // at least six characters -->
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control"   required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="Password" name="password" class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="mobile" name="mobile" class="form-control"required>
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" name="date"  class="form-control"required>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="rolid" value="2" class="form-control"required>
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
include("connectWithMySQL.php");
if(isset($_POST['submit'])){
$fullname=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$idRol=$_POST['rolid'];
$date=$_POST['date'];



$sql = "INSERT INTO users (fullname,email, mobile,password,IDrol,dateofbirth)
VALUES ('$fullname', '$email', '$mobile','$password','$idRol','$date')";

if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();

}
?>