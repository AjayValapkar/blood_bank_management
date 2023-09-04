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
  .marathi{
    margin-top: 100px;
  }
  .view{
    margin-top: 10px;
  }
  #newone{
    /* padding: 6px; */
    padding: 6px;
    margin-left: 5px;
        /* color: rgb(255, 255, 255); */
        /* background-color: black; */
        /* font-size: 15px;
        font-weight: 900; */
        border-bottom: 1px solid black;
  }
  .info{
    margin-left: 20px;
    padding: 6px;
  }
  .dhead{
    margin-bottom: 5px;
  }
  .result{
    background-color: red;
    color: yellow;
    font-size: 17.5px;
    font-weight: 600;
  }
  .logo {
    vertical-align: middle;
    border-style: none;
    border-bottom-right-radius: 40%;
    border-top-left-radius: 20%;
    margin-left: 30%;
}
        </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">


<a class="navbar-brand" href="index.php">
    <img class="logo"  src="img/logo.jpg" />
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="nav justify-content-end">
  
<li class="nav-item">
    <div class="admin"><h2> Nature Blood Bank </h2> </div>
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
  
<a class="nav-link active" aria-current="page" href="Dashboard.php">Admin Dashboard</a>
  <hr>
  <a class="nav-link" href="New_Donar.php">Add New Donar</a>
  <!-- <a class="nav-link" href="Update.php">Update Donar Info</a> -->
  <a class="nav-link" href="View_Donar.php">View Donars</a>
  <a class="nav-link" href="View_Request.php">View Request</a>
 
  <a class="nav-link" href="Search_by_Blood_group.php">Search Donar</a><br>
  <a class="nav-link" href="Successful.php">Successfull Donation</a>
  <a class="nav-link" href="logout.php">Logout</a>
  <a class="nav-link" href="#"></a>
  
</div>

<div class="split right">
<form class="d-flex" method="post" action="Search_by_Blood_group.php">
        <input class="form-control me-2" type="search"  name="B_group" placeholder="Search" aria-label="Search">
        <button type="submit" name="search">Search</button>
      </form>
     <table class="view" id="Custom">
    
   
 <?php
  $conn=mysqli_connect("localhost","root","","blood_bank");
  if(isset($_POST['search'])){
    // $full_name=$_POST['full_name'];
    $B_group=$_POST['B_group'];
    $D_address=$_POST['D_address'];
    $query="SELECT * FROM new_donar WHERE B_group='$B_group' OR D_address='$D_address' ";
    $query_run=mysqli_query($conn,$query);
    ?>
      <h3 class="dhead">Donars Information</h3>
    <table class="view" id="Custom">
    <tbody>
    <tr>
      <td id="heading">Donar's Name</td>
      <td id="heading">EmailID</td>
      <td id="heading">Mobile NO</td>
      <td id="heading">Adhar No</td>
      <td id="heading">Issue Date</td>
      <td id="heading">Donar Address</td>
      <td id="heading">Donars Birthdate</td>
      <td id="heading">Blood Group</td>
      <td id="heading">Gender</td>
      <td id="heading">Delete</td>
      <td id="heading">Update</td>
    </tr>
    <!-- </table> -->
   
      
    <?php
     if(mysqli_num_rows($query_run)>0){
    $i=0;
    while($row=mysqli_fetch_array($query_run))
    {
      ?>
     <!-- <table class="view" id="Custom"> -->
      <!-- <table class="info"> -->
      <tr id="first">
        <td id="newone"><?php echo $row['full_name'] ?></td>
        <td id="newone"><?php echo $row['email'] ?></td>
        <td id="newone"><?php echo $row['phone'] ?></td>

        <td id="newone"><?php echo $row['Adhar'] ?></td>

        <td id="newone"><?php echo $row['Issue_date'] ?></td>
        <td id="newone"><?php echo $row['D_address'] ?></td>
        <td id="newone"><?php echo $row['Birth_date'] ?></td>
        <td id="newone"><?php echo $row['B_group'] ?></td>
        <td id="newone"><?php echo $row['gender'] ?></td>
        <td id="newone"><a href="delete_donar.php? Adhar= <?php echo $row['Adhar']; ?>" aria-hidden="true" data-bs-target="tooltip" data-placement="bottom">delete</a>
  </td>
      <td id="newone"><a href="updateautofill.php? Adhar= <?php echo $row['Adhar']; ?>" aria-hidden="true" data-bs-target="tooltip" data-placement="bottom" >Edit</a></td>
      </tr>
      <!-- </tbody> -->
     <!-- </table>  -->
    
      <?php
      $i++;
    }
    ?>
    </table>
    <?php
  }
  
  else{

    ?>
  <big class="result"><script>alert("No Result for <?php echo $_POST['B_group'] ?>")</script> </big>
    <?php
  }
  }
  
  
 ?>

  </div> 
</body>
</html>