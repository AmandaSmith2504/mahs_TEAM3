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
        <form class="login-form" action="includes/login.inc.php" method="POST">
            <div class="login-form__logo-container">
                <img class="login-form__logo" src="https://target.scene7.com/is/image/Target/GUEST_f375ca15-dace-4722-8ce9-a0f68cc283bf?wid=488&hei=488&fmt=pjpeg" alt="Logo">
            </div>
            <div class="login-form__content">
                <div class="login-form__header"><h1>Login</h1></div>
                <input class="login-form__input" type="text" name="uid" placeholder="Username">
               
                <input class="login-form__input" type="password" name="pwd" placeholder="Password">
                <button class="login-form__button" type="submit" name="login-submit">Login</button>
                <form>
                    <input href="signup.php" class="login-form__button2" type="button" value="Signup" 
                    onclick="window.location.href= 'https://datadev.devcatalyst.com/~mahs_TEAM3/signup.php'" />
                </form>


            </div>
    </body>

    <main>
        <div class="login-form__em">
            <section>
                <?php
                    if(isset($_GET['error'])){
                        if($_GET['error'] == "emptyfields"){
                            echo '<p class="signuperror">Fill in all fields!</p>';
                        }

                        elseif($_GET['error'] == "invalidmailuid"){
                            echo '<p class="signuperror">Invalid username and e-mail!</p>';
                        }

                        elseif($_GET['error'] == "invaliduid"){
                            echo '<p class="signuperror">Invalid username!</p>';
                        }

                        elseif($_GET['error'] == "invalidmail"){
                            echo '<p class="signuperror">Invalid e-mail!</p>';
                        }

                        elseif($_GET['error'] == "passwordcheck"){
                            echo '<p class="signuperror">Your passwords do not match!</p>';
                        }

                        elseif($_GET['error'] == "usertaken"){
                            echo '<p class="signuperror">Username is already taken!</p>';
                        }
                    
                       else if($_GET['signup'] == "success"){
                        echo '<p class="signupsuccess">Signup successfull!</p>';
                    }
                }
                ?>

            </section>
           
        </div>
    </main>
  
</html>

<?php
    require "footer.php";
?>