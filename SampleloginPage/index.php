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
         <h2>Login Form </h2>
          <img src="imgs/user.png" class="avatar"/>
      </center>
      <form class="myform" action="index.php" method="post">
        <label><b>Username</b></label><br>
        <input name="username" type="text" class="inputvalues" placeholder="Type your username"><br>
        <label><b>Password</b></label><br>
        <input name="password" type="password" class="inputvalues" placeholder="Type your Password"><br>
        <input name="login" type="submit" id="login_btn" value="submit"><br>
        <a href="register.php"><input type="button" id="register_btn" value="Resgister"><br>
       </form> 
 
      <?php 

          if(isset($_POST['login']))
          {
          	$username=$_POST['username'];
          	$password=$_POST['password'];
          	$query="select*from userinfo where username='$username' and password= '$password'";
          	$query_run=mysqli_query($con,$query);
          	  if(mysqli_num_rows($query_run)>0)
          	  { //valid
          	  	$_SESSION['username']=$username;
          	  	header('location:home.php');




          	  	echo '<script type="text/javascript"> alert("access granted")</script>'; 

          	   }
          	   else
          	   { //invalid
          	   	echo '<script type="text/javascript"> alert("Invalid Credintials!!!!")</script>'; 


          	   }






           }









       ?>




   </div>





</body>
</html