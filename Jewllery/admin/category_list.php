<?php include 'db_connect.php'; ?>
<div class="col-lg-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Home Data</h3>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <!-- <th>Image</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM tbl_home";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $count = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $count++; ?></td>
                                <td><?php echo $row['Name']; ?></td>                               
                                 <!-- <td><img src="./img/<?php echo $row['pic']; ?>" width="100" alt="non"></td> -->
                                 <td class="text-center">
                                    <div class="btn-group">
                                        <a href="./index.php?page=edit_about&id=<?php echo $row['id'] ?>" class="btn btn-primary btn-flat">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="./index.php?page=view_about&id=<?php echo $row['id'] ?>" class="btn btn-info btn-flat">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    <a class="btn btn-danger btn-flat" href="./index.php?page=tbl_home_de&id=<?php echo $row['id'] ?>">
    <i class="fas fa-trash"></i>
</a>

                                    </div>
                            </tr>
                    <?php }
                    } else {
                        ?>
                        <tr>
                            <td colspan="3" class="text-center">No records found.</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
