
<!doctype html>
<html>
<head><title>signup</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
      @media only screen and (max-width: 620px) {
      input[type=password],input[type=email],input[type=text]
      {
        width: 80%;
      }
    }
  .container {
        display: flex;
      }
body{
  background-image: url(bgsignup.jpg) ;
  background-size:cover;
  background-repeat: no-repeat;
}
fieldset{
  margin-top: 10%;
  margin-left: 20%;
  margin-right: 20%;
  position:relative;
  align-items:center;
  border: 2px solid;
  border-radius: 8px;
  background-color: rgb(241, 113, 8);
  color: grey;
}
legend{
  font-size: 20px;
  font-weight: bold;
  color: white;
  text-shadow: 2px 2px black;
}
input[type=email]{
  padding: 10px;
  color: white;
  text-align: center;
  margin-top:2%;
  margin-left: 2% ;
  margin-right: 1%;
  width:90%;
  background-color: rgb(151, 148, 148);
  border-radius: 8px;
  
}
input[type=password],input[type=text]{
  padding: 10px;
  color: white;
  text-align: center;
  width:90%;
  margin-top:2%;
  margin-left: 2% ;
  margin-right: 1%;
  border-radius: 8px;
  background-color: rgb(148, 146, 146);
}
input[type=submit]{
  padding:10px;
  font-size: 16px;
  font-weight: bold;
  margin-top: 2%;
  margin-left: 45%;
  border-radius: 8px;
  background-color:rgb(241, 113, 8) ;
  
}
input[type=submit]:hover {
  background-color:rgb(148, 146, 146); 
  color: white;
}
</style>

</head>
<body>
  
<form action="signupa.php" method="POST">
  <fieldset>
    <legend>SIGN UP</legend>
    <input type="text" name="firstname" placeholder="Enter first name" required><br>
    <input type="text" name="lastname" placeholder="Enter lasst name" required><br>
    <input type="email" name="email" id="name" placeholder="Enter email" required>
    <br>
    <input type="password" name="password" id="password" placeholder="Enter password" required><br>
  </fieldset>
  <input type=submit name="signup" value="Sign Up">
</form>

</body>
</html>