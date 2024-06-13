<?php
require 'connection.php';
session_start();

if(isset($_POST['submit'])){
    // echo 'processing';
    // print_r($_POST);
    $fullname=$_POST['fullname'];
    $phonenumber=$_POST['phonenumber'];
    $email =$_POST['email'];
    $address =$_POST['address'];
    $password =$_POST['password'];
    $adminid=2;

$query="SELECT * FROM user_table WHERE email='$email' ";
$dbcon=$connection->query($query);
if($dbcon){
    if($dbcon->num_rows>0){
        $_SESSION['msg']='Email exists already';
        header('location:usersignup.php');
    //  echo 'email exists';   
    }
    else{
        // print_r($dbcon);
    $hashp=password_hash($password,PASSWORD_DEFAULT);
    
    $query="INSERT INTO user_table (`fullname`,`phonenumber`,`email`,`address`, `password`,`admin_id`) VALUES ('$fullname','$phonenumber','$email','$address','$hashp',$adminid)";
    
    $dbconnection=$connection->query($query);
    if($dbconnection){
     header('location:userlogin.php');
    }
    else{
        $_SESSION['msg']='Failed to execute!';
        header('location:usersignup.php');
        // echo 'Not inserted';
    }
    }

}
else{
    echo 'not selected';   
}

}
else{
header('location:usersignup.php');
}

// $dbconnection=

// $firstname=
?>