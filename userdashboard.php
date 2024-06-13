<?php
session_start();
require 'connection.php';
// print_r($_SESSION['id']);
// echo $id;
$id=$_SESSION['id'];
$query="SELECT * FROM user_table WHERE user_id=$id";
$con=$connection->query($query);
$user=$con->fetch_assoc();
// print_r($user);
$fullname=$user['fullname'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</head>
<body>
<div class="col-11 mx-auto shadow p-2">
<div class="col-9 mx-auto mb-5">
            <div class="shadow p-3 text-center">
                <p>Welcome to the <b>admin</b>  dashboard, <span class="text-primary"><?php echo $fullname; ?></span></p>
            </div>
        </div>
  
       
        
        
    </div>
</div>
</body>
</html>