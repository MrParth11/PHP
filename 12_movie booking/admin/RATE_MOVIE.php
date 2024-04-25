<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Feedback Page</title>


<?php session_start(); 
if (!isset($_SESSION['admin'])) {
  header("location:login.php");
}
?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

      <div class="row">
      	<div class="col-10">
      		<h2>Rating
      	</div>
      	<div class="col-2">
        <!-- <a href="./feedback.html"><button>Feedback details<a href="./feedback.html"></a></button> -->
            	</div>
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>movie</th>
              <th>Name</th>
              <th>email</th>
              <th>rating</th>
              <th>review</th>
            </tr>
          </thead>
          <tbody id="product_list">
           <?php
include_once 'Database.php';
$result = mysqli_query($conn,"SELECT * FROM review");

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result)) {
    $id=$row['NAME1'];?>
    <tr>
              <td><?php echo $row['MOVIE'];?></td>
              <td><?php echo $row['NAME1'];?></td>
              <td><?php echo $row['EMAIL'];?></td>
              <td><?php echo $row['RATE'];?></td>
              <td><?php echo $row['REVIEW'];?></td>
              
              <td><a href="edit_review.php" class="btn-sm">edit_review</button></td>
            </tr>

 <div class="modal fade" id="delete_feedback_modal<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Movie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="insert_movie" action="insert_data.php" method="post">
          <h4> Yor Sour This id "<?php echo $row['NAME1'];?>" is delete.</h4>
          <input type="hidden" name="id" value="<?php echo $row['id'];?>">
          <input type="submit" name="deletefeedback" id="deletefeedback" value="OK" class="btn btn-primary">
          </form>

      </div>
    </div>
  </div>
</div> 

<div class="modal fade" id="edit_feedback_modal<?php echo $row['NAME1'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit review

        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
    
        <div id="preview"></div>
      </div>
    </div>
  </div>
</div> 
  <?php

  }
}
?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>




<!-- Add Product Modal start -->

<!-- Add movie Modal end -->



<?php include_once("./templates/footer.php"); ?>


<script>  
function validateform(){  
var name=document.myform.name.value;  
var email=document.myform.email.value;  
var massage=document.myform.massage.value;  

if (name==""){  
  alert("Requre Name");  
  return false;  
}else if(email==""){  
  alert("Requre email Name");  
  return false;  
  } 
  else if(massage==""){  
  alert("Requre Massage Name");  
  return false;  
  }  
}

</script>
