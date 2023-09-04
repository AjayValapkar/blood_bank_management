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
    <img class="logo" src="img/logo.jpg" />
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
  <a class="nav-link" href="Successful.php">Successfull Donation</a>
  <a class="nav-link" href="logout.php">Logout</a>
  <a class="nav-link" href="#"></a>
  
</div>

<div class="split right">
<form class="d-flex" method="post" action="">
        <input class="form-control me-2" type="search"  name="Adhar" placeholder="Search" aria-label="Search">
        <button type="submit" name="search1">Search</button>
      </form>
      <!-- <table class="View" id="Custom">
    
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
    </tr> -->
 <?php
  $conn=mysqli_connect("localhost","root","","blood_bank");
  if(isset($_POST['search1'])){
    // $full_name=$_POST['full_name'];
    $Adhar=$_POST['Adhar'];
    $query="SELECT * FROM new_donar WHERE Adhar='$Adhar' ";
    $query_run=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($query_run))
    {
      ?>
     
     <form  class="marathi" action="" method="post">
     <!-- <form method="post" action="update_donar.php"> -->
     <h3>Update Donar Information</h3>
    <div class="form-row">
   <div class="form-group col-md-6">
    <div class="form-group col-md-8">
      <label for="inputName4">Enter Name :</label>
      <input type="text" class="form-control" name="full_name" id="inputName4" value="<?php echo $row['full_name'] ?>" required>
    </div>
 
    <div class="form-group col-md-8">
      <label for="inputEmail4">Enter Email :</label>
      <input type="text" class="form-control" name="email" id="inputEmail4" value="<?php echo $row['email'] ?>" required>
    </div>
    </div>
    <div class="form-group col-md-6">
    <div class="form-group col-md-8">
      <label for="inputPassword4">Enter Mob No.:</label>
      <input type="text" class="form-control" name ="phone" id="inputPassword4" value="<?php echo $row['phone'] ?>" required>
    </div>
    <div class="form-group col-md-8">
      <label for="inputNumber4">Enter Adhar No.:</label>
      <input type="text" class="form-control" name ="Adhar" id="inputNo4" value="<?php echo $row['Adhar'] ?>" required>
    </div>
    </div>
    <div class="form-group col-md-6">
  <div class="form-group col-md-8">
      <label for="inputDate4">Issue Date :</label>
      <input type="text" class="form-control" name ="Issue_date" id="inputPassword" value="<?php echo $row['Issue_date'] ?>" required>
    </div>
    <div class="form-group col-md-8">
      <label for="inputEmail4">Enter Address :</label>
      <input type="text" class="form-control" name="D_address" id="inputEmail4" value="<?php echo $row['D_address'] ?>" required>
    </div>
    </div>
    
    <div class="form-group col-md-6">
  <div class="form-group col-md-8">
    <label for="inputdate2">Birthdate :</label>
    <input type="text" class="form-control" name="Birth_date" id="inputdate2" value="<?php echo $row['Birth_date'] ?>" required>
  </div>
  <div class="form-group col-md-8">
    <label for="inputAddress2">Blood Group :</label>
    <select class="form-control" name="B_group">
                                                  <option>A<sup>+</sup></option>
                                                  <option>A<sup>-</sup></option>
                                                  <option>AB<sup>+</sup></option>
                                                  <option>AB<sup>-</sup></option>
                                                  <option>B<sup>+</sup></option>
                                                  <option>B<sup>-</sup></option>
                                                  <option>O<sup>+</sup></option>
                                                  <option>O<sup>-</sup></option>
                                                </select>
                                                </div>
  </div>
  <div class="submit">
  <input type="Submit" name="Submit" value="Update">
  </div>
  </div>
 
</div> 
</form>
    
      <?php
    }
    
  }
  else
  {
    echo "No Result Found";
  }

  
 
 if(isset($_POST['Submit']))
  {

  
  $full_name = $_POST['full_name'];
  $email = $_POST['email'];
  $phone= $_POST['phone'];
  $Adhar=$_POST['Adhar'];
  $Issue_date = $_POST['Issue_date'];
  $D_address=$_POST['D_address'];
  $Birth_date=$_POST['Birth_date'];
  $B_group=$_POST['B_group'];

  $query="UPDATE new_donar SET full_name='$full_name',email='$email',phone='$phone',Adhar='$Adhar',Issue_date='$Issue_date',D_address='$D_address',Birth_date='$Birth_date',B_group='$B_group' WHERE Adhar='$Adhar' ";

  $query_run=mysqli_query($conn,$query);

  if($query_run)
  {
      $_SESSION['Submit']="Donar Update Succesfully!!";
      // header("Location:View_Donar.php");


  }
  else
  {
    $_SESSION['Submit']="Not updated";
    // header("Location:View_Donar.php");
  }
}
?>

  </div> 
</body>
</html>