<!doctype html>
<head><title>reset</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    @media only screen and (max-width: 620px) {
   input[type=email]
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
  text-transform:capitalize ;
}
input[type=email]{
  padding: 10px;
  width: 90%;
  color: white;
  text-align: center;
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
<form action="reseta.php" method="post">
  <fieldset>
    <legend>reset password</legend>
    <input type="email" placeholder=" Enter email" name="email" required><br>
  </fieldset>
  <input type="submit" value="ENTER" name="enter"> 
</form>
</body>
</html>