<?php
    $page= 'product';
    require "header.php";
    require "includes/dbh.inc.php";
    require "includes/product.inc.php";
?>

<!doctype html> 
<html lang="en"> 
  <head> 
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

    <meta https-equiv="X-UA-Compatible" contest="ie=edge">
    <title>Deplantsed</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/style.css" rel="stylesheet" type="text/css" medis="all"/>
    <link href="https://unpkg.com/ionicon@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="product.css">
    <link href="product.inc.php">
    <script src="https://kit.fontawesome.com/7408800f57.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Klee+One:wght@400;600&display=swap" rel="stylesheet">
  
  </head> 
    <main>

                <div>
                    <section>
                        
                    </section>
                </div>

<!------------------------------------------------PRODUCTS SECTION--------------------------------------------------->
        <section id="products" class="products py-5">
            <div class="container">
                <!---------------section title---------->
                    <div class="row">
                        <div class="col-10 mx-auto col-sm-6 text-center">
                            <h1 class="text-capitalize product-title">
                                Products
                            </h1>
                        </div>
                    </div>
                <!------------end section title----------->
                <!-----------------product items---------->
                    <div class="row product-items" id="product-items">
                        <!-----------single item------------->
                            <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
                                <div class="card single-item">
                                    <div class="img-container">
                                        <img style="height:355px; width:390px;" style="relative" src="<?php $sql = "SELECT * FROM products WHERE product_id = '1';";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    $resultCheck = mysqli_num_rows($result);
                                                                    if ($resultCheck > 0) {
                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                            echo $row['product_image'];
                                                                        }
                                                                    } ?>" alt="PlantPNG_1" class="card-img-top product-img">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-text d-flex justify-content-between text-capitalize">
                                            <div class='item-info-product'>
                                                <form method='post'>
                                                    <input type='hidden' name='code' value="<?php echo $product_id; ?>" />
                                                    <h5>
                                                        <?php 
                                                            $sql = "SELECT * FROM products WHERE product_id = '1';";
                                                            $result = mysqli_query($conn, $sql);
                                                            $resultCheck = mysqli_num_rows($result);
                                                            if ($resultCheck > 0) {
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    echo $row['name'];
                                                                }
                                                            }
                                                         ?>
                                                 </h5>
                                                    <div class="info-product-price">
                                                            <?php 
                                                                $sql = "SELECT * FROM products WHERE product_id = '1';";
                                                                $result = mysqli_query($conn, $sql);
                                                                $resultCheck = mysqli_num_rows($result);
                                                                if ($resultCheck > 0) {
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        echo '$';
                                                                        echo $row['price'];
                                                                    }
                                                                }
                                                            ?>
                                                    
                                                    </div>
                                                    <a class="add-cart cart3" href="#">Add to Cart</a>
                                                </form>
                                            </div>
                                            <section>
                                                <div class="container">
                                                    <div class="accordion">
                                                        <div class="accordion-item" id="sp1-info">
                                                            <a class="accordion-link" href="#sp1-info">
                                                                <h5>More</h5>
                                                                <i class="icon ion-md-add"></i>
                                                                <i class="icon ion-md-remove"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <p>
                                                                <h5>Made from stone</h5>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!------------end single item------------->
                        <!-----------single item------------->
                        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
                                <div class="card single-item">
                                    <div class="img-container">
                                        <img style="height:355px; width:390px;" style="relative" src="<?php $sql = "SELECT * FROM products WHERE product_id = '2';";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    $resultCheck = mysqli_num_rows($result);
                                                                    if ($resultCheck > 0) {
                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                            echo $row['product_image'];
                                                                        }
                                                                    } ?>" alt="PlantPNG_2" class="card-img-top product-img">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-text d-flex justify-content-between text-capitalize">
                                            <div class='item-info-product'>
                                                <form method='post'>
                                                    <input type='hidden' name='code' value="<?php echo $product_id; ?>" />
                                                    <h5>
                                                        <?php 
                                                            $sql = "SELECT * FROM products WHERE product_id = '2';";
                                                            $result = mysqli_query($conn, $sql);
                                                            $resultCheck = mysqli_num_rows($result);
                                                            if ($resultCheck > 0) {
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    echo $row['name'];
                                                                }
                                                            }
                                                         ?>
                                                 </h5>
                                                    <div class="info-product-price">
                                                            <?php 
                                                                $sql = "SELECT * FROM products WHERE product_id = '2';";
                                                                $result = mysqli_query($conn, $sql);
                                                                $resultCheck = mysqli_num_rows($result);
                                                                if ($resultCheck > 0) {
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        echo '$';
                                                                        echo $row['price'];
                                                                    }
                                                                }
                                                            ?>
                                                    </div>
                                                    <a class="add-cart cart3" href="#">Add to Cart</a>
                                                </form>
                                            </div>
                                            <section>
                                                <div class="container">
                                                    <div class="accordion">
                                                        <div class="accordion-item" id="sp2-info">
                                                            <a class="accordion-link" href="#sp2-info">
                                                                <h5>More</h5>
                                                                <i class="icon ion-md-add"></i>
                                                                <i class="icon ion-md-remove"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <p>
                                                                <h5>Made from clay</h5>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!------------end single item------------->
                        <!-----------single item------------->
                        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
                                <div class="card single-item">
                                    <div class="img-container">
                                        <img style="height:377px; width:390px;" style="relative" src="<?php $sql = "SELECT * FROM products WHERE product_id = '3';";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    $resultCheck = mysqli_num_rows($result);
                                                                    if ($resultCheck > 0) {
                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                            echo $row['product_image'];
                                                                        }
                                                                    } ?>" alt="PlantPNG_3" class="card-img-top product-img">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-text d-flex justify-content-between text-capitalize">
                                            <div class='item-info-product'>
                                                <form method='post'>
                                                    <input type='hidden' name='code' value="<?php echo $product_id; ?>" />
                                                    <h5>
                                                        <?php 
                                                            $sql = "SELECT * FROM products WHERE product_id = '3';";
                                                            $result = mysqli_query($conn, $sql);
                                                            $resultCheck = mysqli_num_rows($result);
                                                            if ($resultCheck > 0) {
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    echo $row['name'];
                                                                }
                                                            }
                                                         ?>
                                                 </h5>
                                                    <div class="info-product-price">
                                                            <?php 
                                                                $sql = "SELECT * FROM products WHERE product_id = '3';";
                                                                $result = mysqli_query($conn, $sql);
                                                                $resultCheck = mysqli_num_rows($result);
                                                                if ($resultCheck > 0) {
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        echo '$';
                                                                        echo $row['price'];
                                                                    }
                                                                }
                                                            ?>
                                                    </div>
                                                    <a class="add-cart cart3" href="#">Add to Cart</a>
                                                </form>
                                            </div>
                                            <section>
                                                <div class="container">
                                                    <div class="accordion">
                                                        <div class="accordion-item" id="sp3-info">
                                                            <a class="accordion-link" href="#sp3-info">
                                                                <h5>More</h5>
                                                                <i class="icon ion-md-add"></i>
                                                                <i class="icon ion-md-remove"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <p>
                                                                <h5>Made from clay</h5>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!------------end single item------------->
                        <!-----------single item------------->
                        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
                                <div class="card single-item">
                                    <div class="img-container">
                                        <img style="height:377px; width:390px;"style="relative" src="<?php $sql = "SELECT * FROM products WHERE product_id = '4';";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    $resultCheck = mysqli_num_rows($result);
                                                                    if ($resultCheck > 0) {
                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                            echo $row['product_image'];
                                                                        }
                                                                    } ?>" alt="PlantPNG_4" class="card-img-top product-img">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-text d-flex justify-content-between text-capitalize">
                                            <div class='item-info-product'>
                                                <form method='post'>
                                                    <input type='hidden' name='code' value="<?php echo $product_id; ?>" />
                                                    <h5>
                                                        <?php 
                                                            $sql = "SELECT * FROM products WHERE product_id = '4';";
                                                            $result = mysqli_query($conn, $sql);
                                                            $resultCheck = mysqli_num_rows($result);
                                                            if ($resultCheck > 0) {
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    echo $row['name'];
                                                                }
                                                            }
                                                         ?>
                                                 </h5>
                                                    <div class="info-product-price">
                                                            <?php 
                                                                $sql = "SELECT * FROM products WHERE product_id = '4';";
                                                                $result = mysqli_query($conn, $sql);
                                                                $resultCheck = mysqli_num_rows($result);
                                                                if ($resultCheck > 0) {
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        echo '$';
                                                                        echo $row['price'];
                                                                    }
                                                                }
                                                            ?>
                                                    </div>
                                                    <a class="add-cart cart3" href="#">Add to Cart</a>
                                                </form>
                                            </div>
                                            <section>
                                                <div class="container">
                                                    <div class="accordion">
                                                        <div class="accordion-item" id="sp4-info">
                                                            <a class="accordion-link" href="#sp4-info">
                                                                <h5>More</h5>
                                                                <i class="icon ion-md-add"></i>
                                                                <i class="icon ion-md-remove"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <p>
                                                                <h5>Made from clay</h5>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!------------end single item------------->
                        <!-----------single item------------->
                        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
                                <div class="card single-item">
                                    <div class="img-container">
                                        <img style="height:355px; width:390px;"style="relative" src="<?php $sql = "SELECT * FROM products WHERE product_id = '5';";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    $resultCheck = mysqli_num_rows($result);
                                                                    if ($resultCheck > 0) {
                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                            echo $row['product_image'];
                                                                        }
                                                                    } ?>" alt="PlantPNG_5" class="card-img-top product-img">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-text d-flex justify-content-between text-capitalize">
                                            <div class='item-info-product'>
                                                <form method='post'>
                                                    <input type='hidden' name='code' value="<?php echo $product_id; ?>" />
                                                    <h5>
                                                        <?php 
                                                            $sql = "SELECT * FROM products WHERE product_id = '5';";
                                                            $result = mysqli_query($conn, $sql);
                                                            $resultCheck = mysqli_num_rows($result);
                                                            if ($resultCheck > 0) {
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    echo $row['name'];
                                                                }
                                                            }
                                                         ?>
                                                 </h5>
                                                    <div class="info-product-price">
                                                            <?php 
                                                                $sql = "SELECT * FROM products WHERE product_id = '5';";
                                                                $result = mysqli_query($conn, $sql);
                                                                $resultCheck = mysqli_num_rows($result);
                                                                if ($resultCheck > 0) {
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        echo '$';
                                                                        echo $row['price'];
                                                                    }
                                                                }
                                                            ?>
                                                    </div>
                                                    <a class="add-cart cart3" href="#">Add to Cart</a>
                                                </form>
                                            </div>
                                            <section>
                                                <div class="container">
                                                    <div class="accordion">
                                                        <div class="accordion-item" id="sp5-info">
                                                            <a class="accordion-link" href="#sp5-info">
                                                                <h5>More</h5>
                                                                <i class="icon ion-md-add"></i>
                                                                <i class="icon ion-md-remove"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <p>
                                                                <h5>Made from clay</h5>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!------------end single item------------->
                        <!-----------single item------------->
                        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
                                <div class="card single-item">
                                    <div class="img-container">
                                        <img style="height:355px; width:390px;"style="relative" src="<?php $sql = "SELECT * FROM products WHERE product_id = '6';";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    $resultCheck = mysqli_num_rows($result);
                                                                    if ($resultCheck > 0) {
                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                            echo $row['product_image'];
                                                                        }
                                                                    } ?>" alt="PlantPNG_6" class="card-img-top product-img">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-text d-flex justify-content-between text-capitalize">
                                            <div class='item-info-product'>
                                                <form method='post'>
                                                    <input type='hidden' name='code' value="<?php echo $product_id; ?>" />
                                                    <h5>
                                                        <?php 
                                                            $sql = "SELECT * FROM products WHERE product_id = '6';";
                                                            $result = mysqli_query($conn, $sql);
                                                            $resultCheck = mysqli_num_rows($result);
                                                            if ($resultCheck > 0) {
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    echo $row['name'];
                                                                }
                                                            }
                                                         ?>
                                                 </h5>
                                                    <div class="info-product-price">
                                                            <?php 
                                                                $sql = "SELECT * FROM products WHERE product_id = '6';";
                                                                $result = mysqli_query($conn, $sql);
                                                                $resultCheck = mysqli_num_rows($result);
                                                                if ($resultCheck > 0) {
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        echo '$';
                                                                        echo $row['price'];
                                                                    }
                                                                }
                                                            ?>
                                                    </div>
                                                    <a class="add-cart cart3" href="#">Add to Cart</a>
                                                </form>
                                            </div>
                                            <section>
                                                <div class="container">
                                                    <div class="accordion">
                                                        <div class="accordion-item" id="sp6-info">
                                                            <a class="accordion-link" href="#sp6-info">
                                                                <h5>More</h5>
                                                                <i class="icon ion-md-add"></i>
                                                                <i class="icon ion-md-remove"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <p>
                                                                <h5>Made from clay</h5>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!------------end single item------------->
                        <!-----------single item------------->
                        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
                                <div class="card single-item">
                                    <div class="img-container">
                                        <img style="height:355px; width:390px;"style="relative" src="<?php $sql = "SELECT * FROM products WHERE product_id = '7';";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    $resultCheck = mysqli_num_rows($result);
                                                                    if ($resultCheck > 0) {
                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                            echo $row['product_image'];
                                                                        }
                                                                    } ?>" alt="PlantPNG_7" class="card-img-top product-img">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-text d-flex justify-content-between text-capitalize">
                                            <div class='item-info-product'>
                                                <form method='post'>
                                                    <input type='hidden' name='code' value="<?php echo $product_id; ?>" />
                                                    <h5>
                                                        <?php 
                                                            $sql = "SELECT * FROM products WHERE product_id = '7';";
                                                            $result = mysqli_query($conn, $sql);
                                                            $resultCheck = mysqli_num_rows($result);
                                                            if ($resultCheck > 0) {
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    echo $row['name'];
                                                                }
                                                            }
                                                         ?>
                                                 </h5>
                                                    <div class="info-product-price">  
                                                            <?php 
                                                                $sql = "SELECT * FROM products WHERE product_id = '7';";
                                                                $result = mysqli_query($conn, $sql);
                                                                $resultCheck = mysqli_num_rows($result);
                                                                if ($resultCheck > 0) {
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        echo '$';
                                                                        echo $row['price'];
                                                                    }
                                                                }
                                                            ?>
                                                    </div>
                                                    <a class="add-cart cart3" href="#">Add to Cart</a>
                                                </form>
                                            </div>
                                            <section>
                                                <div class="container">
                                                    <div class="accordion">
                                                        <div class="accordion-item" id="sp7-info">
                                                            <a class="accordion-link" href="#sp7-info">
                                                                <h5>More</h5>
                                                                <i class="icon ion-md-add"></i>
                                                                <i class="icon ion-md-remove"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <p>
                                                                <h5>Made from clay</h5>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!------------end single item------------->
                        <!-----------single item------------->
                        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
                                <div class="card single-item">
                                    <div class="img-container">
                                        <img style="height:355px; width:390px;"style="relative" src="<?php $sql = "SELECT * FROM products WHERE product_id = '8';";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    $resultCheck = mysqli_num_rows($result);
                                                                    if ($resultCheck > 0) {
                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                            echo $row['product_image'];
                                                                        }
                                                                    } ?>" alt="PlantPNG_8" class="card-img-top product-img">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-text d-flex justify-content-between text-capitalize">
                                            <div class='item-info-product'>
                                                <form method='post'>
                                                    <input type='hidden' name='code' value="<?php echo $product_id; ?>" />
                                                    <h5>
                                                        <?php 
                                                            $sql = "SELECT * FROM products WHERE product_id = '8';";
                                                            $result = mysqli_query($conn, $sql);
                                                            $resultCheck = mysqli_num_rows($result);
                                                            if ($resultCheck > 0) {
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    echo $row['name'];
                                                                }
                                                            }
                                                         ?>
                                                 </h5>
                                                    <div class="info-product-price">
                                                            <?php 
                                                                $sql = "SELECT * FROM products WHERE product_id = '8';";
                                                                $result = mysqli_query($conn, $sql);
                                                                $resultCheck = mysqli_num_rows($result);
                                                                if ($resultCheck > 0) {
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        echo '$';
                                                                        echo $row['price'];
                                                                    }
                                                                }
                                                            ?>
                                                    </div>
                                                    <a class="add-cart cart3" href="#">Add to Cart</a>
                                                </form>
                                            </div>
                                            <section>
                                                <div class="container">
                                                    <div class="accordion">
                                                        <div class="accordion-item" id="sp8-info">
                                                            <a class="accordion-link" href="#sp8-info">
                                                                <h5>More</h5>
                                                                <i class="icon ion-md-add"></i>
                                                                <i class="icon ion-md-remove"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <p>
                                                                <h5>Made from clay</h5>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!------------end single item------------->
                        <!-----------single item------------->
                        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
                                <div class="card single-item">
                                    <div class="img-container">
                                        <img style="height:355px; width:390px;"style="relative" src="<?php $sql = "SELECT * FROM products WHERE product_id = '9';";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    $resultCheck = mysqli_num_rows($result);
                                                                    if ($resultCheck > 0) {
                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                            echo $row['product_image'];
                                                                        }
                                                                    } ?>" alt="PlantPNG_9" class="card-img-top product-img">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-text d-flex justify-content-between text-capitalize">
                                            <div class='item-info-product'>
                                                <form method='post'>
                                                    <input type='hidden' name='code' value="<?php echo $product_id; ?>" />
                                                    <h5>
                                                        <?php 
                                                            $sql = "SELECT * FROM products WHERE product_id = '9';";
                                                            $result = mysqli_query($conn, $sql);
                                                            $resultCheck = mysqli_num_rows($result);
                                                            if ($resultCheck > 0) {
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    echo $row['name'];
                                                                }
                                                            }
                                                         ?>
                                                 </h5>
                                                    <div class="info-product-price">
                                                            <?php 
                                                                $sql = "SELECT * FROM products WHERE product_id = '9';";
                                                                $result = mysqli_query($conn, $sql);
                                                                $resultCheck = mysqli_num_rows($result);
                                                                if ($resultCheck > 0) {
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        echo '$';
                                                                        echo $row['price'];
                                                                    }
                                                                }
                                                            ?>
                                                    </div>
                                                    <a class="add-cart cart3" href="#">Add to Cart</a>
                                                </form>
                                            </div>
                                            <section>
                                                <div class="container">
                                                    <div class="accordion">
                                                        <div class="accordion-item" id="sp9-info">
                                                            <a class="accordion-link" href="#sp9-info">
                                                                <h5>More</h5>
                                                                <i class="icon ion-md-add"></i>
                                                                <i class="icon ion-md-remove"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <p>
                                                                <h5>Made from clay</h5>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!------------end single item------------->
                        <!-----------single item------------->
                        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
                                <div class="card single-item">
                                    <div class="img-container">
                                        <img style="height:377px; width:390px;"style="relative" src="<?php $sql = "SELECT * FROM products WHERE product_id = '10';";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    $resultCheck = mysqli_num_rows($result);
                                                                    if ($resultCheck > 0) {
                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                            echo $row['product_image'];
                                                                        }
                                                                    } ?>" alt="PlantPNG_10" class="card-img-top product-img">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-text d-flex justify-content-between text-capitalize">
                                            <div class='item-info-product'>
                                                <form method='post'>
                                                    <input type='hidden' name='code' value="<?php echo $product_id; ?>" />
                                                    <h5>
                                                        <?php 
                                                            $sql = "SELECT * FROM products WHERE product_id = '10';";
                                                            $result = mysqli_query($conn, $sql);
                                                            $resultCheck = mysqli_num_rows($result);
                                                            if ($resultCheck > 0) {
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    echo $row['name'];
                                                                }
                                                            }
                                                         ?>
                                                 </h5>
                                                    <div class="info-product-price">
                                                            <?php 
                                                                $sql = "SELECT * FROM products WHERE product_id = '10';";
                                                                $result = mysqli_query($conn, $sql);
                                                                $resultCheck = mysqli_num_rows($result);
                                                                if ($resultCheck > 0) {
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        echo '$';
                                                                        echo $row['price'];
                                                                    }
                                                                }
                                                            ?>
                                                    </div>
                                                    <a class="add-cart cart3" href="#">Add to Cart</a>
                                                </form>
                                            </div>
                                            <section>
                                                <div class="container">
                                                    <div class="accordion">
                                                        <div class="accordion-item" id="sp10-info">
                                                            <a class="accordion-link" href="#sp10-info">
                                                                <h5>More</h5>
                                                                <i class="icon ion-md-add"></i>
                                                                <i class="icon ion-md-remove"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <p>
                                                                <h5>Made from clay</h5>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!------------end single item------------->
                        <!-----------single item------------->
                        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
                                <div class="card single-item">
                                    <div class="img-container">
                                        <img style="height:355px; width:390px;"style="relative" src="<?php $sql = "SELECT * FROM products WHERE product_id = '11';";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    $resultCheck = mysqli_num_rows($result);
                                                                    if ($resultCheck > 0) {
                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                            echo $row['product_image'];
                                                                        }
                                                                    } ?>" alt="PlantPNG_11" class="card-img-top product-img">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-text d-flex justify-content-between text-capitalize">
                                            <div class='item-info-product'>
                                                <form method='post'>
                                                    <input type='hidden' name='code' value="<?php echo $product_id; ?>" />
                                                    <h5>
                                                        <?php 
                                                            $sql = "SELECT * FROM products WHERE product_id = '11';";
                                                            $result = mysqli_query($conn, $sql);
                                                            $resultCheck = mysqli_num_rows($result);
                                                            if ($resultCheck > 0) {
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    echo $row['name'];
                                                                }
                                                            }
                                                         ?>
                                                 </h5>
                                                    <div class="info-product-price">
                                                            <?php 
                                                                $sql = "SELECT * FROM products WHERE product_id = '11';";
                                                                $result = mysqli_query($conn, $sql);
                                                                $resultCheck = mysqli_num_rows($result);
                                                                if ($resultCheck > 0) {
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        echo '$';
                                                                        echo $row['price'];
                                                                    }
                                                                }
                                                            ?>
                                                    </div>
                                                    <a class="add-cart cart3" href="#">Add to Cart</a>
                                                </form>
                                            </div>
                                            <section>
                                                <div class="container">
                                                    <div class="accordion">
                                                        <div class="accordion-item" id="sp11-info">
                                                            <a class="accordion-link" href="#sp11-info">
                                                                <h5>More</h5>
                                                                <i class="icon ion-md-add"></i>
                                                                <i class="icon ion-md-remove"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <p>
                                                                <h5>Made from recycled plastic</h5>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!------------end single item------------->
                        <!-----------single item------------->
                        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
                                <div class="card single-item">
                                    <div class="img-container">
                                        <img style="height:355px; width:390px;"style="relative" src="<?php $sql = "SELECT * FROM products WHERE product_id = '12';";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    $resultCheck = mysqli_num_rows($result);
                                                                    if ($resultCheck > 0) {
                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                            echo $row['product_image'];
                                                                        }
                                                                    } ?>" alt="PlantPNG_12" class="card-img-top product-img">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-text d-flex justify-content-between text-capitalize">
                                            <div class='item-info-product'>
                                                <form method='post'>
                                                    <input type='hidden' name='code' value="<?php echo $product_id; ?>" />
                                                    <h5>
                                                        <?php 
                                                            $sql = "SELECT * FROM products WHERE product_id = '12';";
                                                            $result = mysqli_query($conn, $sql);
                                                            $resultCheck = mysqli_num_rows($result);
                                                            if ($resultCheck > 0) {
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    echo $row['name'];
                                                                }
                                                            }
                                                         ?>
                                                 </h5>
                                                    <div class="info-product-price">
                                                            <?php 
                                                                $sql = "SELECT * FROM products WHERE product_id = '12';";
                                                                $result = mysqli_query($conn, $sql);
                                                                $resultCheck = mysqli_num_rows($result);
                                                                if ($resultCheck > 0) {
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        echo '$';
                                                                        echo $row['price'];
                                                                    }
                                                                }
                                                            ?>
                                                    </div>
                                                    <a class="add-cart cart3" href="#">Add to Cart</a>
                                                </form>
                                            </div>
                                            <section>
                                                <div class="container">
                                                    <div class="accordion">
                                                        <div class="accordion-item" id="sp12-info">
                                                            <a class="accordion-link" href="#sp12-info">
                                                                <h5>More</h5>
                                                                <i class="icon ion-md-add"></i>
                                                                <i class="icon ion-md-remove"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <p>
                                                                <h5>Made from clay</h5>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!------------end single item------------->
                    </div>
                <!--------------------end products items------>
            </div>
        </section>
    </main>

<?php
    require "footer.php";
?>