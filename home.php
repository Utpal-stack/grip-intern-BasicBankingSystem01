<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php include 'tempelate.php';?>
</head>
<body>

<!-- <div class="jumbotron jumbotron-fluid"> -->
<div class="card" style=" width : 100%; height :300px;">
<div class="container-relative" style="width : 100%; height : 100%;">
<!--<img src="bank.jpg"alt="home" style=" width : 100%; height : 100%;"> 
<img src="economy.png" class="img-fluid" alt="Responsive image" style="width : 100%;  opacity: 0.6; height:100%;">-->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/plan.jpg" alt="plan" style="width : 100%;  opacity: 0.7; height:100%;">
    </div>
    <div class="carousel-item">
      <img src="image/saving.jpg" alt="bank"style="width : 100%;  opacity: 0.7; height:100%;">
    </div>
    <div class="carousel-item">
      <img src="image/Indian_Economy.png" alt="economy"style="width : 100%;  opacity: 0.6; height:100%;">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<div class="glow"><h1 style=" font-size: 65px;">Welcome to Basic Bank</h1></div>

    <!-- <h1 class="display-4">Fluid jumbotron</h1> -->
</div>
</div>
  </div>

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
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2 style=" font-family:Arial Rounded MT Bold;  font-weight: bold">Credit card</h2>
      <div class="fakeimg">
      <img src="image/credit.jpg" alt="..." class="img"style="width : 100%; height : 100%;">
      </div>
      <p style=" font-family:Arial Rounded MT Bold;  font-size: 20px;"><br>A credit card is a convenient financial product that can be used for everyday 
         purchases and can also be a great resource for purchasing big-ticket items.
	       <br> Beyound convenience, credit cards have so many advantages includes-</p>
         <ul>
	            <li>Opportunity to build credit </li>
	            <li> Earn rewards such as cashBack/ mile points</li>
	            <li> Free credit score information</li>
              <li>Minimum foreign transaction fees</li>
              <li> Increase purchasing power.</li>
  
        </ul>
      <h3 style="color:red;">Some important Links</h3>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="addcustomer.php">Create new account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"style="font-family:Arial; font: size 8px;" href="#">Apply for credit / debit card</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-family:Arial; font: size 8px;"href="#">complete your KYC</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " style="font-family:Arial; font: size 8px;"href="#">start mobile manking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " style="font-family:Arial; font: size 8px;"href="#">Donations to PM CARES</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2 style=" font-family:Arial Rounded MT Bold;  font-weight: bold">Bank of hope: Community...Your Bank</h2>
      <div class="fakeimg">
      <img src="image/india.png" class="img-fluid" alt="Responsive image" style="height : 100%;">
      </div>
      <p  style=" font-family:Arial Rounded MT Bold;  font-size: 20px;">

               Basic Bank has expanded its presence across India with a network of 10920 branches,
               13914 ATMs and 40531 Business correspondents as at the end of 31st December 2020.
               Basic bank is 13th largest bank Public Sector Bank in the country with Global Business at Rs.10,809,587 crore.</p>
               <p  style=" font-family:Arial Rounded MT Bold;  font-size: 20px;">
               The bank continues to maintain its forte in low cost CASA deposits with a share of 44.66%. 
               Bank's focus has been on qualitative business growth, loans, recovery and arresting slippages</p>
      <br>
      <h2 style=" font-family:Arial Rounded MT Bold;  font-weight: bold">Mobile Banking</h2>
     <!-- <h5>Title description, Sep 2, 2017</h5> -->
      <div class="fakeimg">
      <img src="image/poster.jpg" class="img-fluid" alt="Responsive image" style="width : 100%; height : 100%;">
      </div>
      <p style=" font-family:Arial Rounded MT Bold;  font-size: 20px;">We need banking but we don't need banks anymore
        Do you think someday we can open bank account or as for 
        loan without any physically have to come to bank?</p>
      <p style=" font-family:Arial Rounded MT Bold;  font-size: 20px;">	Mobile banking allows customers to be able to access 
          banking services from anywhere Businesses and businesses owner is now able to 
          save time by making use of our mobile applicaton for payment. So start mobile 
          banking in your phone and make in a <b>"DIGITAL INDIA".</b> </p>
     <p style=" font-family:Arial Rounded MT Bold;  font-size: 20px;"> Mobile banking system are becoming ever moe prevalent throughout the 
          world today.Sitting up this system within your business can turn into a major expense though.</p>
          <p style=" font-family:Arial Rounded MT Bold;  font-size: 20px;">Key Highlights of Basic bank mobile banking.</p>
          <ul>
	            <li>Balance enquiry</li>
	            <li> Demat enquiry</li>
	            <li> Transfer of funds</li>
              <li>Bill payments</li>
              <li>Instant opening or closing of FDs and RDs.</li>
  
        </ul>
    </div>
  </div>
</div>

<footer class="footer" style="background-color:#4d4d4d">
    <!-- Footer Widget Section -->
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
                    <br><br><br><br> <h3>Contact Us Today</h3>
                        <address>
                            Call Us 959595-969696 OR 949494-989898<br>
                            Send an Email on <a href="mailto:#">contact@basicbank.com</a><br>
                            Visit Us 123 Fake Street- tola 12358<br>
                            India
                        </address>
                        <ul class="list-inline social-links" style="display: inline-block;  ">
                            <li><a href="#"><i class="fa fa-facebook" ></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Script -->
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
.fakeimg {
    height: 200px;
    background: #aaa;
  }
.bg{
    position: absolute;
    width:100%;
    z-index:-1;
    opacity: 0.77;
}
.jumbotron{
    position: relative;
}
.centered{
    position : absolute;
    top : 50%;
    left : 33%;
}
.footer-widget{
    color: #dcdcdc;
    font-size: 13.5px;
}
#collapsibleNavbar{
justify-content : right;
float : right;
display : flex;
}

</style>