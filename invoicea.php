<?php
include "connection.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $cname=$_POST['cname'];
    $address=$_POST['add'];
    $phnno=$_POST['phnno'];
    $email=$_POST['email'];
    $invno=$_POST['invno'];

    $query    = "INSERT into `customer` (cname, address,phone_no, email, invoice_no)
    VALUES ('$cname', '$address','$phnno', '$email', '$invno')";
    $result   = mysqli_query($conn, $query);
    if(!$result)
    {
        echo mysqli_error($php_errormsg);
    }
    else
    {
        echo "Records added successfully.";
    }
    $product=$_POST['product'];
    $price=intval( $_POST['price']);
    $quantity=intval($_POST['quantity']);
    $amount=intval($quantity*$price);
    $subtotal=intval($amount);

    foreach($html->find('table') as $table){  
        $tr_count = $table->find('tr'); // get the total <tr> tag count 
        $count = count($tr_count);}
    for ($a = 0; $a < ($count-4); $a++)
        {
            $product+=','.$_POST['product'][$a];
            $price+=','.intval($_POST['price'][$a]);
            $quantity+=','.intval($_POST['quantity'][$a]);
            $amount+=intval($quantity*$price));
            $subtotal+=intval($amount);
        }
    $discount=intval($_POST['disc']);
    $total=intval($subtotal+( $subtotal*$discount/100));

        $sql="INSERT INTO 'invoice' VALUES('$invno','DATE','$product','$price','$quantity','$amount','$subtotal,'$discount','$total'";
        $invoice=mysqli_query($conn,$sql);
    if(!$invoice)
        {
            echo "there is some error .";
        }
    else
        {
            echo "order submitted";
        }
}

mysqli_close($conn);

?>