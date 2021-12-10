<?php
    $page= 'home';
    require "header.php";
    require "includes/dbh.inc.php";
?>

<!doctype html> 
<html lang="en"> 
  <head> 
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
<link rel="stylesheet" href="main.css">  
<script src="https://kit.fontawesome.com/7408800f57.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Klee+One:wght@400;600&display=swap" rel="stylesheet"> 
    <title>Deplantsed</title> 
  </head> 

<main>
    <body>
              <!--Slider-->
        <section id="main">
            <div id="Carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators"> 
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li> 
                    <li data-target="#Carousel" data-slide-to="1"></li> 
                    <li data-target="#Carousel" data-slide-to="2"></li> 
                </ol>


                <div class="carousel-inner"> 
                    <div class="carousel-item carousel-image-1 active">
                            <div class="container">
                        <div class="carousel-caption d-none d-sm-block mb-5"> 
                                <h1 class="display-3 title-color">Deplantsed</h1> 
                                <p class="lead">Keep that frown upside down</p> 
                        </div> 
                            </div>
                    </div>
                  <!-----End of 1st slide----->
                    <div class="carousel-item carousel-image-2 "> 
                        <div class="container"> 
                            <div class="carousel-caption d-none d-sm-block mb-5"> 
                                <h1 class="display-3 title-color">Sign Up</h1> 
                                <p class="lead">Haven't made an acount?</p> 
                                    <a href="signup.php" class="btn btn-color slide-btn btn-lg"> 
                                        Sign Up Now
                                    </a> 
                                
                            </div> 
                        </div> 
                    </div>
                  <!-----End of 2nd slide----->
                    <div class="carousel-item carousel-image-3"> 
                        <div class="container"> 
                            <div class="carousel-caption d-none d-sm-block mb-5"> 
                                <h1 class="display-3 title-color">Hey!</h1> 
                                <p class="lead">Do you want to know more about Deplantsed?</p> 
                                    <a href="about.php" class="btn btn-color slide-btn btn-lg"> 
                                        Learn More 
                                    </a> 
                            </div> 
                        </div> 
                    </div>
                  <!-----End of 3rd slide----->   
                    <a href="#Carousel" data-slide="prev" class="carousel-control-prev"> 
                        <span class="carousel-control-prev-icon"></span> 
                    </a> 
                    <a href="#Carousel" data-slide="next" class="carousel-control-next"> 
                        <span class="carousel-control-next-icon"></span> 
                    </a>
                </div> 
            </div>
        </section> 
    </body>
      <!--End of Slider-->



    <!--About Section--> 
 <section id="about-sec"> 
     <div class="container"> 
         <div class="row align-items-center"> 
             <div class="col-lg-5 text-center"> 
                 <img src="<?php $sql = "SELECT * FROM products WHERE product_id = '8';";
                                $result = mysqli_query($conn, $sql);
                                $resultCheck = mysqli_num_rows($result);
                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    echo $row['product_image'];
                                    }
                                } ?>" width="300" height="150" 
                 class="img-fluid watch-img"> 
             </div> 
             <div class="col-lg-7 text-lg-right text-center text-color about-text"> 
                 <h1>Our Purpose</h1> 
                 <p class="text">Deplantsed is all about making people just a little bit sadder.
                     <br/>HANG ON. I know what you may be thinking "I don't want to make anyone sad!"...
                     <br/>You're wrong.
                     <br/>We all have that one person that is just so happy-go-lucky
                     <br/>that you just want to take them down a notch.
                     <br/>Well, with Deplantsed potted plants you can do that.
                     <br/>When they see that sad face, they themselfs will be sad.
                 </p> 
             </div> 
         </div> 
     </div> 
 </section>  
 <!--End of about Section--> 

 <!------------------------------------------------FEATURED PRODUCTS SECTION--------------------------------------------------->
    <section id="products" class="products py-5">
        <div class="container">
            <!---------------section title---------->
                <div class="row">
                    <div class="col-10 mx-auto col-sm-6 text-center">
                        <h1 class="text-capitalize product-title">
                            Best Sellers!
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
                                        <img style="height:377px; width:360px;" style="relative" src="<?php $sql = "SELECT * FROM products WHERE product_id = '9';";
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
                                                                <h5>blah blah blah</h5>
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
                                        <img style="height:345px; width:350px;" style="relative" src="<?php $sql = "SELECT * FROM products WHERE product_id = '12';";
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
                                                                <h5>blah blah blah</h5>
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
                                        <img style="height:350px; width:350px;" style="relative" src="<?php $sql = "SELECT * FROM products WHERE product_id = '1';";
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
                                                                <h5>blah blah blah</h5>
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
    <!-------------------------------------------------------END FEATURED PRODUCTS SECTION------------------------------------------------->
</main>

<?php
    require "footer.php";
?>