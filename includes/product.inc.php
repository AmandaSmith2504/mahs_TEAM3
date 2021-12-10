<?php
if (isset($_POST['code']) && $_POST['code']!=""){
    require 'includes/dbh.inc.php';
    require 'product.php';

    $code = $_POST;
    $sql = "SELECT * FROM products;";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $code = $row['code'];
    $price = $row['price'];
    $image = $row['product_image'];
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
    $result = mysqli_query($con, "SELECT * FROM products");
    while($row = mysqli_fetch_assoc($result));

    if(empty($_SESSION["shopping_cart"])){
        $_SESSION["shopping_cart"] = $cartArray;
        //Product in not yet added to Cart. It will add to cart and prevent page from refereshing
        echo "<script>
        return false;
        </script>";

        }else if($array_keys = array_keys($_SESSION["shopping_cart"])){
                /* echo "<script> alert('Product is Already added to your cart!');</script>"; */
                $AlreadyAdded = "<div class='alert-danger text-center alert-dismissable'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>Product is Already added to your cart!</strong></div>";

                }else if($_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"], $cartArray)){
                    /* product is not added to cart. it will add to cart and prevent page from referesshing */
                    echo "<script> return false; </script>";
                    }
        }
    if (!empty($AlreadyAdder)) {
        echo $AlreadyAdded;
}