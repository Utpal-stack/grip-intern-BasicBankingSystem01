
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>customer</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'tempelate.php';?>
</head>
<body >
<!-- <div class="jumbotron jumbotron-fluid" style="background-color:#00a300"> -->

<div class="card" style=" width : 100%; height :300px;;">
<img src="image/customer.jpg" class="img-fluid" alt="Responsive image" style="width : 100%;  opacity: 1; height:100%;">
<div class="glow"><h1 style="font-size:60px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCUSTOMERS</h1></div>
  </div>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<a class="navbar-brand" href="#"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  <div class="navbar-nav">
  <a type="button" href="home.php" class="btn btn-warning" style="margin-left : 8px; ">Home</a>
  <a type="button" href="customer.php" class="btn btn-success" style="margin-left : 8px;   ">Customer</a>
  <a type="button" href="transfer.php" class="btn btn-danger" style="margin-left : 8px; ">Transfer Money</a>
  <a type="button" href="transaction.php"class="btn btn-info" style="margin-left : 8px; ">Transfer History</a>
  </div>
</div>
</nav>
<h1 style="text-align:center; margin-top: 30px;"> Customer Details</h1>


<?php include  'dbconn.php';
$query = "SELECT * FROM account";
$result  = mysqli_query($con, $query);
$row = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body >
<div class="container" style="margin-top : 2%;  margin-bottom : 2%; width : 100%;">
<table class="table table-striped table-hover ">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
      <?php  if($row >0){
          while($rows = mysqli_fetch_assoc($result)){
$id = $rows['id'];
$name = $rows['name'];
$email = $rows['email'];
$amount  = $rows['amount'];
          
    echo'<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$amount.'</td>
    </tr>';
      }
    }
      ?>

  </tbody>
</table>
</div>
</body>
</html>

<footer class="footer" style="background-color:#4d4d4d">
    <div class="footer-widget-section">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-4 footer-block">
                    <div class="footer-widget widget_text">
                        <div class="footer-logo">
                        <br><br><a href="#"><img src="image/logo.jpg" alt=""></a>
                        </div>
                        <br><p> Basic Bank</p>
                        <p>Made By:Utpal Kumar</p>
                        <p><a href="#">#gripSparksInten</a> Web Development & Designing Internship</p><br><br><br><br>
                    </div>
                </div>
                <div class="col-sm-4 footer-block">
                    <div class="footer-widget widget_text">
                    <br><br><br><br><h3>About Us</h3>

                        <p>This is a website for transferring money online safely</p><br><br><br><br>
                    </div>
                </div>
                <div class="col-sm-4 footer-block last">
                    <div class="footer-widget widget_text">
                        <br><br><br><br><h3>Contact Us Today</h3>
                        <address>
                            Call Us 959595-969696 OR 949494-989898<br>
                            Send an Email on <a href="mailto:#">contact@basicbank.com</a><br>
                            Visit Us 123 Fake Street- tola 12358<br>
                            India
                        </address>
                        <ul class="list-inline social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery-2.1.4.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/mobile-menu.js"></script>
<script src="js/flexSlider/jquery.flexslider-min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/scripts.js"></script>


</body>
</html>

<style>

.jumbotron{
    position: relative;
}   
.centered{

position : absolute;
top : 50%;
left : 40%;
}
.footer-widget{
    color: #dcdcdc;
    font-size: 13.5px;
}
</style>