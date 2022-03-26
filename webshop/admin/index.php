<?php 
include 'db.php';
include 'functions.php';
session_start();
$user = check_login($conn)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!--navbar for admin pannel-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Webshop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<p>Hello logged in user</p>

    <div class="container">
    <div class="row justify-content-center">
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
                <td> <a href="process.php?Del=<?php echo $row['product_id'] ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>
                <td><a href="product_detail_edit.php?opt=edit_post&p_id=<?php echo $row['product_id'];?>" class="btn btn-success"><span class="fa fa-edit"></td>
             </tr>
            
           
        <?php
                }
               
               
                //add product
                if (isset($_GET['add'])){
                    header('Location: product_add.php');
                }
                //go back to product_add (will become admin_index)
                if (isset($_GET['back'])){
                    header('Location: index.php');
                }

        ?>
        </table>
        </div>
        </div>
        <td> <a href="index.php?add=" class="btn btn-success"><span class="fa-solid fa-plus"></span></a></td>
</body>

</html>