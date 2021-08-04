
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => login
        $conn = mysqli_connect("localhost", "root", "", "login");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        
        else{
            echo "ERROR: " 
                . mysqli_error($conn);
        }
     