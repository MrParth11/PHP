<?php 

    include_once "./Database.php";

    $uid = $_POST['uid'];
    $movie= $_POST['movie'];
    $show_time = $_POST['show_time'];
    $seat = $_POST['seat'];
    $totalseat = $_POST['totalseat'];
    $price = $_POST['price'];
    $payment_date = $_POST['payment_date'];
    $booking_date = $_POST['booking_date'];
    $card_name = $_POST['card_name'];

    $insertQuery = "INSERT INTO `customers`(`uid`,`movie`, `show_time`, `seat`, `totalseat`, `price`, `payment_date`, `booking_date`, `card_name`) VALUES ('$uid','$movie','$show_time','$seat','$totalseat','$price','$payment_date','$booking_date','$card_name');";
    $result = mysqli_query($conn,$insertQuery);

    if($result){
    //    move_uploaded_file($_FILES['pic']['tmp_name'],"./image".$fileName); 
       header("location:./customers.php");
    }

?>