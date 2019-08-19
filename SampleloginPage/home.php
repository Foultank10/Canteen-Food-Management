<?php
 require 'dbconfig/config.php';
   session_start();

?>

<DOCKTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#FFEB3B">
     
   <div id="main-wrapper">
      <center>
         <h2>Home Page</h2>
         <h3>Welcome 
          <?php echo $_SESSION['username']?>
          </h3>
          <img src="imgs/user.png" class="avatar"/>
      </center>
      <form class="myform" action="home.php" method="post">
          <input name="logout" type="submit" id="logout_btn" value="Log Out"><br>
       </form> 
       <?php 

         if(isset($_POST['logout']))
          {
             session_destroy();
             header('location:index.php');
           }?>





   </div>





</body>
</html