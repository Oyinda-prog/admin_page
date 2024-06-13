<?php
require 'connection.php';
session_start();
if(isset($_POST['submit'])){
    $email =$_POST['email'];
    $password =$_POST['password'];

    $query="SELECT * FROM admin_table WHERE admin_email='$email'";
    $dbcon=$connection->query($query);
    if($dbcon){
  if($dbcon->num_rows>0){
    $admin=$dbcon->fetch_assoc();
    $hashedpassword=$admin['admin_password'];
    // print_r($hashedpassword);
    $passverify= password_verify($password,$hashedpassword);
    if($passverify){
        $_SESSION['admin_id']=$admin['admin_id'];
        header('location:admindashboard.php');
        return $admin;
        exit();
        
    }
     else{
        echo '<div class="text-success">Invalid Credentials</div>';
     }
  }
  else{
    echo '<div class="text-success">Invalid Credentials</div>';
  }
    }
    else{
        echo 'Query not executed';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</head>
<body>
<div class="container">
<div class="col-8 mx-auto shadow">
<h1 class="text-center text-primary mb-4">Admin Login page</h1>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="email" name="email" class="form-control my-2" placeholder="Email" required>
    <input type="password" name="password" class="form-control my-2" placeholder="Password" required>
    <input type="submit" name="submit"  class="btn btn-primary w-100" value="Login here">
</form>
<div>
</div>
</body>
</html>