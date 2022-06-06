<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');


*{
  font-family: 'Poppins', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  outline: none;
  border:none;
  text-decoration: none;
  text-transform: capitalize;
  transition: .2s linear;
}

.container{
    padding-top: 100px;
    margin: 0 auto;
    position: relative;
}

.subcontainer{
    text-align: center;
    padding-top: 50px;
    color: black;
    
}
table{
    width: 100%;
    padding:20px;
  }
  th{
      background-color:#61788c;
      color: black;
      font-size: 15px;
      padding:10px;
      text-transform:uppercase;
      font-family: 'Poppins', sans-serif ;
  }
 td{
 background-color: #a8b5bf;
 text-align: center;
 font-family: 'Poppins', sans-serif ;
 padding:6px;
 color:black;
 font-size:20px;
 
 }
    </style>
</head>
<body>
<div class="container">
    <div class="subcontainer">


<table>
  <tr>
    <th>item no</th>
    <th>item name</th>
    <th>chassy no</th>
    <th>brand</th>
    <th>price</th>
    <th>genuinecompatible</th>
    <th>type</th>
    <th>description</th>
    <th>amount</th>
    <th>color</th>
    <th>size</th>
  </tr>
  <?php

$servername="localhost";
$username="root";
$password="";
$dbname="test";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection Failed" .$conn->connect_error);
}

$records = mysqli_query($conn,"SELECT itemno,itemname,chassyno,brand,price,genuinecompatible,type,description,amount,color,size FROM item"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    
    <td><?php echo $data['itemno']; ?></td>
    <td><?php echo $data['itemname']; ?></td>
    <td><?php echo $data['chassyno']; ?></td>
    <td><?php echo $data['brand']; ?></td>
    <td><?php echo $data['price']; ?></td>
    <td><?php echo $data['genuinecompatible']; ?></td>
    <td><?php echo $data['type']; ?></td>
    <td><?php echo $data['description']; ?></td>
    <td><?php echo $data['amount']; ?></td>
    <td>.<?php echo $data['color']; ?></td>
    <td>.<?php echo $data['size']; ?></td>

  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($conn); // Close connection ?>
</div>
</div>
</body>
</html>