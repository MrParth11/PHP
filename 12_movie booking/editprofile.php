<?php 
  session_start();
  $check = $_SESSION['uname'];
  if($check == ""){
    header("location:./login_form.php");
  }
?>
<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Update From </title>
    <link rel="stylesheet" href="css/register.css">
    <script src="js/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <?php 
    include_once "Database.php";
    $uid = $_SESSION['uname'];
    $selectQuery = "SELECT * FROM `user` WHERE `username` = '$uid'";
    $result = mysqli_query($conn,$selectQuery);
    if($result){
      while($row = mysqli_fetch_assoc($result)){
        $email = $row['email'];
        $mobile = $row['mobile'];
        $city = $row['city'];
      }
    }
  ?>
  <div class="container">
    <center><a href="./index.html"><img src="img/logo.png" alt="" style="margin-top: 80px; width: 50%;"></a></center>
    <div class="title">Update Details</div>
    <div class="content">
      <form id="form" action="update_data.php" method="post" enctype="multipart/form-data" onsubmit="return validate();">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" id="email" name="email" placeholder="Enter your Email" value="<?php echo $email; ?>">
            <p id="emailerror"></p>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" id="number" name="number" placeholder="Enter your Phone Number" value="<?php echo $mobile; ?>">
          	<p id="numbererror"></p>
          </div>
          <div class="input-box">
            <span class="details">City</span>
            <input type="text" id="city" name="city" placeholder="Enter your City" value="<?php echo $city; ?>">
          	<p id="cityerror"></p>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id="password" name="password" placeholder="Enter your password">
          	<p id="passworderror"></p>
          </div>
          <div class="input-box">
            <span class="details">Image uploaded (Option)</span>
            <input type="file" id="image" name="image">
          </div>
        </div>
        <p id="error_para" ></p>
        <div id="err"></div>
        <div class="button">
          <input type="submit" value="Update" id="submit" name="submit">
        </div>
        <div class="button">
          <a href="./index.php">Go Back</a>
        </div>

      </form>
    </div>
  </div>
<script type="text/javascript">
  function validate()
{
 var error="";
 var email = document.getElementById( "email" );
 var number = document.getElementById( "number" );
 var city = document.getElementById( "city" );
 var password = document.getElementById( "password" );


 else if( email.value == "")
 {
  error = " <font color='red'>!Requrie Email.</font> ";
  document.getElementById( "emailerror" ).innerHTML = error;
  return false;
 }
 else if( email.value.indexOf('@') <= 0 )
 {
  error = " <font color='red'>! ** @ invail position</font> ";
  document.getElementById( "emailerror" ).innerHTML = error;
  return false;
 }

 else if ((email.value.charAt(email.value.length-4)!='.') && (email.value.charAt(email.value.length-3)!='.'))
 {
  error = " <font color='red'>! ** . invaild position</font> ";
  document.getElementById( "emailerror" ).innerHTML = error;
  return false;
 }






 else if( number.value == "")
 {
  error = " <font color='red'>!Requrie Name.</font> ";
  document.getElementById( "numbererror" ).innerHTML = error;
  return false;
 }
else if( number.value.length!=10)
 {
  error = " <font color='red'>! ** mobile number must 10 digit</font> ";
  document.getElementById( "numbererror" ).innerHTML = error;
  return false;
 }

else if(isNaN(number.value)){
  error = " <font color='red'>! ** mobile number must be not allow charecter</font> ";
  document.getElementById( "numbererror" ).innerHTML = error;
  return false;
}




 else if( city.value == "" )
 {
  error = " <font color='red'>!Requrie Name.</font> ";
  document.getElementById( "cityerror" ).innerHTML = error;
  return false;
 }

 else if( password.value == "" )
 {
  error = " <font color='red'>!Requrie Name.</font> ";
  document.getElementById( "passworderror" ).innerHTML = error;
  return false;
 }

  if(password.value.length <= 2) 
{
   error = " <font color='red'>!not allow 2 and 10 chaecter</font> ";
 
  document.getElementById( "passworderror" ).innerHTML = error;
  return false;
 
}
  if(password.value.length >= 10) 
{
   error = " <font color='red'>!not allow 2 and 10 chaecter</font> ";
 
  document.getElementById( "passworderror" ).innerHTML = error;
  return false;
 
}
 else
 {
  return true;
 }
}
</script>
</body>
</html>
