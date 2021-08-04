<!doctype html>
<html>
<head>
    <title>first document</title>

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
 nav  {
   font-size: 12px;  
 }
  h1.a{
    font-size: 20px;
    position: relative;
    padding: 0px;
    margin: 0px;
  }
  h1.text{
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
  button.a{
           position: relative;
           margin-bottom: 50px;
        }
}
        
        body {
          font-family: Arial, Helvetica, sans-serif;
        }
        
        header {
          background-color: #666;
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
          height: 500px; 
          background: #ccc;
          padding: 20px;
          background-image: url(bgsignup.jpg) ;
  background-size:cover;
  background-repeat: no-repeat;
        }
        img{
    width:50px;
    height: 45px;
    background-color: grey;
    border: solid;
    border-radius: 50px;
    margin-right: 4px;
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
          margin-left :300px;
        width: 200px;
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
            margin-top: 70px;
            text-align: center;
        }
        p.c{
            text-align: center;
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
            text-align: center;
            text-shadow: 2px 2px 5px white;
            text-transform: uppercase;
            position: relative;
            font-size: 45px;
        }
        button.a{
            padding: 10px;
            position: relative;;
            font-size: 18px;
            text-align: center;
            text-transform: uppercase;
            background-color: rgb(190, 190, 190);
  border-radius: 8px;
  border: 2px solid darkslategray;
        }
        
  a:link, a:visited {
  color: black;
  text-decoration: none;
  cursor: auto;
}
a:link:hover, a:visited:active {
  color: white;
}
    </style>
    <script>
    function closeWin() {
        myWindow.close();
      }
      </script>
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
      <li><a href="invoice.php"><img src="invoice icon.png" > invoice</a> </li>
      <li><a href="inventory.html"> <img src="inventory icon.png"></a>   inventory</li>
      <li><a href="reports.html"> <img src="report icon.png">   sales report</a></li>
      <li><a href="annual report.html"> <img src="report icon.png">  annual report</a></li>
          </nav ul>
    <article>
      
        <button value="LOG OUT" class="a" onclick="window.location.href='index.php'">log out</button>
        <br><h1 class="a">welcome! </h1>
    </article>
</body>
</html>