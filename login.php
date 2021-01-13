<?php

session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // SOMETHING WAS POSTED
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if (!empty($email) && !empty($pass)) {
            
            // read from database
            $query = "SELECT * FROM clients WHERE email = '$email' limit 1";

            $result = mysqli_query($con, $query);

            if ($result) {

                if ($result && mysqli_num_rows($result) > 0) {
                    
                    $user_data = mysqli_fetch_assoc($result);
                    
                    if ($user_data['pass'] === $pass) {

                        $_SESSION['email'] = $user_data['email'];
                        header("Location: home.php");
                        die;
                    }
                    
                }

            }

            echo "Wrong username or password";

        }else{

            echo "Wrong username or password";

        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Log in</title>
    </head>
    <body class="loginBody">
        <div class="bg">
            <nav>
                <div class="visual">
                    <a href="index.html">
                        <img src="Icons/hairdresser2.png" alt="Logo" id="logo">
                    </a>

                    <a href="index.html">
                        <p id="brand">
                            The
                            <br>
                            Coiffeur
                        </p>
                    </a>
                </div>
    
                <div class="navMenuSecond">
                    <a href="index.html"><p class="rightMargin">Home</p></a>
                    <a href="index.html#contact"><p>Contact</p></a>
                </div>
            </nav>

            <div class="formSection">
                <div class="formSelection">
                    <a href="signup.php">
                        <p class="firstSelector" style="background-color: rgba(255, 255, 255, .6)">
                            Register
                        </p>
                    </a>

                    <a href="login.php">
                        <p class="secondSelector" style="background-color: rgba(255, 255, 255, 1)">
                            Log in
                        </p>
                    </a>
                </div>

                <div class="formsAlt">
                    <div class="loginBg">
                        
                        <br> <br> <br> <br>
                        <br>

                        <div class="formArea">
                            <form class="loginForm" action="" method="POST">
                                <label for="email">E-mail</label>
                                <br>
                                <input type="email" id="email" name="email" required>
                                <br>
                                <label for="pass">Password</label>
                                <br>
                                <input type="password" id="pass" name="pass" required>

                                <button class="signupFormBtn" name="login">Log in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="membershipFooter">
                <p>
                    Designed by <a>Robin</a> &#169 2020 - All rights reserved
                </p>
            </footer>
        </div>
    </body>
</html>