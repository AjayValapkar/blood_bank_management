<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Blood Bank Management System</title>

    <?php
    include "include/header_link.php";
    ?>
    <link href="css/style.css" rel="stylesheet" />
   <style>
     .nav-item{
       text-align: left;
       /* margin-left: 90%; */
     }
     .admin p{
       color: white;
     }
   </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">


<a class="navbar-brand" href="index.php">
    <img class="logo" src="img/logo.jpg" />
   
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<!-- <h2>Blood Bank</h2> -->
<div class="nav justify-content-end">
  
<li class="nav-item">
    <p class="admin"><b>Hii..Welcome <?php echo $_SESSION['AdminLoginId']?></b> </p>
</li>
</div>
</nav>
<!-- <div class="main">
<div class="left">

  <a class="nav-link active" aria-current="page" href="Dashboard.php">Admin Dashboard</a>
  <a class="nav-link" href="New_Donar.php">Add New Donar</a>
  <a class="nav-link" href="View_Donar.php">View Donars</a>
  <a class="nav-link" href="View_Request.php">View Request</a>
  <a class="nav-link" href="#"></a>

</div>
<div class="right">
    <h2>Welcome Admin</h2>
</div>
</div> -->
<div class="split left">
  
  <a class="nav-link active" aria-current="page" href="Dashboard.php">Admin Dashboard</img></a>
  <hr>
  <a class="nav-link" href="New_Donar.php">Add New Donar</a>
 
  <a class="nav-link" href="View_Donar.php">View Donars</a>
  <a class="nav-link" href="Fetch_request.php">View Request</a><br>
  <a class="nav-link" href="Search_by_Blood_group.php">Search Donar</a>
  <a class="nav-link nav-item" href="Successful.php">Successfull Donation</a>
  
  <a class="nav-link" href="logout.php">Logout</a>
  
</div>

<div class="split right">
  <h3>Blood Availability</h3>
  <div class="row">
  <div class="col-4">
  <div class="main1">
     <div class="left1">
      <img src="img/A+.png" alt="" class="Blood_group">
      </div>
      <div class="right1">
      <b><?php 
         require "include/Database_connect.php";
         $dash_query="SELECT * FROM new_donar WHERE B_group='A+'";
         $dash_query_run=mysqli_query($link,$dash_query);
         if($dash_total=mysqli_num_rows($dash_query_run))
         {
           echo '<h4 class="mb-0">'.$dash_total.'Bags</h4>';
         }
         else{
           echo  '<h4 class="mb-0">No Bags</h4>';
         }
      ?></b>
      </div>
     </div>
  </div>
  <div class="col-4">
  <div class="main1">
     <div class="left1">
      <img src="img/A-.png" alt="" class="Blood_group">
      </div>
      <div class="right1">
        
      <b><?php 
        //  require "include/Database_connect.php";
         $dash_query="SELECT * FROM new_donar WHERE B_group='A-'";
         $dash_query_run=mysqli_query($link,$dash_query);
         if($dash_total=mysqli_num_rows($dash_query_run))
         {
           echo '<h4 class="mb-0">'.$dash_total.' Bags</h4>';
         }
         else{
           echo  '<h4 class="mb-0">No Bags</h4>';
         }
      ?></b>
      </div>
     </div>
  </div>
  <div class="col-4">
     <div class="main1">
     <div class="left1">
      <img src="img/B-.png" alt="" class="Blood_group">
      </div>
      <div class="right1">
      <b><?php 
        //  require "include/Database_connect.php";
         $dash_query="SELECT * FROM new_donar WHERE B_group='B-'";
         $dash_query_run=mysqli_query($link,$dash_query);
         if($dash_total=mysqli_num_rows($dash_query_run))
         {
           echo '<h4 class="mb-0">'.$dash_total.' Bags</h4>';
         }
         else{
           echo  '<h4 class="mb-0">No Bags</h4>';
         }
      ?></b>
      </div>
     </div>
  </div>
  <div class="col-4">
  <div class="main1">
     <div class="left1">
      <img src="img/B+.png" alt="" class="Blood_group">
      </div>
      <div class="right1">
      <b><?php 
        //  require "include/Database_connect.php";
         $dash_query="SELECT * FROM new_donar WHERE B_group='B+'";
         $dash_query_run=mysqli_query($link,$dash_query);
         if($dash_total=mysqli_num_rows($dash_query_run))
         {
           echo '<h4 class="mb-0">'.$dash_total.' Bags</h4>';
         }
         else{
           echo  '<h4 class="mb-0">No Bags</h4>';
         }
      ?></b>
      </div>
     </div>
  </div>
  <div class="col-4">
  <div class="main1">
     <div class="left1">
      <img src="img/AB+.jpg" alt="" class="Blood_group">
      </div>
      <div class="right1">
      <b><?php 
        //  require "include/Database_connect.php";
         $dash_query="SELECT * FROM new_donar WHERE B_group='AB+'";
         $dash_query_run=mysqli_query($link,$dash_query);
         if($dash_total=mysqli_num_rows($dash_query_run))
         {
           echo '<h4 class="mb-0">'.$dash_total.' Bags</h4>';
         }
         else{
           echo  '<h4 class="mb-0">No Bags</h4>';
         }
      ?></b>
      </div>
     </div>
  </div>
  <div class="col-4">
  <div class="main1">
     <div class="left1">
      <img src="img/AB-.webp" alt="" class="Blood_group">
      </div>
      <div class="right1">
      <b><?php 
        //  require "include/Database_connect.php";
         $dash_query="SELECT * FROM new_donar WHERE B_group='AB-'";
         $dash_query_run=mysqli_query($link,$dash_query);
         if($dash_total=mysqli_num_rows($dash_query_run))
         {
           echo '<h4 class="mb-0">'.$dash_total.' Bags</h4>';
         }
         else{
           echo  '<h4 class="mb-0">No Bags</h4>';
         }
      ?></b>
      </div>
     </div>
  </div>
  <div class="col-4">
  <div class="main1">
     <div class="left1">
      <img src="img/O+.png" alt="" class="Blood_group">
      </div>
      <div class="right1">
      <b><?php 
        //  require "include/Database_connect.php";
         $dash_query="SELECT * FROM new_donar WHERE B_group='O+'";
         $dash_query_run=mysqli_query($link,$dash_query);
         if($dash_total=mysqli_num_rows($dash_query_run))
         {
           echo '<h4 class="mb-0">'.$dash_total.' Bags</h4>';
         }
         else{
           echo  '<h4 class="mb-0">No Bags</h4>';
         }
      ?></b>
      </div>
     </div>
  </div>
  <div class="col-4">
  <div class="main1">
     <div class="left1">
      <img src="img/O-.jpg" alt="" class="Blood_group">
      </div>
      <div class="right1">
      <b><?php 
        //  require "include/Database_connect.php";
         $dash_query="SELECT * FROM new_donar WHERE B_group='O-'";
         $dash_query_run=mysqli_query($link,$dash_query);
         if($dash_total=mysqli_num_rows($dash_query_run))
         {
           echo '<h4 class="mb-0">'.$dash_total.' Bags</h4>';
         }
         else{
           echo  '<h4 class="mb-0">No Bags</h4>';
         }
      ?></b>
      </div>
     </div>
  </div>
  </div>
</div>


</body>

</html>
