<!DOCTYPE html>
<html>
<head>
	<title>Rate and Review</title>
	<link rel="stylesheet" type="text/css" href="rating css.css">
</head>
<body>
	<div class="container">
		<h1>Rate and Review</h1>
		<form method="POST">
        <div class="form-group">
				<label for="name">movie:</label>
				<input type="text" id="movie" name="movie" required>
			</div>
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required>
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>
			</div>
			<div class="form-group">
				<label for="rating">Rating:</label>
				<select id="rating" name="rating" required>
					<option value="" selected disabled>Select a rating</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
               
			</div>
			<div class="form-group">
				<label for="review">Review:</label>
				<textarea id="review" name="review" required></textarea>
			</div>
		<input type="submit" value="submit" name="btn">
		</form>
	</div>
</body>
</html>


<?php
include_once "Database.php";
if(isset($_POST['btn'])){
    $movie=$_POST['movie'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $rating=$_POST['rating'];
    $review=$_POST['review'];
    // $query = "INSERT INTO review (`EMAIL`,`NAME1`,'RATE',`REVIEW`) VALUES ('$email','$name', $rating ,'$review')";
    if($name !== "" && $email !== "" ){
        
$query = "UPDATE `review` SET `MOVIE`= '$movie',`RATE`= '$rating',`REVIEW`= '$review' WHERE `NAME1`= '$name'";
    $result = mysqli_query($conn, $query);
    if(isset($result)){
     ?> <script>
        alert("thank you");
     </script> <?php
	 header("location:index.php");
    }
    else{
        ?>
        <script>
            alert("something went wroung please try after some time thank you");
        </script> <?php
    }
}
    else{
        ?>
        <script>
        alert("enter valid data");
    </script> <?php  
    }
}
?>

