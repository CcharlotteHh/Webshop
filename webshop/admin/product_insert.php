<?php

include '../includes/db.inc.php';

    if(isset($_POST["newproduct_submit"])){

        $product_name = $_POST["product_name"];
        $product_description = $_POST["product_description"];
        
        $product_price = $_POST["product_price"];
        $product_color = $_POST["product_color"];
        $product_weight = $_POST["product_weight"];
        $product_active = $_POST["product_active"];

 
        
        $query = "insert into product (name, description, price, color, weight)
        values ('$product_name','$product_description',$product_price,'$product_color',$product_weight)";
        $result = mysqli_query($conn, $query);
        header('Location: product_detail.php');

    }
    ?>