<?php

include_once "./Database.php";
$where = $_GET['id'];
$username = $_POST['txt'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$city = $_POST['city'];
$password = $_POST['password'];

$UpdateQuery = "UPDATE `user` SET `username`='$username',`email`='$email',`mobile`='$mobile',`city`='$city',`password`='$password' WHERE 1";
$result = mysqli_query($conn, $UpdateQuery);

if ($result) {
    header("location:./users.php");
}
