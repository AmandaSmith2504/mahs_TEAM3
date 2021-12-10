<?php
    $page= 'about';
    require "header.php";
    require "includes/dbh.inc.php"
?>
<!doctype html> 
<html lang="en"> 
  <head> 
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
<link rel="stylesheet" href="about.css"> 
<script src="https://kit.fontawesome.com/7408800f57.js" crossorigin="anonymous"></script> 
<link href="https://fonts.googleapis.com/css2?family=Klee+One:wght@400;600&display=swap" rel="stylesheet"> 
    <title>Deplantsed</title> 
  </head>


        <div class="row"> 
            <div class="col-10 mx-auto col-sm-6 text-center"> 
                <h1 class="text-capitalize about-title"> 
                  What is Deplantsed?
                </h1> 
            </div> 
        </div> 


        <div id="how-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 text-center">
                        <img src="<?php $sql = "SELECT * FROM products WHERE product_id = '10';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                        if ($resultCheck > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo $row['product_image'];
                                                }
                                            } ?>" width="300" height="150"
                        class="img-fluid watch-img ">
                    </div>
                    <div class="col-lg-7 text-lg-right text-center text-color about-text">
                        <h1>How It Came To Be</h1>
                        <p class="text">
                            Being around people who are seemingly happy ALL of the time and who laugh too loud.
                            We just wanted to take them down a notch. We thought "What looks cute and can be seen as a nice gift but,
                            will lower the volume and the level of their happiness?"... cute, sad looking, potted plants. Everyone loves
                            plants and most people own one. So, by giving them the appetence of being sad, it will accomplish what we want.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="what-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 text-lg-right text-center text-color abouttwo-text">
                        <h1>What It's All About</h1>
                        <p class="text">
                        Deplantsed is a business that sells potted plants that appear to be sad.
                        <br/>They can be given to people who you deme a little too happy or just for someone's decor.
                        <br/>When someone looks at the face of these potted plants, they will have the same feeling as
                        seeing a puppy fall down a single stare.
                        <br/>That feeling of “awww :( ".
                        </p>
                    </div>
                    <div class="col-lg-5 text-center">
                        <img src="<?php $sql = "SELECT * FROM products WHERE product_id = '12';";
                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                        if ($resultCheck > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo $row['product_image'];
                                                }
                                            } ?>" width="300" height="150"
                        class="img-fluid wait-img">
                    </div>
                </div>
            </div>
        </div>

        <div id="how-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 text-center">
                        <img src="<?php $sql = "SELECT * FROM products WHERE product_id = '11';";
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
                        <h1>How It's Made</h1>
                        <p class="text">
                            Hand crafted terracotta/clay pots.
                            <br/>Put in a fire so hot, it becomes a solid object.
                            <br/>A face painted with black, blue, white, showing sadness.
                            <br/>Covered in a varnish that can reflect your tears back on to it.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
<?php
    require "footer.php";
?>

</html>