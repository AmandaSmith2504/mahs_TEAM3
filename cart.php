<?php
    $page= 'cart';
    require "header.php";
    require "includes/dbh.inc.php"
?>

<!doctype html> 
<html lang="en"> 
  <head> 
    <!-- Bootstrap CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset+utf-8" />

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="cart.css">
    <title>Deplantsed</title>
  </head>

  <body>
        <div class="row"> 
            <div class="col-10 mx-auto col-sm-6 text-center"> 
                <h1 class="cart-title"> 
                  Shopping Cart
                </h1> 
            </div> 
        </div>

    <div class="header" id="home">
      <div class="container">
        <div class="">
          <img scr="product.image/jumia.gif" class="img-responsive">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row" style="margin: 10px">
        <div class="col-lg-12">
          <table class="table table=striped">
      <thead>
        <tr><h3>
          <th scope="col">PHOTO</th>
          <th scope="col">ITEM</th>
          <th scope="col">QUANTITY</th>
          <th scope="col">UNIT PRICE</th>
          <th scope="col">SUBTOTAL</th>
          </h3></tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"><h5>
            <img src="
              <?php
              $sql = "SELECT * FROM products WHERE product_id = '1';";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);
                              if ($resultCheck > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                  echo $row['product_image'];
                                }
                              }
                  
                ?>
              " width="50" height="40" alt="PlantPNG_1"/>
          </h5></th>
          <td><h4>
            <?php
                    $sql = "SELECT * FROM products WHERE product_id = '1';";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                      if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo '$';
                          echo $row['name'];
                        }
                      }
              ?></h4>
              <br>
            <form method='post' action=''>
              <input type='hidden' name='code' value="<?php echo $product_id; ?>" />
              <input type='hidden' name='action' value="change" />
              <button type="submit" class="btn btn-secontary btn-xs" title="REMOVE" style="background: #ff8080; color; #fff;">
                <strong>X</strong>
              </button>
            </form>
          </td>
          <td>
            <form method='post' action=''>
              <input type='hidden' name='code' value="<?php echo $products["code"]; ?>" />
              <input type='hidden' name='action' value="change" />
              <input type='text' name='quantity' maxlength="2" size="2" value="" />
              <snap><button type="submit" name="update" value="submit" class="btn btn-default btn-xs" style="background: #ff8080; color: #fff;" onChange="
              this.form.submit()">Update</button></span>
            </form>
            <td><h4>
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
            </h4></td>
            <td><h4>
              <?php $sql = "SELECT * FROM products WHERE product_id = '1';";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                      if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo '$';
                          
                        }
                      }; ?>
            </h4></td>
            </tr>
              <?php  
                $sql = "SELECT * FROM products WHERE product_id = '1';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if (isset($_GET['submit'])){
                    $result1 = $_GET['num1'];
                    $price = $row['price'];
                    $operator = $_GET['operator'];
                    switch ($operator){
                        case "Multiply":
                            echo $result1 * $result2;
                            break;
                    }
                }
            ?>
            <tr>
              <td colspan="5" aline="right">
                  <strong>TOTAL: <?php $sql = "SELECT * FROM products WHERE product_id = '1';";
                                      $result = mysqli_query($conn, $sql);
                                      $resultCheck = mysqli_num_rows($result);

                                      if (isset($_GET['submit'])){
                                          $result1 = $_GET['num1'];
                                          $price = $row['price'];
                                          $operator = $_GET['operator'];
                                          switch ($operator){
                                              case "Multiply":
                                                  echo $result1 * $result2;
                                                  break;
                                          }
                                      } 
                  ?></strong>
              </td>
            </tr>
            <tr>
              <td colspan="5" aline="right">
              <a href="product.php"><button type="button" class="btn btn-sussess" style="float: left;" data-dismiss="modal">
              Continue Shopping</button></a>
              <a href="#"><button type="button" class="btn btn-primary">Proceed To Checkout</button></a>
              </td>
            </tr>
      </tbody>
      </table>
          </td>
        </div>
      </div>
    </div>

  </body>

</html>

<?php
    require "footer.php";
?>