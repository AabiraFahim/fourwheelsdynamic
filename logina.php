<?php
session_start();
if(isset($_POST['login']))
{
    extract($_POST);
    include 'connection.php';
    $sql=mysqli_query($conn,"SELECT * FROM users where Email='$email' and Password_='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["Email"]==$row['Email'];
        $_SESSION["First_Name"]==$row['First_Name'];
        $_SESSION["Last_Name"]==$row['Last_Name']; 
        header('location:welcome.php');
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>