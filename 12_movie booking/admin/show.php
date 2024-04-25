<!DOCTYPE html>
<html>
<head>
    <title>Show Data</title>
</head>
<body>

<?php 
include "connection.php";
$sql = "SELECT * FROM add_movie";
$data=mysqli_query($con,$sql);
$result = mysqli_num_rows($data);
if ($result=mysqli_num_rows($data))
{
        ?>
			<table border="2">															
				<tr>
				<th>movies name</th>
				<th>dircter Name</th>
				<th>categroy</th>
				<th>language</th>
				<th>show</th>
				<th>Action</th>
			<?php
    while($result=mysqli_fetch_array($data))
    {
        echo "<tr>
        <td>".$result['movie_name']."</td>
        <td>".$result['directer']."</td>
        <td>".$result['categroy']."</td>
        <td>".$result['show']."</td>
        <td>".$result['language']."</td>
        <td>
		<a href='updat.php?
		id=$result[id] &
        movie names=$result[movie_name] &
        dircter name=$result[directer] &
        categroy=$result[categroy] &
        show=$result[show] &
		</a></td>
        <td><a href='delete.php?id=$result[id]'>Delete</a></td>
        </tr>";
    }
}
else
{
    echo "No Records";
}


?>
</table>
<a href=index.php>Insert More Records </a>
</body>
</html>
