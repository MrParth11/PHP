<?php
include 'db_connect.php'; 
if(isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $qry = $conn->query("SELECT * FROM tbl_shop WHERE id = '$product_id'");
    if($qry->num_rows > 0) {
        $product = $qry->fetch_assoc();
        $Name = $product['Name'];
        $Price = $product['Price'];
        // Add other fields as needed
    } else {
        header("Location: index.php?error=Product not found!");
        exit();
    }
} else {
    header("Location: index.php?error=Product ID is not set!");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $Name = $_POST['name'];
    $Price = $_POST['price'];
    // Process other form fields
    $file_name = $_FILES['pic']['name'];
    $update_query = "UPDATE tbl_shop SET name='$Name', price='$Price' WHERE id='$product_id'";
    $conn->query($update_query);
    header("Location:index.php?page=Shop_list");
    exit();
}
?>
<div class="col-lg-12">
    <div class="card card-outline card-primary">
        <div class="card-body">
            <form action="edit_product.php?id=<?php echo $product_id; ?>" id="manage-product" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Product Name</label>
                            <input type="text" class="form-control form-control-sm" name="name" value="<?php echo isset($Name) ? $Name : '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Product Price</label>
                            <input type="text" class="form-control form-control-sm" name="price" value="<?php echo isset($Price) ? $Price : '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Product Picture</label>
                            <input type="file" class="form-control form-control-sm" name="pic">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="" class="control-label">Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="summernote form-control"><?php echo isset($description) ? $description : '' ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-top border-info">
                    <div class="d-flex w-100 justify-content-center align-items-center">
                        <button class="btn btn-flat bg-gradient-primary mx-2" form="manage-product">Save</button>
                        <button class="btn btn-flat bg-gradient-secondary mx-2" type="button">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
