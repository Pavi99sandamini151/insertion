<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Insert Item form</h2>
  <form class="form-horizontal" action="formconnect.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="itemno">itemno:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="itemno" placeholder="Enter itemno" name="itemno">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="itemname">itemname:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="itemname" placeholder="Enter itemname" name="itemname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="chassyno">chassyno:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="chassyno" placeholder="Enter chassyno" name="chassyno">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="brand">brand:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="brand" placeholder="Enter brand" name="brand">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="price">price:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="genuinecompatible">genuinecompatible:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="genuinecompatible" placeholder="Enter genuinecompatible" name="genuinecompatible">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="type">type:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="type" placeholder="Enter type" name="type">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="description">description:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="amount">amount:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="amount" placeholder="Enter amount" name="amount">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="color">color:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="color" placeholder="Enter color" name="color">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="size">size:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="size" placeholder="Enter size" name="size">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" id="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
<?php

 include_once 'displayform.php';
?>
</body>
</html>