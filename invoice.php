
<!doctype html>
<html>
    <head>
        <title>invoice</title>
      
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        </script>
        <style>

@media only screen and (max-width: 620px)
 { article{
     height:fit-content;
 }
     h3.text{
         position: relative;
         font-size: 30px;
     }
     div.a{
         position: relative;
     }
     div.b{
         float: right;
     }
     a{
         color: orange;
     }
}


            .container {
        display: flex;
      }
            header {
          background-color: rgb(219, 110, 20);
          padding: 10px 30px;
          height: 100px;
          font-size: 35px;
        }
        
        article {
            background-image: url(bgsignup.jpg) ;
  background-size:cover;
  background-repeat: no-repeat; 
          padding: 20px;
          width:auto;
          background-color: rgb(241, 113, 8);
          height:auto; 
        }
        .text{
            position: relative;
            text-align: center;
            text-shadow:2px 2px honeydew;
        
        }
        div{
            float: left;
        }
        div.a{
            padding-left: 30%;
        }
        div.b{
            padding-left: 40%;
            margin-top: 3%;
        }
            .image{
                width: 100px;
                float: left;
                height: 100px;
                border: 2px solid;
                border-radius: 500px;
                
            }
            p.a{
                float: left;
                text-align: left;
                font-size: 15px;
                font-style: italic;
                text-decoration: underline;
            }
            .back{
            float: right; 
        text-align: right;
        font-style: italic;
        font-size: 20px;
        margin-top: 5%;
        
            }
            .form{
                padding: 2 px;
                margin-top: 8px;
                text-transform: uppercase;
            }
            th{
                text-align: center;
                font-weight: bold;
          background-color:rgb(163, 162, 162);
          border-color: black;
            }
            td{
                
          background-color:rgb(163, 162, 162);
          border-color: black;
            }
            
            table{
                margin-top: 15px;
                border-collapse: collapse;
                border: 2px solid;
                border-radius: 20px;
            }
            button.add{
                font-size: 40px;
                font-weight: bolder;
                background-color: rgb(219, 110, 20);
                width: 100px;
                border: 2px solid;
                border-radius: 4px;
                margin-top: 10px;
            }
            .submit,.print{
                padding: 10px;
                font-size: 20px;
                text-transform: uppercase;
                background-color: rgb(219, 110, 20);
                width: 100px;
                border: 2px solid;
                border-radius: 4px;
                margin-top: 4px;
                float: right;
            }
            button:hover{
                background-color:rgb(148, 146, 146); 
  color: white;
            }
            input[type=text ].a{
                background-color:rgb(163, 162, 162) ;
                width: 99%;
                border: none ;
            }
            input[type=text ].b{
                background-color: rgb(163, 162, 162);
                width:100%;
                padding: 2px;
                border:grey;
                border-radius: 8px;
                margin:2px;            }
            tfoot{
                border:none;
                text-align: right;
            }
            legend{
                font-size: 26px;
                font-weight: bold;
                text-transform: uppercase;
            }
            fieldset{
                border: 1px solid;
                border-radius: 8px;
            color: orange;
            }
            p{
                color: orange;
                font-weight: bold;
                font-size: 18px;
                margin-bottom: 10px;
            }
            #date{color: orange;
            display: block;}
            
        </style>

    </head>
    <body>
        <header>
            <div >
        <img  class="image" src="logo.jpg" alt="logo">
        </div>
        <div class="a">
        <h3 class="text">INVOICE</h3>
        </div>
        <div class="b">
            <p class="back"> <a href="welcome.php">back</a></p>
        </div>
        </header>
        <article>
            
            <p id="date" > </p>
            
            <form  action ="invoicea.php" method="post">
                <fieldset>
                    <legend>customer details</legend>
                <label class="form">Customer Name </label>
                <input type="text"  class="b" name="cname"><br>
                <label class="form" >Address    </label>
                <input type="text" class="b" name="add"><br>
                <label class="form">Phone number  </label>
                <input type="text" class="b" name="phnno"><br>
                <label class="form">E-mail        </label>
                <input type="text" class="b" name="email"><br>
                <label class="form">Invoice no    </label>
                <input type="text" class="b" name="invno"><br>
                </fieldset>
            
            <table width="100%" border="1px" id="main" border-radius="20px">
                <tr>
                    <th >
                        S.No.
                    </th>
                    <th  colspan="3">
                        Product Description
                    </th>
                    <th >
                        Price
                    </th>
                    <th >
                        Quantity
                    </th>
                    <th >
                        Amount
                    </th>
                </tr>
                <tbody>
                <tr>
                    <td name="sno" >1</td>
                    <td colspan=3 ><input type="text" name="product[]" class="a"></td>
                    <td ><input type="text" class="a" name="price[]"></td>
                    <td ><input type="text" class="a" name="quantity[]"></td>
                    <td ><input type="text" class="a" name="amount[]"></td>
                </tr>
                
                </tbody>
                <tfoot>
                    <tr >
                    <td colspan="6" class="b">Sub-Total</td>
                    <td class="b" ><input type="text" name="stotal" class="a"></td>
                    </tr>
                    <tr>
                        <td colspan="6"  class="b" >Discount</td>
                        <td class="b" ><input type="text" name="disc" class="a"></td>
                        </tr>    
                        <tr>
                            <td colspan="6" class="b">Total</td>
                            <td class="b"><input type="text" name="total" class="a"></td>
                            </tr>

                </tfoot>
            </table>
               
                <button class ="submit" name ="submit"  >Submit</button>
            </form>
            
            <button class="print" name="print" onclick="window.print()">Print</button>
            <button  class='add' name="add" >+</button>
                <script>{
                    let sno=2;
        $(document).ready(function () {
            $(".add").click(function () {
                
                markup = "<tr><td>"+sno+"</td>\ <td colspan=3><input type='text' class='a'></td> <td><input type='text' class='a'></td> <td><input type='text' class='a'></td> <td><input type='text' class='a'></td> </tr>";
                tableBody = $('#main > tbody:last ' );
                tableBody.append(markup);
                sno++;
            });
            
        }); }

  var today = new Date();
  var date = (today.getMonth()+1)+'-'+today.getDate()+'-'+today.getFullYear();
  document.getElementById("date").innerHTML="Date: "+date;

</script>
        </article>
        
    </body>
    </html>