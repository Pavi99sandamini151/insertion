<?php
$server     = "localhost";
$Username = "root";
$Password = "";
$Name     = "test";

// Create database connection
$conn = new mysqli($server, $Username, $Password, $Name);

if(isset($_POST['submit'])){
    if(!empty($_POST['itemno']) && !empty($_POST['itemname']) && !empty($_POST['chassyno']) && 
    !empty($_POST['brand']) && !empty($_POST['price']) && !empty($_POST['genuinecompatible']) && 
    !empty($_POST['type']) && !empty($_POST['description']) && !empty($_POST['amount']) && 
    !empty($_POST['color']) && !empty($_POST['size'])  ){
        $itemno = $_POST['itemno'];
        $itemname = $_POST['itemname'];
        $chassyno = $_POST['chassyno'];
        $brand = $_POST['brand'];
        $price = $_POST['price'];
        $genuinecompatible = $_POST['genuinecompatible'];
        $type = $_POST['type'];
        $description = $_POST['description'];
        $amount = $_POST['amount'];
        $color = $_POST['color'];
        $size = $_POST['size'];



        $query = "insert into item (itemno,itemname,chassyno,brand,price,genuinecompatible,type,description,amount,color,size)
         values ('$itemno','$itemname','$chassyno','$brand','$price','$genuinecompatible','$type','$description','$amount','$color','$size')";

         $run = mysqli_query($conn , $query) or die(mysqli_error($conn));

         if($conn)
         {
             echo "form submitted successfully";
         }
         else
         {
             echo "form not submitted";
         }
    }
    else{
        echo "all fields required ";
    }
}
?>