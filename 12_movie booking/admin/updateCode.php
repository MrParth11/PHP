<?php 

    include_once "./Database.php";
    $where = $_GET['id'];
    $movieName = $_POST['txt'];
    $language = $_POST['language'];

    $UpdateQuery = "UPDATE `theater_show` SET `show`='$movieName',`theater`='$language' WHERE `id` = '$where'";
    $result = mysqli_query($conn,$UpdateQuery);

    if($result){
        header("location:./Theater_and_show.php");
    }
?>