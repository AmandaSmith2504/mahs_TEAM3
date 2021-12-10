<?php
    session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
<link rel="stylesheet" href="main.css"> 
<script src="https://kit.fontawesome.com/7408800f57.js" crossorigin="anonymous"></script> 
<link href="https://fonts.googleapis.com/css2?family=Klee+One:wght@400;600&display=swap" rel="stylesheet"> 
    <title>Deplantsed</title>
  </head>
<body>

    <!--Nav Bar-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-black">
          <div class="container"> 
              <a href="index.php" class="navbar-brand"><h2><span><i class="fas fa-tree"></i></span> Deplantsed</h2></a> 
              <button class="navbar-toggler" data-toggle="collapse" 
                data-target="#navbarCollapse"> 
                <span class="navbar-toggler-icon"></span> 
              </button> 
        <div class="collapse navbar-collapse"id="navbarCollapse"> 
            <ul class="navbar-nav ml-auto"> 
                <li class="nav-item <?php if($page=='home'){echo 'active';}?>"> 
                    <a href="index.php" class="nav-link">Home</a> 
                </li> 
                <li class="nav-item <?php if($page=='product'){echo 'active';}?>"> 
                    <a href="product.php" class="nav-link">products</a> 
                </li> 
                <li class="nav-item <?php if($page=='about'){echo 'active';}?>"> 
                    <a href="about.php" class="nav-link">about</a> 
                </li> 
                <li class="nav-item <?php if($page=='cart'){echo 'active';}?>"> 
                    <a href="cart.php" class="nav-link">cart</a> 
                </li> 
                <li class="nav-item <?php if($page=='login'){echo 'active';}?>"> 
                    <a href="login.php" class="nav-link">login</a> 
                </li> 
                
            </ul> 
        </div>
    </nav>


</body>
</html>