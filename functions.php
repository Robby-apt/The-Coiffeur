<?php

function check_login($con){

    if (isset($_SESSION['email'])) {

        $email = $_SESSION['email'];
        $query = "SELECT * FROM clients WHERE email = '$email' limit 1";

        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    // redirect to login
    header("Location: login.php");
    die;

}



function book_appointment ($con){

    if (isset($_SESSION['email'])) {

        $email = $_SESSION['email'];
        $query = "SELECT * FROM appointments WHERE email = '$email' limit 1";

        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {

            $booking_data = mysqli_fetch_assoc($result);
            return $booking_data;

        }
    }

    // redirect to home
    header("Location: home.php");
    die;
    
}

?>