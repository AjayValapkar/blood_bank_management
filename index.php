<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Blood Bank Management System</title>

   
    <link href="css/style.css" rel="stylesheet" />
    <style>
      body{
        background-image:url("img/blood5.jpg");
        background-repeat:no-repeat;
        background-position:fixed;
        background-size:cover;
      }
      h1{
        color:black;
        font-weight:600;
        color:black;
        margin-top:20%;
      }
      .topic{
        margin:0 auto;
        width:80%;
        padding:0 auto;
        border:solid black;
      }
    </style>
</head>

<body>

    <!-- 
<div class="main">
<div class="conmtainer">
<img src="img/Blood_main.png" class="img-fluid" alt="...">
  
  <div class="top-left"><h1>BLOOD BANK MANAGEMENT SYSTEM</h1>

<h4>welcome our blood bank system</h4></div>
<a href="Dashboard.php">Click here</a>
 <BR></BR> -->
  
 <!-- <div class="footer">
    <div class="page-container footer-container">
        <div class="footer-cities">
            <div class="footer-city">
                <a href="property_list.php?city=Delhi">PG in Delhi</a>
            </div>
            <div class="footer-city">
                <a href="property_list.php?city=Mumbai">PG in Mumbai</a>
            </div>
            <div class="footer-city">
                <a href="property_list.php?city=Bengaluru">PG in Bangalore</a>
            </div>
            <div class="footer-city">
                <a href="property_list.php?city=Hyderabad">PG in Hyderabad</a>
            </div>
        </div>
        <div class="footer-copyright">© 2020 Copyright PG Life </div>
    </div>
</div> -->
<?php
    require "include/database_connection.php";
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    
<div class="text-center">
  <h1>Blood Bank Management System</h1>
</div>
 <div class="centered">
 <!-- <div class="shadow p-3 mb-5 bg-body rounded"> -->
   

   <form method="post">
   <div class="header">
     <h2>Admin Login Panel</h2>
     </div>
     <hr> 
     <div class="login-form">
       
      <div class="input-field">
           <i class="fas fas-user"></i>
           <input type="text" placeholder="Username" name="username">
         </div>
         <br>
         <br>
         <!-- <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-lock"></i>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="Password"  required>
                                            </div> -->
         <div class="input-field">
           <i class="fas fas-lock"></i>
           <input type="password" placeholder="Password" name="password">
         </div>
         <br>
         <br>
         <a href="admin_update.php">Forgot Password</a>
         <input type="submit" name="submit"  class="btn btn-primary" value="Login">
         <input type="Reset" name="Reset"  class="btn btn-primary" value="Reset">
     </div>
 </form>
   </div>
 </div>
  
  </body>
  </html>
<?php
   if(isset($_POST['submit']))
   {
     $query="SELECT * FROM admin_login WHERE a_name ='$_POST[username]'  AND a_password ='$_POST[password]'";
     $result=mysqli_query($con,$query);
     if(mysqli_num_rows($result)==1)
     {
       session_start();
       $_SESSION['AdminLoginId']=$_POST['username'];
       header("location:Dashboard.php");
    
     }
     else{
       echo "<script>alert('Incorrect password');</script>";
      //  header("location:index.php");
     }
   }
  ?>
  

</body>

</html>
