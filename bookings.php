<?php
    session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // SOMETHING WAS POSTED
        $date = $_POST['date'];
        $time = $_POST['time'];
        $service = $_POST['service'];
        
        $client_email = $_SESSION['email'];

        if (!empty($date) && !empty($time) && !empty($service)) {
            
            // save to database
            $query = "INSERT INTO appointments (client_email, date, time, service) VALUES ('$client_email', '$date', '$time', '$service')";

            mysqli_query($con, $query);

            header("Location: home.php");
            die;

        }else{

            echo "Please enter valid information";

        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Book Appointment</title>
    </head>
    <body>
        <div id="home">
            <div class="bg">
                <nav>
                    <div class="id">
                        <a href="home.php"><img src="Icons/hairdresser2.png" alt="Logo" id="logo"></a>

                        <a href="home.php">
                            <p id="brand">
                                The
                                <br>
                                Coiffeur
                            </p>
                        </a>
                        
                    </div>

                    <div class="navMenu">
                        <a href="home.php"><p class="rightMargin internal">Home</p></a>
                        <a href="contact.html"><p class="rightMargin internal">Contact</p></a>
                        <img src="Icons/notification2.svg" alt="Notifications" class="rightMargin">
                        <a href="logout.php">
                        <p class="singleLine internal">Log out</p></a>
                    </div>
                </nav>

                <div class="formSection">   
                    <div class="formsThird">
                        <div class="signupBg">
                            <p class="formTitle">
                                Book an appointment with us by filling the form below.
                            </p>
    
                            <!-- <br> <br> --> <br> <br>
                            <br> <br> <br> <br>
                            <br>
    
                            <div class="formArea">
                                <form class="bookingForm" action="" method="POST">
                                    <!-- <label for="name">Name</label>
                                    <br>
                                    <input type="text" id="name">
                                    <br>
                                    <label for="phone_number">Phone number</label>
                                    <br>
                                    <input type="text" id="phone_number">
                                    <br> -->
                                    <label for="date">Date</label>
                                    <br>
                                    <input type="date" id="date" name="date">
                                    <br>
                                    <label for="time">Time</label>
                                    <br>
                                    <input type="time" id="time" name="time">
                                    <br>
                                    <label for="service">Type of service</label>
                                    <br>
                                    <input type="text" id="service" name="service">
                                    <br>
                                    
                                    <button class="bookFormBtn">
                                        Book
                                        <br>
                                        Appointment
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="staff">
            <p class="staffIntro">Meet our hairdressers</p>

            <div class="images">
                <div class="firstRow imgRow">
                    <div class="staffImage firstStaff">
                        <p class="staffName">James Okioma</p>
                    </div>

                    <div class="staffImage secondStaff">
                        <p class="staffName">Yvonne Saidi</p>
                    </div>

                    <div class="staffImage thirdStaff">
                        <p class="staffName">Moses Kuria</p>
                    </div>

                </div>

                <div class="secondRow imgRow">
                    <div class="staffImage fourthStaff">
                        <p class="staffName">Diana Nashipae</p>
                    </div>

                    <div class="staffImage fifthStaff">
                        <p class="staffName">Osman Ali</p>
                    </div>

                    <div class="staffImage sixthStaff">
                        <p class="staffName">Grace Nderitu</p>
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