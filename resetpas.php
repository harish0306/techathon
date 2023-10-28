<?php
include "./database.php";
    $email=$_POST["email"];
    $pas=$_POST["pass"];
    $sql="UPDATE acct SET Pass='$pas' WHERE acctemail='$email'";
    if( $con->query($sql)==TRUE){
        echo "updated successfully";
    }

?>