<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</head>
<body>

  <div class="container">
<div class="col-8 mx-auto shadow">
<h1 class="text-center text-primary mb-4">Sign up page</h1>
<form action="signup_process.php" method="post" >
    <input type="text" name="firstname" class="form-control my-2" placeholder="Firstname">
    <input type="text" name="lastname" class="form-control my-2" placeholder="Lastname">
    <input type="email" name="email" class="form-control my-2" placeholder="Email">
    <input type="password" name="password" class="form-control my-2" placeholder="Password">
    <input type="text" name="address" class="form-control my-2" placeholder="Address">
    <input type="submit" name="submit"  class="btn btn-primary w-100" value="signup here">
</form>
<div>
<?php
session_start();

if(isset($_SESSION['msg'])) {
echo "<div class='text-danger text-center'>".$_SESSION['msg']."</div>";
}
unset($_SESSION['msg']);
?>
</div>
</div>
  </div>
</body>
</html>