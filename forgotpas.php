<?php
        include "./database.php";
        $email=$_POST["emailid"];
        $sql= "SELECT * FROM acct WHERE acctemail = '$email'";
        if( $con->query($sql)==TRUE){
            $resetLink = "./resetpassword.html";
            $to = $email;
            $subject = "Password Reset";
            $message = "Click this link to reset your password: $resetLink";
            if (mail($to, $subject, $message, $headers)) {
                echo "Reset email sent. Check your inbox.";
            } else {
                echo "Failed to send the reset email.";
            }
        }
        else{
            echo "incorrect mail or not registered yet to reset";
        }
?>