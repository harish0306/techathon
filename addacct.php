
<?php
    include "./database.php";
    $name=$_POST["Name"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $sql="INSERT INTO acct(acctname,acctemail,Pass) VALUES('$name','$email','$pass')";
    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
        echo "<a href='./login.html'>login</a>";
    }
?>