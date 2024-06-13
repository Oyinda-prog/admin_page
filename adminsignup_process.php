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

$query="SELECT * FROM admin_table WHERE admin_email='$email' ";
$dbcon=$connection->query($query);
if($dbcon){
    if($dbcon->num_rows>0){
        $_SESSION['msg']='Email exists already';
        header('location:adminsignup.php');
    //  echo 'email exists';   
    }
    else{
        // print_r($dbcon);
    $hashp=password_hash($password,PASSWORD_DEFAULT);
    
    $query="INSERT INTO admin_table (`admin_name`,`admin_phonenumber`,`admin_email`,`admin_address`, `admin_password`) VALUES ('$fullname','$phonenumber','$email','$address','$hashp')";
    
    $dbconnection=$connection->query($query);
    if($dbconnection){
        echo $dbconnection; 
    }
    else{
        $_SESSION['msg']='Failed to execute!';
        header('location:adminsignup.php');
        // echo 'Not inserted';
    }
    }

}
else{
    echo 'not selected';   
}

}
else{
header('location:adminsignup.php');
}

// $dbconnection=

// $firstname=
?>