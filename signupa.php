<?php
    include("connection.php");
    // When form submitted, insert values into the database.
    if((isset($_POST['signup']))
    {
            $fname    = $_POST['firstname'];
            $lname    = $_POST['lastname'];
            $email    =  $_POST['email'];
            $password    = $_POST['password'];
            $check_email  = mysqli_query($conn, "SELECT email FROM users WHERE Email='$email'");
            $query    = "INSERT into `users` VALUES ('$fname', '$lname', '$email','$password')";
            $result   = mysqli_query($conn, $query);
        if (empty($check_email))
        {
            if ($result)
            {
                echo( "<script>alert('your account is created');</script>");
                header('location:welcome.php');
            }
             else
            {
                echo "<h3>Required fields are missing.</h3><br/>";
            }
        }
        else
        {
            echo("Email already exists");
        }
    } 
?>
