<?php 

    include_once "./Database.php";

    $username = $_POST['txt'];
    $email = $_POST['Email'];
    $number = $_POST['mobile_number'];
    $city = $_POST['City'];
    $password = $_POST['password'];
    $fileName = $_FILES['pic']['name'];

    $insertQuery = "INSERT INTO `user`(`username`, `email`, `mobile`, `city`, `password`, `image`) VALUES ('$username','$email','$number','$city','$password','$fileName');";
    $result = mysqli_query($conn,$insertQuery);

    if($result){
       move_uploaded_file($_FILES['pic']['tmp_name'],"./image".$fileName); 
       header("location:./users.php");
    }

?>