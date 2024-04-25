<?php 

    include_once "./Database.php";

    $where = $_GET['id'];

    $delQuery = "DELETE FROM `feedback` WHERE `id` = '$where'";
    $result = mysqli_query($conn,$delQuery);

    if($result){
        header("location:./feedback.php");
    }
?>