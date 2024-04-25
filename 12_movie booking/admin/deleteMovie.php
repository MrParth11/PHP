<?php 

    include_once "./Database.php";

    $where = $_GET['id'];

    $delQuery = "DELETE FROM `add_movie` WHERE `id` = '$where'";
    $result = mysqli_query($conn,$delQuery);

    if($result){
        header("location:./Add-movie.php");
    }
?>