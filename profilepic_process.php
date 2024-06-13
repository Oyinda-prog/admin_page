<?php
require 'connection.php';
session_start();
//  echo 'processed';

if(isset($_POST['submit'])){
    // $names=$_FILES;
    // print_r($_FILES);
    
    // print_r($_FILES['image']['tmp_name']);
    // print_r($_FILES['image']['name']);

    $name=$_FILES['image']['name'];
    // echo $name; echo '<br>';
    $temploc=$_FILES['image']['tmp_name'];
    $newname=time().' '.$name;
    // echo $newname;
    $move=move_uploaded_file($temploc,'images/'.$newname);
    
    if($move){
        $id=$_SESSION['id'];
        $query=" UPDATE student_table SET profile_pic='$newname' WHERE student_id=$id";
        $dbcon=$connection->query($query);
        if($dbcon){
            header('location:dashboard.php');
            exit;

        }
    //    print_r($dbcon);

    // echo 'moved successfully';
   }
  else{
    echo 'not moved';
  }

}