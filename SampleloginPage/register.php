<?php
   require 'dbconfig/config.php';
   session_start();

?>

<DOCKTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#FFEB3B">
     
   <div id="main-wrapper">
      <center>
         <h2>Registration Form </h2>
          <img src="imgs/user.png" class="avatar"/>
      </center>
      <form class="myform" action="register.php" method="post">
        <label><b>Username</b></label><br>
        <input name="username" type="text" class="inputvalues" placeholder="Type your username" required><br>
        <label><b>Password</b></label><br>
        <input name="password" type="password" class="inputvalues" placeholder="Type your Password" required><br>
        <label><b>Confirm Password</b></label><br>
        <input name="cpassword" type="password" class="inputvalues" placeholder="Confirm Password" required><br>
        <input name="submit_btn" type="submit" id="signup_btn" value="sign up"><br>
        <a href="index.php"><input type="button" id="back_btn" value="Back" required><br>
       </form> 

     <?php

         if(isset($_POST['submit_btn']))
         {
              // echo '<script type="text/javascript"> alert("signup button clicked")</script>'; 

              $username=$_POST['username'];
              $password=$_POST['password'];
              $cpassword=$_POST['cpassword'];
              
              if($password==$cpassword)
              {
                 $query="select*from userinfo where username='$username'";
                 $query_run=mysqli_query($con,$query);

                 if(mysqli_num_rows($query_run)>0)
                 {
                    echo '<script type="text/javascript"> alert("User already exists .. tyr other username")</script>'; 

                     
                 }
                 else
                 {
                    $query="insert into userinfo values('$username','$password')";
                     $query_run=mysqli_query($con,$query);

                 
                 if($query_run)
                  {

                    echo '<script type="text/javascript"> alert("User registered go to login page")</script>'; 

                   }
                  else
                  {

                    echo '<script type="text/javascript"> alert("Error..!")</script>'; 

                   }
 

              }

            

         }
         else{
               echo '<script type="text/javascript"> alert("password and confirm password doesnot match")</script>';
                 }

     }

     ?>
    


   </div>





</body>
</html