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
  .d-flex{
     width: 25%;
     margin-left: 70%;
     margin-bottom: -7%;
  }
  button{
      border: 1.5px solid black;
      background-color: grey;
  }
  button:hover{
      color: white;
  }
        </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">


<a class="navbar-brand" href="index.php">
    <img src="img/logo.jpg" />
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
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
  
<a class="nav-link active" aria-current="page" href="Dashboard.php">Admin Dashboard</a>
  <hr>
  <a class="nav-link" href="New_Donar.php">Add New Donar</a>
  <!-- <a class="nav-link" href="Update.php">Update Donar Info</a> -->
  <a class="nav-link" href="View_Donar.php">View Donars</a>
  <a class="nav-link" href="View_Request.php">View Request</a>
  <a class="nav-link" href="New_Donar.php">Successfull Donation</a>
  <a class="nav-link" href="logout.php">Logout</a>
  <a class="nav-link" href="#"></a>
  
</div>

<div class="split right">
<form class="d-flex" action="Search_by_Blood_group.php">
        <input class="form-control me-2" type="search"  name="blood_group" placeholder="Search" aria-label="Search">
        <button type="submit" name="search_by_blodd_group">Search</button>
      </form>
  
  <?php
  include_once 'include/Database_connect.php';

  $result = mysqli_query($link,"SELECT * FROM new_donar");
     
  ?>
 
  <?php
  if (mysqli_num_rows($result) > 0) {

  ?>
  <h3>Donars Information</h3>
    <table class="View" id="Custom">
    
    <tr>
      <td id="heading">Donar's Name</td>
      <td id="heading">EmailID</td>
      <td id="heading">Mobile NO</td>
      <td id="heading">Adhar No</td>
      <td id="heading">Issue Date</td>
      <td id="heading">Donar Address</td>
      <td id="heading">Donars Birthdate</td>
      <td id="heading">Blood Group</td>
      <td id="heading">Delete</td>
      <td id="heading">Update</td>
    </tr>
  <?php
  $i=0;
  while($row = mysqli_fetch_array($result)) {
  ?>
  <tr id="first">
      <td id="newone"><?php echo $row["full_name"]; ?></td>
      <td id="newone"><?php echo $row["email"]; ?></td>
      <td id="newone"><?php echo $row["phone"]; ?></td>
      <td id="newone"><?php echo $row["Adhar"]; ?></td>
      <td id="newone"><?php echo $row["Issue_date"]; ?></td>
      <td id="newone"><?php echo $row["D_address"]; ?></td>
      <td id="newone"><?php echo $row["Birth_date"]; ?></td>
      <td id="newone"><?php echo $row["B_group"]; ?></td>
      <td id="newone"><a href="">Delete</a></td>
      <td id="newone">
                <a  href="Update_New_Donar.php" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    Update
                   
                </a>
            </td>
     
                    
  </tr>
  <?php
  $i++;
  }

  ?>
  </table>
   <?php
  }

  else{
      echo "No result found";
  }
  ?>
 
</div> 
</body>
</html>
