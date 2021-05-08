<?php

include "dbconn.php";

if(isset($_POST['submit'])){
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $amount = $_POST['amount'];  
  if($id != null){ 

  $insert = "INSERT INTO `account` (`id`, `name`, `email`, `amount`) VALUES ('$id','$name', '$email', '$amount')";

  $execute = mysqli_query($con,$insert);
  
  if($execute){
      ?>
        <div class="alert alert-success" role="alert" style="background-color:#00e600">
          <strong style="color:#fff">successfully account created!! Thanks for creating your account in Basic bank !!!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php
  }
  else{
      ?>
          <div class="alert alert-danger" role="alert" style="background-color:#ff0000">
            <strong style="color:#fff">failed to create your account !! ID should be unique !!!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
      <?php
  }
}
}else{
  ?>
  <script>
 // alert('FAILED');
  </script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Add customer</title>
   <img class="bg"src="image/bg.jpg"alt="...">
</head>
<body style="background-color: #ffffb3;">



<nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="nav">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar" style="justify-self : right;">
    <ul class="navbar-nav">
      <li class="nav-item">
      <div class="btn-group">
      <a type="button" href="home.php" class="btn btn-warning" style="margin-left : 8px; ">Home</a>
  <a type="button" href="customer.php" class="btn btn-success" style="margin-left : 8px;   ">Customer</a>
  <a type="button" href="transfer.php" class="btn btn-danger" style="margin-left : 8px; ">Transfer Money</a>
  <a type="button" href="transaction.php"class="btn btn-info" style="margin-left : 8px; ">Transfer History</a>
</div>
    </ul>
  </div>  
</nav>

<h1 style="text-align:center; margin-top: 80px; font-size:56px; font-family:cursive;"> Add Customer </h1>
<div class="container " style="width:50%;  padding: 30px; background-color: lightgray;  border-radius: 20px;border-style: outset;border-width: 20px;border-style: ridge;">

   <form action="addcustomer.php" method="POST">
   <img src="image/profile.png" class="rounded" alt="Cinque Terre" style="align: center; width: 100px;height: 100px;">
   <div class="input-group mb-3" style="margin-top:2%;">
    <input type="number" class="form-control" placeholder="id" name="id" required>
    <div class="input-group-append" >
      <span class="input-group-text"style="color:red;border-style: outset;" >ID</span>
    </div>
  </div>
   <div class="input-group mb-3" style="margin-top:2%;">
    <input type="text" class="form-control" placeholder="name" name="name" required >
    <div class="input-group-append" >
      <span class="input-group-text"style="color:red;border-style: outset;">name</span>
    </div>
  </div>
  <div class="input-group mb-3" style="margin-top:2%;">
    <input type="email" class="form-control" placeholder="email" name="email" required>
    <div class="input-group-append" >
      <span class="input-group-text"style="color:red;border-style: outset;">@gmail.com</span>
    </div>
  </div>
  <div class="input-group mb-3" style="margin-top:2%;">
    <input type="number" class="form-control" placeholder="Amount" name="amount" required>
    <div class="input-group-append" >
      <span class="input-group-text"style="color:red;border-style: outset;">Amount</span>
    </div>
  </div>
   
  <button type="submit" name="submit" class="btn btn-success"style="margin-top: 15px">ADD User</button>
  </form>
</div>

</body>
</html>
<style>
.bg{
    width:100%;
    position:absolute;
    z-index:-1;
    opacity: 0.5;
}
</style>