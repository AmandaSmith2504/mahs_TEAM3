<?php
    require "header.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" href="signup.css">
    </head>
    <body>
        <form class="signup-form" action="includes/signup.inc.php" method="POST">
            <div class="signup-form__logo-container">
                <img class="signup-form__logo" src="https://target.scene7.com/is/image/Target/GUEST_f375ca15-dace-4722-8ce9-a0f68cc283bf?wid=488&hei=488&fmt=pjpeg" alt="Logo">
            </div>
            <div class="signup-form__content">
                <div class="signup-form__header"><h1>Signup</h1></div>
                <input class="signup-form__input" type="text" name="uid" placeholder="Username">

                <input class="signup-form__input" type="text" name="fname" placeholder="First Name">
                <input class="signup-form__input" type="text" name="lname" placeholder="Last Name">

                <select class="signup-form__input" name="gen">
                    <option value="">Gender Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                    
                <input class="signup-form__input" type="date" name="bdate" placeholder="Birthday mm/dd/yyyy">
                <input class="signup-form__input" type="num" name="phonenum" placeholder="Phone Number (###)###-####">

                <input class="signup-form__input" type="text" name="mail" placeholder="E-mail">
                <input class="signup-form__input" type="text" name="addrs" placeholder="Address">
                <input class="signup-form__input" type="password" name="pwd" placeholder="Password">
                <input class="signup-form__input" type="password" name="pwd-repeat" placeholder="Repeat password">
                <button class="signup-form__button" type="submit" name="signup-submit">Signup</button>
            </div>
    </body>

    <main>
        <div class="signup-form__em">
            <section>
                <?php
                    if(isset($_GET['error'])){
                        if($_GET['error'] == "emptyfields"){
                            echo '<p class= "signuperror">Fill in all fields!</p>';
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

                        elseif($_GET['error'] == "invalidbirthdate"){
                            echo '<p class="signuperror">Invalid birthday!</p>';
                        }
                        elseif($_GET['error'] == "invalidphone"){
                            echo '<p class="signuperror">Invalid phone number!</p>';
                        }
                    
                    elseif($_GET['signup'] == "success"){
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