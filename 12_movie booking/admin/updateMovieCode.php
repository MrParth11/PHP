<?php 

    include_once "./Database.php";
    $where = $_GET['id'];
    $movieName = $_POST['txt'];
    $Directer = $_POST['Directer'];
    $categroy = $_POST['categroy'];
    $language = $_POST['language'];
    $show=$_POST['show'];

    $UpdateQuery = "UPDATE `add_movie` SET `movie_name`='$movieName',`directer`='$Directer',`categroy`='$categroy',`language`='$language',`show`='$show' WHERE `id` = '$where'";
    $result = mysqli_query($conn,$UpdateQuery);

    if($result){
        header("location:./Add-movie.php");
    }
?>