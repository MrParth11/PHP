<?php 

    include_once "./Database.php";

    $where = $_GET['id'];

    $delQuery = "DELETE FROM `theater_show` WHERE `id` = '$where'";
    $result = mysqli_query($conn,$delQuery);

    if($result){
        header("location:./Theater_and_show.php");
    }
?>