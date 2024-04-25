<?php 

    include_once "./Database.php";

    $theater = $_POST['txt'];
    $show = $_POST['Show'];
    $insertQuery = "INSERT INTO `theater_show`(`theater`, `show`) VALUES ('$show','$show');";
    $result = mysqli_query($conn,$insertQuery);

    if($result){
    //    move_uploaded_file($_FILES['pic']['tmp_name'],"./image".$fileName); 
       header("location:./Theater_and_show.php");
    }

?>