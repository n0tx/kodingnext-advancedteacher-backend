<?php
include ('config.php');

$user = $_POST['user'];
$pass = $_POST['pass'];

// were check is there same from database and form
$login = mysqli_query($host,"SELECT * FROM tb_user where user='$user' AND pass='$pass'");

$check = mysqli_num_rows($login);

// check there is data or not 
if ($check > 0) {
    $data = mysqli_fetch_assoc($login);
    // check for role
    // if user is admin, throw in admin folder
    if($data['role']=="admin"){
        header("location:admin/index.php");
    }elseif($data['role']=="user")
    // if user is user throw in user folder
        header("location:user/index.php");
}else{
    // if not there data same from database and form your out!
    header("location:index.php?message=failed");
}




?>