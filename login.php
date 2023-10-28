<?php
    include "./database.php";
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $sql= "SELECT * FROM acct WHERE acctemail = '$email' AND Pass = '$pass'";
    $result = $con->query($sql);

    if ($result == TRUE) {
        echo "Login successful!";
        // You can perform additional actions here, such as setting session variables for the user.
    } else {
        echo " 'Incorrect email or password' or 'Not created an account yet !!!!' ";
    }
?>
