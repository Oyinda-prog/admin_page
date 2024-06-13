<?php
session_start();
require 'connection.php';
// print_r($_SESSION['id']);
// echo $id;
$id=$_SESSION['admin_id'];
$query="SELECT * FROM admin_table WHERE admin_id=$id";
$con=$connection->query($query);
$admin=$con->fetch_assoc();
// print_r($user);
$fullname=$admin['admin_name'];
// $lastname=$user['lastname'];
// $profilepic=$user['profile_pic'];

if($admin){
    $que="SELECT * FROM user_table WHERE admin_id=$id";
    $con=$connection->query($que);
   $users=$con->fetch_all(MYSQLI_ASSOC);
//    print_r($users);
}
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
    <div class="row">
        <div class="col-10 shadow">
            <table class="table table-striped" <?php if(count($users)>1) ?>>
                <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                <?php foreach ($users as $index => $user): ?>
                <tr>
                    <td><?php echo $index+1; ?></td>
                    <td><?php echo $user['fullname']; ?></td>
                    <td><?php echo $user['phonenumber']; ?></td>
                    <td><?php echo $user['address']; ?></td>
                    <td>
                        <form action="deleteuser.php" method="post">
                            <input type="hidden" name="user_id"submit" class="btn btn-danger" " value="<?php echo $user['user_id'] ?>">
                        <button type="submit" name=>Delete</button>
                        </form>
                    </td>
                    <td><button class="btn btn-success">Edit</button></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <!-- <form action="delete_user.php" method="post" onsubmit="return confirm('Are you sure you want to delete this user?');">
                            <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($user['user_id']); ?>">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form> -->
        
        
    </div>
</div>
</body>
</html>