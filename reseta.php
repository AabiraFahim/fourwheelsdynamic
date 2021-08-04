<?php
include('connection.php');
if (isset($_POST['enter'])) 
{
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  // ensure that the user exists on our system
  $query = "SELECT email FROM users WHERE Email='$email'";
  $password=mysqli_query($conn,"SELECT Password_ FROM users WHERE Email='$email'");
  $results = mysqli_query($conn, $query);
  if (empty($email))
  {
    echo( "email is required");
  }
  else if(mysqli_num_rows($results) <= 0)
  {
    echo("Sorry, no user exists  with this email");
  }
  else
  {
    $to = $email;
    $subject = "Password";
    $msg = "your password is " .mysqli_fetch_array( $password) . " .You can enter it to log in. ";
    $headers = "From: aabira20jul@gmail.com";
    mail($to, $subject, $msg, $headers);
    echo("email has been sent");
    header('location:index.php');
}
}

?>