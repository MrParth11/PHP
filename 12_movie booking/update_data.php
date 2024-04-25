
<?php
include_once "Database.php";
session_start();
if (isset($_POST['submit']))
 {
    $uid = $_SESSION['uname'];
 	$email=$_POST['email'];
 	$mobile=$_POST['number'];
 	$city=$_POST['city'];
 	$password=$_POST['password'];
	$filename=$_FILES['image']['name'];
    $location='admin/image/'.$filename;



$file_extension=pathinfo($location,PATHINFO_EXTENSION);
$file_extension=strtolower($file_extension);
$image_ext=array('jpg','png','jpeg','gif');

$response=0;

	if(move_uploaded_file($_FILES['image']['tmp_name'],$location)){
		$response=$location;
	}
$status=1;
    if($email != "" && $mobile != "" && $city != "" && $password != "" && $filename != ""){
        $insert_record=mysqli_query($conn,"UPDATE `user` SET `email`= '$email',`mobile`= '$mobile',`city`= '$city',`password`= '$password',`image`='$filename' WHERE `username`= '$uid'");
        if(!$insert_record){
            echo "not inserted";
        }
        else
        {
            header("location:./index.php");
        }
    }
    if($filename == "" && $password == ""){
        $insert_record=mysqli_query($conn,"UPDATE `user` SET `email`= '$email',`mobile`= '$mobile',`city`= '$city' WHERE `username`= '$uid'");
            if(!$insert_record){
                echo "not inserted";
            }
            else
            {
                header("location:./index.php");
            }
    }
    if($filename == "" && $password != ""){
        $insert_record=mysqli_query($conn,"UPDATE `user` SET `email`= '$email',`mobile`= '$mobile',`city`= '$city',`password`='$password' WHERE `username`= '$uid'");
        if(!$insert_record){
            echo "not inserted";
        }
        else
        {
            header("location:./index.php");
        }
    }
    if($filename != "" && $password == ""){
        $insert_record=mysqli_query($conn,"UPDATE `user` SET `email`= '$email',`mobile`= '$mobile',`city`= '$city',`image`='$filename' WHERE `username`= '$uid'");
            if(!$insert_record){
                echo "not inserted";
            }
            else
            {
                header("location:./index.php");
            }
    }
}
?>