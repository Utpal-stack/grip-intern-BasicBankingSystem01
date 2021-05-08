<?php
include "dbconn.php";
$id = $_GET['id'];
//$email2 = $_GET['email2'];
$sender_query = "select * from account where id='$id'";
$result  =  mysqli_query($con,$sender_query);
$row = mysqli_num_rows($result);
if($row > 0){
while($fetch = mysqli_fetch_assoc($result)){
$name  = $fetch['name'];
$email = $fetch['email'];
$amount = $fetch['amount'];

}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body style="background-color: #ffffb3;">

<img class="bg"src="image/bg.jpg"alt="...">
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
<div class="container"style="margin-top: 30px;background-color:lightgreen;border-width: 5px;border-style: inset;">
<h1 style="text-align:center">Sender's Details</h1>
<table class="table">
    <thead class="thead-light">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Balance</th>
      </tr>
    </thead>
    <tbody>
  
      <tr>
        <td><?php echo $name ?></td>
        <td><?php echo $email ?> </td>
        <td><?php echo $amount ?></td>
      </tr>
    </tbody>
  </table>
  </div>
<div class="container " style="width:50%; margin-top: 30px; padding: 30px; background-color: lightgray;  border-radius: 20px;border-style: outset;border-width: 20px;border-style: ridge;">

   <form action="update.php" type= "GET">

   <h1 style="text-align:center">Transfer From</h1>
    <input type="text" name="sender_id" class="form-control" placeholder="sender Id" value="<?php echo $id ?>">
    <h1 style="text-align:center">Transfer to...</h1>
    <select name="customer" class="custom-select mb-3">
   <?php
     $query = "SELECT * from account";
      $run = mysqli_query($con,$query);
      $row = mysqli_num_rows($run);
      if($row > 0){
       echo  '<option selected>Select customer to transfer amount</option>';
        while($fetch = mysqli_fetch_assoc($run)){
          $name = $fetch['name'];
          $id2  = $fetch['id']; 
      echo '
      <option value="'.$id2.'">'.$id2.'-'.$name.'</option>';
    }
  }
    ?>
     </select>
    <h1 style="text-align:center">Amount</h1>
    <div class="input-group mb-3">
    <input type="text" name="amount" class="form-control" placeholder="Amount">
    <div class="input-group-append" >
      <span class="input-group-text"style="color:red;border-style: outset;">In Rupees</span>
    </div>
  </div>
  <button type="submit" name="transact" class="btn btn-success"style="margin-top: 15px">Transfer</button>
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