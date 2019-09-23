<?php
session_start();
?>

<html>

  <head>
    <title> Home | MyFoodStop </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="css/index.css">

  <body>

  <!--Back to top button..................................................................................-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  <!--Javacript for back to top button....................................................................-->
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };
      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">MyFoodStop</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

<?php
if(isset($_SESSION['login_user1'])){
?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {
  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
             
            </ul>
            </li>
          </ul>

<?php
}
?>


        </div>

      </div>
    </nav>

    <div class="wide">
      	<div class="col-xs-5 line"><hr></div>
        <div class="col-xs-2 logo"><img src="images/logo.png"></div>
        <div class="col-xs-5 line"><hr></div>
        <div class="tagline">Serving You Good Food </div>
    </div>
    <br>
    <!--<center><img src="images/orderimg.png" alt="image" height="50%"></center>-->
    <div class="orderblock">
    <h2>Feeling Hungry?</h2>
    <center><a class="btn btn-success btn-lg" href="customerlogin.php" role="button" > Order Now </a></center>
    </div>

    <div class="col-xs-12 line"><hr></div>

    <div class="wide2">
        <div class="col-xs-4 box">
          <img src="images/minimumx.png" height="200px">
        </div>
        <div class="col-xs-4 box">
          <img src="images/locationx.png">
        </div>
        <div class="col-xs-4 box">
          <img src="images/deliveryx.png">
        </div>

        <div class="col-xs-4 box">
          <h2><strong>NO MINIMUM<br> ORDER <br> </strong><hr> </h2>
          <h4>Order any amount<br> you want - no<br> restrictions</h4>
        </div>
        <div class="col-xs-4 box">
          <h2><strong>LIVE ORDER<br> TRACKING <br> </strong><hr> </h2>
          <h4>Know your<br> order is prepared or not</h4>
        </div>
        <div class="col-xs-4 box">
          <h2><strong>SUPERFAST<br> DELIVERY <br> </strong><hr> </h2>
          <h4>Hot food delivered to<br> From Canteen</h4>
        </div>
    </div>

     <div class="col-xs-12 line"><hr></div>

     <div class="paragraph1">
     <h1>Welcome to MyFoodStop</h1>
    <p><br> 
      <h4>We are new startup deliverying delicious food from the canteen.This site will help the student to place the
        order in their convinient time and they can pay online and take their order without waiting.
    </p>
    <p>
      Well whatever the shower love on us, we believe Athiti devo bhave... Right as always</h4>
    </p>
    </div>

    <div class="col-xs-12 line"><hr></div>

    <div class="paragraph1">
     <h1>MyFoodStop - Serving You Good Food</h1>
    <p><br> 
      <h4>
      MyFoodStop will help in making your quest for enjoying good lunch, dinner,snacks which are delivered to the students from 
      canteen very fast.
      </h4>
    </p>
    </div>

    <div class="col-xs-12 line"><hr></div>

    <div class="paragraph1">
          <h1>HOW TO ORDER?</h1>
          <p>
            <h4>
              All it takes is 3 easy steps:
            </h4>
          </p>
          <br>
          <p>
            <h3>
              <span class="glyphicon glyphicon-ok tickicon"></span> <u>SELECT THE FOOD FROM CANTEEN</u>
            </h3>
          </p>
          <p>
            <h4>
              A list of food is displayed that can be served to you.
            </h4>
          </p>
          <br>
          <p>
            <h3>
              <span class="glyphicon glyphicon-ok tickicon"></span> <u>ADD TO CART</u>
            </h3>
          </p>
          <p>
            <h4>
              You select as per your choice<font color="green"><strong>cuisines like Italian, Chinese dishes, Hyderabadi, North Indian,</strong></font> Burgers or Desserts like Ice-cream or Cakes.Then add those to cart.
            </h4>
          </p>
          <br>
          <p>
            <h3>
              <span class="glyphicon glyphicon-ok tickicon"></span> <u>PAY ONLINE/OFFLINE</u>
            </h3>
          </p>
          <p>
            <h4>
              You can pay online or offline as per your convinience.
            </h4>
          </p>
          <p>
            <h4>
              That’s all once everything is in order hit on the checkout and pays online or cash on delivery, choose the way you want we accept all major credit cards or pay cash on delivery.
            </h4>
          </p>
          <br>
          <p>
            <h4>
              Yes, MyFoodStop is another way to live life with our loved ones...
            </h4>
          </p>
      </div>

        <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  
</body>

  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> MyFoodStop 2019 | &copy All Rights Reserved </p>
  <br>
  </footer>
</html>