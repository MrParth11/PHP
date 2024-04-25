<?php
include 'db_connect.php'; 
if(isset($_GET['id'])) {
    $category_id = $_GET['id'];
    $qry = $conn->query("SELECT * FROM categories WHERE id = '$category_id'");
    if($qry->num_rows > 0) {
        $category = $qry->fetch_assoc();
        $Name = $category['name'];
        $des1 = $category['des1'];
        $des2 = $category['des2'];
        $des3 = $category['des3'];
        $des4 = $category['des4'];
        $des5 = $category['des5'];
        $des6 = $category['des6'];
    } else {
        header("Location: index.php?error=Category not found!");
        exit();
    }
} else {
    header("Location: index.php?error=Category ID is not set!");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $Name = $_POST['name'];
    $des1 = $_POST['des1'];
    $des2 = $_POST['des2'];
    $des3 = $_POST['des3'];
    $des4 = $_POST['des4'];
    $des5 = $_POST['des5'];
    $des6 = $_POST['des6'];
    $file_name = $_FILES['pic']['name'];
    $update_query = "UPDATE categories SET name='$Name' WHERE id='$category_id'";
    $conn->query($update_query);
    header("Location:index.php?page=category_list");
    exit();
}
?>
<div class="col-lg-12">
    <div class="card card-outline card-primary">
        <div class="card-body">
            <form action="edit_category.php?id=<?php echo $category_id; ?>" id="manage-category" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Category Name</label>
                            <input type="text" class="form-control form-control-sm" name="name" value="<?php echo isset($Name) ? $Name : '' ?>">
                        </div>
                        <div class="form-group">
                                <label for="" class="control-label">Description1 Name</label>
                                <input type="text" class="form-control form-control-sm" name="des1" value="<?php echo isset($des1) ? $des1 : '' ?>">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Description2 Name</label>
                                <input type="text" class="form-control form-control-sm" name="des2" value="<?php echo isset($des2) ? $des2 : '' ?>">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Description3 Name</label>
                                <input type="text" class="form-control form-control-sm" name="des3" value="<?php echo isset($des3) ? $des3 : '' ?>">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Description4 Name</label>
                                <input type="text" class="form-control form-control-sm" name="des4" value="<?php echo isset($des4) ? $des4 : '' ?>">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Description5 Name</label>
                                <input type="text" class="form-control form-control-sm" name="des5" value="<?php echo isset($des5) ? $des5 : '' ?>">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Description6 Name</label>
                                <input type="text" class="form-control form-control-sm" name="des6" value="<?php echo isset($des6) ? $des6 : '' ?>">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Category image</label>
                                <input type="file" class="form-control form-control-sm" name="pic">
                            </div>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="" class="control-label">Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="summernote form-control">
                               
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-top border-info">
                    <div class="d-flex w-100 justify-content-center align-items-center">
                        <button class="btn btn-flat bg-gradient-primary mx-2" form="manage-category">Save</button>
                        <button class="btn btn-flat bg-gradient-secondary mx-2" type="button">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>