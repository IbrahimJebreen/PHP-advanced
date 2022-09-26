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
                        <h2>Login Form</h2>
                    </div>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="Password" name="password" class="form-control"required>
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
$email = $_POST['email'];
  $pwd = $_POST['password'];

  $sql = "SELECT * FROM users WHERE email='$email' AND password='$pwd'";
  $result = mysqli_query($mysqli, $sql);
  $a=mysqli_fetch_all($result, MYSQLI_ASSOC);
  if(count($a)>0){
        print_r($a[0]['IDrol']);
       
    }
  

  if (!$row = mysqli_fetch_assoc($result)) {
      echo "Your username or password is incorrect!";
      
    } else {
        echo "You are logged in!";
    }
    if(count($a)>0){
    if($a[0]['IDrol']==1){
        header("Location: adminPage.php//");
    }
    elseif($a[0]['IDrol']==2){
        header("Location: welcomePage.php");
    }
}
}
?>