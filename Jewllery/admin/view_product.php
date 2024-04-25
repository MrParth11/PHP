<?php
include("db_connect.php");

// Check if product ID is provided in the URL
if(isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Query to fetch product details including image
    $qry = $conn->query("SELECT * FROM tbl_shop WHERE id = '$product_id'");
    
    // Fetch product details
    if($qry->num_rows > 0) {
        $product = $qry->fetch_assoc();
        foreach($product as $key => $value) {
            // Assign each database field to a variable
            ${$key} = $value;
        }
        
        // Retrieve product images from directory
        $img = array();
        if(isset($item_code) && !empty($item_code)) {
            if(is_dir('C:/xampp/htdocs/kunjal/admin/img/'.$item_code)) {
                $_fs = scandir('C:/xampp/htdocs/kunjal/admin/img/'.$item_code);
                foreach($_fs as $k => $v) {
                    if(is_file('C:/xampp/htdocs/kunjal/admin/img/'.$item_code.'/'.$v) && !in_array($v,array('.','..'))) {
                        $img[] = 'C:/xampp/htdocs/kunjal/admin/img/'.$item_code.'/'.$v;
                    }
                }
            }
        }
    } else {
        // Product not found
        echo "Product not found!";
        exit();
    }
} else {
    // Product ID is not provided
    echo "Product ID is not set!";
    exit();
}
?>

<!-- HTML to display product details including images -->
<div class="col-lg-12">
    <div class="card card-solid">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none"><?php echo $Name ?></h3>
                    <div class="col-12">
                        <!-- Display main product image -->
                        <img src="<?php echo isset($img[0]) ? $img[0] : '' ?>" class="product-image" alt="Product Image">
                    </div>
                    <div class="col-12 product-image-thumbs">
                        <?php foreach($img as $k => $v): ?>
                            <!-- Display thumbnail images -->
                            <div class="product-image-thumb <?php echo $k == 0 ? 'active' : '' ?>"><img src="<?php echo $v ?>" alt="Product Image"></div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3"><?php echo ucwords($Name) ?></h3>
                    <p>Price: <?php echo $Price ?></p>
                    <!-- Add more product details here -->
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</div>
