<?php
    require "database_connection.php";
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
  </head>
  <body>
    <div class="login-form">
      <h2>
       
      </h2>
      <div class="input-field">
          <i class="fas fas-user"></i>
          <input type="text" placeholder="Username" name="username">
        </div>
        <div class="input-field">
        <span class="input-group-text" id="basic-addon1">
          <i class="fas fas-lock"></i>
          <input type="password" placeholder="Password" name="password">
          </span>
        </div>
        <button type="submit">Login</button>
    </div>
  </body>
  </html>
<?php
   if(isset($_POST['submit']))
   {
     $query="SELECT * FROM 'admin_login' WHERE 'a_name'='$_POST[username]'  AND 'a_password'='$_POST[password]'";
     $result=mysqli_query($con,$query);
     if(mysqli_num_rows($result)==1)
     {
       session_start();
       $_SESSION['AdminLoginId']=$_POST['username'];
       header("location:welcome.php");
     }
     else{
       echo "<script>alert('Incorrect password');</script>";
     }
   }
  ?>
