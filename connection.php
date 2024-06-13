<?php
$host='localhost';
$username='root';
$password='';
$db='students_db';


$connection=new mysqli($host,$username,$password,$db);
if($connection->connect_error){
    echo 'Not connected'.$connection->connect_error;
}
else{
    echo 'connected'; 
}








