<?php
require 'connection.php';

$query="SELECT * FROM student_table";
$db=$connection->query($query);
if($db){
    if($db->num_rows>0){
     $allusers=$db->fetch_all(MYSQLI_ASSOC);
     print_r($allusers);
    }
    else{
        echo 'no';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</head>
<body>
    <div class="container">
        <div class="row shadow">
            <div class="col-lg-3 col-12 col-sm-12 col-xl-3 col-xxl-3 shadow">
<div >
<?php foreach ($allusers as $user) {
            echo '<div>'.$user['student_id'].'</div>';
            echo '<div>'.$user['firstname'].'</div>';
        } 
        ?>
</div>
            </div>

        </div>
        
    </div>
</body>
</html>
