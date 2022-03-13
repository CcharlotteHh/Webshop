<?php
include '../includes/db.inc.php';
include 'admin_includes/header.admin.inc.php';
?>

<body>
    <div class="col-lg-6">
        <table class="table table-bordered">
            <tr>

                <th style="width:20%"> Category id</th>
                <th style="width:50%"> Category name</th>
                <th style="width:30%" colspan="3"> Operations</th>
            </tr>
            <tr>

                <?php
                $sql = "select * from product";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {

                ?>

                    <td><?php echo $row['product_id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td> <a href="product.php?Del=<?php echo $row['product_id'] ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>
                    <td><a href="product.php?opt=edit_post&p_id=<?php echo $row['post_id']; ?>" class="btn btn-success"><span class="fa fa-edit"></td>
                    <td> <a href="product.php?add=" class="btn btn-success"><span class="fa-solid fa-plus"></span></a></td>
            </tr>

        <?php
                }
                //delete product
                if (isset($_GET['Del'])) {
                    $Del = $_GET['Del'];
                    $sql = "delete from product where product_id='$Del'";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        header('location: product.php');
                    }
                }
                //edit product + view details
                if (isset($_GET['edit'])) {
               
                        header('location: product_detail_edit.php');
                    }
                //add product
                if (isset($_GET['add'])){
                    header('Location: product_detail.php');
                }
            

        ?>
        </table>
</body>

</html>