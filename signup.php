<?php
    session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // SOMETHING WAS POSTED
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $pass = $_POST['pass'];
        $confirm = $_POST['confirm'];

        if (!empty($name) && !empty($email) && !empty($phone_number) && !empty($pass) && $pass === $confirm && !is_numeric($name)) {
            
            // save to database
            $query = "INSERT INTO clients (name, email, phone_number, pass) VALUES ('$name', '$email', '$phone_number', '$pass')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;

        }else{

            echo "Please enter valid information: Make sure there is no phone_number in the name field and both passwords match";

        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Signup</title>
    </head>
    <body class="signupBody">
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
                        <p class="firstSelector" style="background-color: rgba(255, 255, 255, 1)">
                            Register
                        </p>
                    </a>

                    <a href="login.php">
                        <p class="secondSelector" style="background-color: rgba(255, 255, 255, .6)">
                            Log in
                        </p>
                    </a>
                </div>

                <div class="forms">
                    <div class="signupBg">
                        <p class="formTitle">
                            You can register with us to enjoy the wide
                            <br>
                            variety of services we offer.
                        </p>

                        <p class="formStatement">
                            To register, fill in the form below.
                        </p>

                        <br> <br> <br> <br>
                        <br> <br> <br> <br>
                        <br>

                        <div class="formArea">
                            <form class="signupForm" method="POST" action="">
                                <label for="name">Full Name</label>
                                <br>
                                <input type="text" id="name" name="name" required>
                                <br>
                                <label for="email">E-mail</label>
                                <br>
                                <input type="email" id="email" name="email" required>
                                <br>
                                <label for="phone_number">Phone number</label>
                                <br>
                                <input type="text" id="phone_number" name="phone_number" required>
                                <br>
                                <label for="pass">Password</label>
                                <br>
                                <input type="password" id="pass" name="pass" required>
                                <br>
                                <label for="confirm">Confirm Password</label>
                                <br>
                                <input type="password" id="confirm" name="confirm" required>
                                <br>
                                
                                <button class="signupFormBtn" name="regUser">Sign up</button>
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