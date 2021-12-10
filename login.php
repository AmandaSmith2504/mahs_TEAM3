<?php
    $page= 'login';
    require "header.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=divice-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class= "login-form login-form__logo-container login-form__logo login-form__content login-form__headerlogin-form__inputlogin-form__button login-form__button2">
    <?php
     if (isset($_SESSION['userId'])) {
         echo ' <form action="includes/logout.inc.php" method="post">
         <button type="submit" name="logout-submit">Logout</button>
     </form>';
    }
    else {
        echo '<form action="includes/login.inc.php" method="post">
        <input type="text" name="mailuid" placebholder="Username/E-mail..">
        <input type="password" name="pwd" placeholder="Password..">
        <button type="submit" name="login-submit">Login</button>
        </form>
        <a href="signup.php">Signup</a>';
    }


    ?>

            </div>
    </body>

    <main>
        <div class="login-form__em">
            <section>


            </section>
           
        </div>
    </main>
  
</html>

<?php
    require "footer.php";
?>