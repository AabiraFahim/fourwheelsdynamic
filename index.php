<?php
  session_start();
?>
<!doctype html>
<html>
<head>
    <title>first document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container {
        display: flex;
      }
        * {
          box-sizing: border-box;
        }
        @media only screen and (max-width: 620px) {
  /* For mobile phones: */

  header,article,nav{
    width:auto;
    height:auto
  }
 nav {
   font-size: 12px;
 }
 
 
  h1.a{
          margin-left: 0px;
          font-size: 20px;
          position: relative;
        }
  h1.text{
    font-size: 20px;
    margin-top: 0px;
    margin-left: 0px;
    font-size: 45px;
  }
  img.image{
    margin-right: 0px;
    padding-right: 0px;
    margin-left: 0px;
  }
  div.text{
    padding: 0px;
    margin-left: 40px;
    margin-right: 0px;

  }
  div.image{
    margin-left: 0px;
    margin-right: 0px;
    padding-right: 0px;
    padding-left: 0px;
    padding:0px;
  }
}
        
        body {
          font-family: Arial, Helvetica, sans-serif;
        }
        
        header {
          background-color:rgb(71, 71, 71);
          padding: 30px;
          height: 200px;
          font-size: 35px;
          color: white;
        }
        .image{
          width: 150px;
          height: 150px;
          margin:2px 20px;
          border:2px grey;
          border-radius: 500px;}
        nav {
          float: left;
          width: 30%;
          height: 500px; background-image: url(bgsignup.jpg) ;
  background-size:cover;
  background-repeat: no-repeat;
          padding: 20px;
        }
        
        nav ul.a{
          padding: 1px;
        }

        li{
          padding: 4px;
          border: 2px solid;
          list-style-type: none;
          margin-bottom: 2px;
          border-radius: 8px;
          text-transform: uppercase;
          font-weight: bold;
          background-color: grey;
          text-align: justify;
        }
        
        article {
          float: left;
          padding: 20px;
          width: 70%;
          background-color: rgb(241, 113, 8);
          height: 500px; 
        }
        form.a{
          margin-top:20px ;
          margin-left :30px;
          width: 100%;
          text-align: center;
          padding: 20px;
          height:30px;
        }
        p.a{
        border:3px solid ;
        margin:20px 300px;
        width: 200px;
        text-align: center;
        padding: 5px;
        }
        p.b{
            margin-top: 150px;
            text-align: center;
            margin-left: 50px;
        }
        p.c{
          margin-top: 10px;
            text-align: center;
            margin-left: 50px;
        }
        a.x1:link, a.x1:visited {
          background-color:white;
          border:2px solid ;
          font-style: normal;
          font-weight: bold;
          color:black;
          margin:20px 340px;
          padding: 14px 25px;
          text-align: center;
          text-decoration: none;
          display:inline-block;
        }
        a.x1:hover ,a.x1:active{
            background-color: rgb(163, 163, 163);
            font-style: normal;
            font-weight: bold;
        }
        .text{
            
            text-align: centre;
            margin: 25px 100px ;
            text-shadow: 2px 2px 5px orange;
        }
        h1.a{
          position: relative;
          margin-bottom: 0px;
          text-decoration: underline;
          font-size: 26px;
          font-style: italic;
          text-align: center;

        }
        input[type=email]
           {padding: 10px;
            font-size: 16px;
  border-radius: 8px;
  box-sizing: border-box;
  background-color: rgb(190, 190, 190);
  border: 2px solid darkslategray;
  margin-top: 10px;

  width: 70%;
  }

  input[type=password]
           {padding: 10px;
            font-size: 16px;
  border-radius: 8px;
  background-color: rgb(190, 190, 190);
  border: 2px solid darkslategray;
  margin-top: 10px;

  width: 70%;
}

        input[type=submit]
           {padding: 8px;
  box-sizing: border-box;
  background-color: rgb(190, 190, 190);
  border-radius: 8px;
  border: 2px solid darkslategray;
  margin-top: 10px;
  font-size: 18px;
  font-weight: bold;
}

  img{
    width:50px;
    height: 45px;
    background-color: grey;
    border: solid;
    border-radius: 50px;
    margin-right: 4px;
  }
  
        </style>
</head>    
<body>
    <header>
        <div class="container">
            <div class="image">
                <img class="image" src="logo.jpg">
              </div>
            <div class="text">
                <h1 class="text">FOUR WHEELS</h1>
            </div>
          </div>
        
        
    </header>
    <nav ul class="a">
<li><img src="invoice icon.png" > invoice </li>
<li><img src="inventory icon.png">   inventory</li>
<li><img src="report icon.png">   sales report</li>
<li><img src="notification icon.png"> annual report </li>
    </nav ul>
<article>

<h1  class="a">LOG IN </h1>


<form class="a" method="post" action="logina.php" > 
  <input  type="email" id="demo" placeholder="Enter email" name="email" required>
  <br>
  <input type="password" id="demo1"  placeholder="Enter password" name="password" required>
  <br>
  <input type="submit" id="demo2" value="LOG IN" name="login" > 
</form>

<p class="b" id="demo"><a href="reset.php"> forgot password?</a></p>
<p class="c" id="demo">donot have an account?? <a href=signup1.php>sign up</a></p>
</article>
</body>    
</html>