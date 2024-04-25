<?php
include_once("../connection.php");
include_once ('header.php'); 
$_SESSION['title'] = "Manage User";
include_once ('session.php');
?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 text-gray-800"><?php echo $_SESSION['title']; ?></h1>
    </div>

    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Profile</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Mobile no.</th>
                                <th>Status</th>
                                <th>Delete</th>
                                <th>Activation</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql="select * from users where status!= 'Deleted'";
                            $result=mysqli_query($con,$sql);
                            while($f=mysqli_fetch_array($result))
                            {?>
                            <tr>
                                <td>
                                    <p><?php echo $f[0] ?></p>
                                </td>
                                <td>
                                    <img src="../images/profile/<?php echo $f[5] ?>">
                                </td>
                                <td><?php echo $f[1] ?></td>
                                <td><?php echo $f[2] ?></td>
                                <td><?php echo $f[3] ?></td>
                                <td><?php echo $f[4] ?></td>
                                <td><?php echo $f[8] ?></td>
                                <td> <a href="delete.php?em=<?php echo $f[2]; ?>" class="btn btn-sm btn-danger shadow-sm">Delete</a></td>
                                <?php if($f[8] == 'Inactive' ) {?>
                                <td><a href="active.php?em=<?php echo $f[2]; ?>" class=" btn btn-sm btn-active shadow-sm"> Active</a></td>
                                <?php } else { ?>
                                <td><a href="inactive.php?em=<?php echo $f[2]; ?>" class=" btn btn-sm btn-inactive shadow-sm"> Inactive</a></td>
                                <?php } ?>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include_once ('footer.php'); ?>