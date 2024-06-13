<?php
require 'connection.php';
session_start();

if(isset($_POST['submit'])){
    // echo 'processing';
    // print_r($_POST);
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email =$_POST['email'];
    $address =$_POST['address'];
    $password =$_POST['password'];

$query="SELECT * FROM student_table WHERE email='$email' ";
$dbcon=$connection->query($query);
if($dbcon){
    if($dbcon->num_rows>0){
        $_SESSION['msg']='Email exists already';
        header('location:signup.php');
    //  echo 'email exists';   
    }
    else{
        // print_r($dbcon);
    $hashp=password_hash($password,PASSWORD_DEFAULT);
    
    $query="INSERT INTO student_table (`firstname`,`lastname`,`email`,`address`, `password`) VALUES ('$firstname','$lastname','$email','$address','$hashp')";
    
    $dbconnection=$connection->query($query);
    if($dbconnection){
        echo $dbconnection; 
    }
    else{
        $_SESSION['msg']='Failed to execute!';
        header('location:signup.php');
        // echo 'Not inserted';
    }
    }

}
else{
    echo 'not selected';   
}

}
else{
header('location:signup.php');
}

// $dbconnection=

// $firstname=
?>