<?php
session_start();
require 'connection.php';
// print_r($_SESSION['id']);
// echo $id;
$id=$_SESSION['id'];
$query="SELECT * FROM student_table WHERE student_id=$id";
$con=$connection->query($query);
$user=$con->fetch_assoc();
// print_r($user);
$firstname=$user['firstname'];
$lastname=$user['lastname'];
$profilepic=$user['profile_pic'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="col-10 mx-auto shadow p-2">
    <div class="row">
        <div class="col-3 shadow">
            <form action="profilepic_process.php" method="post" enctype="multipart/form-data">
                <input type="file" name="image" class="form-control">
                <input type="submit" name="submit">
            </form>
        </div>
        <div class="col-8">
            <div class="shadow p-3">
                <p> Welcome to your dashboard, <span class="text-primary"><?php echo $firstname.' '.$lastname ?></span></p>
                <img src="<?php  echo 'images/'.$profilepic ?>" alt=""  style="width:200px;height:200px; border-radius:100%">
             
            </div>
        </div>

    </div>
    <div>
        <?php 
        
        print_r($user['student_id'])?>
    </div>

</div>
</body>
</html>