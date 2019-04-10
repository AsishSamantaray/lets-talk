<?php
    include 'db.php';
     
    // Check if form submitted.. 
    if(isset($_POST['submit'])) {
        // Check any harmfull html code added..
        $user = mysqli_real_escape_string($con, $_POST['user']);  
        $message = mysqli_real_escape_string($con, $_POST['message']);
        

        // Set time
        date_default_timezone_set('Asia/Kolkata');
        $time = date('h:i:s a', time());

        // Validate..
        if(!isset($user) || empty($user) || empty($message) || !isset($message)) {
            $error = "Please Fill in your name and message..";
            header("Location: index.php?error=".$error);
            exit();
        }
        else {
            $query = "INSERT INTO talks (user,message, time) VALUES('$user', '$message', '$time')" ;
            if(mysqli_query($con, $query)) {
                header("Location: index.php");
                exit();
            }            
            else {
                die("Error: ".mysqli_error());
            }
        }
    }
?>