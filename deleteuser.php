<?php
require 'connection.php';
if(isset($_POST['submit'])){
    // echo $_POST['user_id'];
    $userid=$_POST['user_id'];
$query="DELETE FROM user_table WHERE user_id=$userid";
$con=$connection->query($query);
if($con){
  header('Location:admindashboard.php');
}
else{
echo 'not deleted';
}
}
?>