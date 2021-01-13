<?php
    session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Home</title>
    </head>
    <body class="dashBody">
        <div class="bgAlt">
            <nav>
                <div class="visual">
                    <a href="home.php">
                        <img src="Icons/hairdresser2.png" alt="Logo" id="logo">
                    </a>

                    <a href="home.php">
                        <p id="brand">
                            The
                            <br>
                            Coiffeur
                        </p>
                    </a>
                </div>
    
                <div class="navMenuSecond">
                    <a href="bookings.php">
                        <p class="rightMargin">
                            Book
                            <br>
                            Appointments
                        </p>
                    </a>

                    <a href="contact.html">
                        <p class="rightMargin singleLine">
                            Contact
                        </p>
                    </a>

                    <img src="Icons/notification2.svg" alt="Notifications" class="icon notify rightMargin">

                    <a href="logout.php">
                        <p class="singleLine internal">
                            Log out
                        </p>
                    </a>

                </div>
            </nav>

            <div class="mainContent">
                <p style="margin: 0;">
                    Welcome, <?php echo $user_data['name']; ?>
                    <br> <br>
                    Due to the Covid-19 pandemic, we have put in place measures
                    <br>
                    to ensure the safety of both you, our client and our staff.
                    <br>
                    The measures include:
                </p>

                <ul class="regulations">
                    <li>
                        Mandating our staff to wear masks and or face shields.
                    </li>

                    <li>
                        UV sterilization of our equipment.
                    </li>

                    <li>
                        Reducing the number of clients being served to half 
                        <br>
                        capacity to reduce risk of transmission.
                    </li>

                    <li>
                        Offering more cashless payment options like using card
                        <br>
                        and mobile money.
                    </li>

                    <li>
                        We ask that you, our client, wear face masks while
                        <br>
                        entering the establishment.
                    </li>

                </ul>

                <p class="eyeCatch">
                    Your safety comes first
                </p>

                <p>
                    Book an appointment with us to
                    <br>
                    enjoy the services we offer.
                </p>

                <a href="bookings.php">
                    <p class="actionBtn">
                        Book
                        <br>
                        Appointment
                    </p>
                </a>
                
            </div>
            <footer class="membershipFooter">
                <p>
                    Designed by <a>Robin</a> &#169 2020 - All rights reserved
                </p>
            </footer>
        </div>
    </body>
</html>