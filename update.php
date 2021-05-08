<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<?php 

include "dbconn.php";
if(isset($_GET['transact'])){
$id_received = $_GET['customer'];
$sender = $_GET['sender_id'];
$amount = $_GET['amount'];

//

$check_money = "SELECT * from account where id=$sender";
$result_check = mysqli_query($con,$check_money);
$row_check =  mysqli_num_rows($result_check);
if($row_check > 0){
    

$fetch_money = mysqli_fetch_assoc($result_check);
$sender_money = $fetch_money['amount'];

}
if($sender_money >= $amount){

$update_query1 = "UPDATE account set amount=(amount-'$amount') where id='$sender'";
$result = mysqli_query($con,$update_query1);

//
$update_query2 = "UPDATE account set amount=(amount+'$amount') where id='$id_received'";
$result = mysqli_query($con,$update_query2);


$select_sender = "select name from account where id='$sender'";
$result3 = mysqli_query($con,$select_sender);
if(mysqli_num_rows($result3)>0){
$fetch = mysqli_fetch_assoc($result3);
$sender_name = $fetch['name'];

}

$select_receiver = "select name from account where id='$id_received'";
$result4 = mysqli_query($con,$select_receiver);
if(mysqli_num_rows($result4)>0){
$fetch2 = mysqli_fetch_assoc($result4);
$receiver_name = $fetch2['name'];

}


$insert_query1 = "INSERT INTO transactionhistory (sender_id,sender,amount,receiver,receiver_id) values('$sender','$sender_name','$amount','$receiver_name','$id_received')";
$result2 = mysqli_query($con,$insert_query1);
?>
<div class="alert alert-success" role="alert" style="background-color:#009900">
  <strong style="color:#fff">successfully Tranfered!! Thanks for visiting in Basic bank !!!</strong>
  <a type="button"  href="transfer.php" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </a>
</div>
<?php
//header('location:transfer.php');
}
else{
   
   
   // header('location:transfer.php');
?>
         <div class="alert alert-danger" role="alert" style="background-color:#ff0000">
            <strong style="color:#fff">not enough balance in your account !! Thanks for visiting Basic bank !!!</strong>
            <a type="button"  href="transfer.php" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </a>
         </div> 
           
          <?php
          
}
// echo $id_received;
// echo $sender;
// echo $sender_name;
// echo $receiver_name;

// echo $sender;

// echo $id_received;
// echo $amount;
}


?>