<?php 

    include_once "./Database.php";

    $username = $_POST['txt'];
    $directer = $_POST['directer'];
    $categroy = $_POST['categroy'];
    $language = $_POST['language'];
    $show = $_POST['Show'];
    $fileName = $_FILES['pic']['name'];

    $insertQuery = "INSERT INTO `add_movie`(`movie_name`, `directer`, `categroy`, `language`, `image`) VALUES ('$username','$directer','$categroy','$language','$fileName');";
    $result = mysqli_query($conn,$insertQuery);

    if($result){
       move_uploaded_file($_FILES['pic']['tmp_name'],"./image".$fileName); 
       header("location:./Add-movie.php");
    }

?>