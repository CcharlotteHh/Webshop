<?php
include '../includes/db.inc.php';
include 'admin_includes/header.admin.inc.php';
?>
<div class="container-fluid">
    <!--form to display product details and be able to edit details-->

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="name" class="form-control pb-2">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text" class="form-control" name="description" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" placeholder="Price" class="form-control pb-2">
        </div>
        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" name="color" placeholder="color" class="form-control pb-2">
        </div>
        <div class="form-group">
            <label for="weight">Name</label>
            <input type="decimal" name="weight" placeholder="Weight" class="form-control pb-2">
        </div>
        <div class="form-group pt-4 text-center">
            <button class="btn btn-success" type="submit" name="btn_edit_post">Edit Post</button>
        </div>
    </form>
</div>