<?php

include('dbh.inc.php');
if (!empty($_SESSION['email'])){
    $email = $_SESSION['email'];

            $sql = "SELECT * FROM products;";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            $name = $row['name'];
            $code = $row['code'];
            $price = $row['price'];
            $image = $row['image'];
            $product_id = $row['product_id'];

            $cartArray = array(
                $code =>array(
                    'name'=>$name,
                    'code'=>$code,
                    'price'=>$price,
                    'quantity'=>1,
                    'image'=>$image,
                    'product'=>$product_id)
                );
    }

$status = "";
if (isset($_POST['action']) && $_POST['action']== "remove"){
if (!empty($_SESSION["shopping_cart"])){
    foreach($_SESSION["shopping_cart"] as $key => $value){
        if($_POST["code"] == $key){
            unset($_SESSION["shopping_cart"][$key]);
            $status = "<div class='alert alert-danger text-center alert-disnissible'><a href='#' class='close' data-dismiss='alert' aria-lable='close'>&times;</a><starong>
            Product has been removed from Cart!</strong></div>";
        }
        if(empty($_SESSION["shopping_cart"]))
        unset($_SESSION["shopping_cart"]);
    }
}

if (isset($_POST['action']) && $_POST['action']=="change"){
    foreach($_SESSION["shopping_cart"] as & $value){
        if($value['code'] === $_POST["code"]){
            $value['quantity'] = $_POST["quantity"];
                $status = "<div class='alert-success text-center alert-dismissible'>
                <a href='#' class='close' data-dismiss='alert' aria-lable='close'>&times;</a><strong>
                Product has been Updated!</strong></div>";
            break;
        }
    }
}
}

if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
}
