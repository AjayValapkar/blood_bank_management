<!-- <?php
require_once "include/Database_connect.php";
    
    $sql = "INSERT INTO new_donar('full_name','email,phone','Adhar','Issue_date','D_address','Birth_date','B_group') VALUES('$name','$email','$phone','$Adhar','$Issue_date','$D_address','$Birth_date','$B_group')";
   
if(array_key_exists('Submit',$_POST))
{
  Submit();
}
function Submit(){
  echo '<script>alert("Add Donar Successful")</script>';

}
mysqli_close($conn);
?> -->

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
     label{
       font-weight: 600;
       font-size: 16.5px;
     }
     .submit{
       margin-left: 1.7%;
       padding: 1%;
       font-weight: 700;
       color: black;
     }
     h3{
       margin-top: 0px;
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

<div class="split left">
  
<a class="nav-link active" aria-current="page" href="Dashboard.php">Admin Dashboard</a>
  <hr>
  <a class="nav-link" href="New_Donar.php">Add New Donar</a>
  <!-- <a class="nav-link" href="Update.php">Update Donar Info</a> -->
  <a class="nav-link" href="View_Donar.php">View Donars</a>
  <a class="nav-link" href="View_Request.php">View Request</a>
  <a class="nav-link" href="Search_by_Blood_group.php">Search Donar</a>
  <a class="nav-link" href="Successful.php">Successfull Donation</a>
  <a class="nav-link" href="logout.php">Logout</a>
  <a class="nav-link" href="#"></a>
  
</div>

<div class="split right">
  <h3>New Donar</h3>
<form action="api/new_donar.php" class="Register" method="post">
                                    <!-- <div class="modal-body">
                                        <form id="login-form" class="form" method="POST" action="api/new_donar.php">
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-user"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" name="full_name"
                                                    placeholder="Full Name" maxlength="30" required>
                                            </div>
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-user"></i>
                                                    </span>
                                                </div>
                                                <input type="email" class="form-control" name="name"
                                                    placeholder="Email" required>
                                            </div>
                                            <table>
                                            <td>
                                              <tr>
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-phone-alt"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" name="phone"
                                                    placeholder="Phone Number" maxlength="10" minlength="10" required>
                                            </div>
                                            </tr>
                                            <tr>
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-lock"></i>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" name="Adhar_no"
                                                    placeholder="Adhar No." minlength="6" required>
                                            </div>
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-date"></i>
                                                    </span>
                                                </div>
                                                <input type="date" class="form-control" name="Issue_date"
                                                    placeholder="IssueDate" minlength="6" required>
                                            </div>
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-address"></i>
                                                    </span>
                                                </div>
                                                <input type="Address" class="form-control" name="D_address"
                                                    placeholder="Address" minlength="6" required>
                                            </div>
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-date"></i>
                                                    </span>
                                                </div>
                                                
                                               <input type="date" class="form-control" name="Birth_date"
                                                    placeholder="BirthDate" minlength="6" required>
                                            </div>
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-address"></i>
                                                    </span>
                                                </div>
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
                                            </tr>
                                          </td>
                                        </table>
                                       
                                        <input type="Submit" value="Add New Donar" name="Submit" placeholder="Add New">
                                      
 </form> -->
 <div class="form-row">
   <div class="form-group col-md-6">
    <div class="form-group col-md-8">
      <label for="inputName4">Enter Name :</label>
      <input type="text" class="form-control" name="full_name" id="inputName4" placeholder="Full Name"  required>
    </div>
 
    <div class="form-group col-md-8">
      <label for="inputEmail4">Enter Email :</label>
      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" required>
    </div>
    </div>
    <div class="form-group col-md-6">
    <div class="form-group col-md-8">
      <label for="inputPassword4">Enter Mob No.:</label>
      <input type="number" class="form-control" name ="phone" id="inputPassword4" placeholder="Mobile No." required>
    
    </div>  
    <div class="form-group col-md-8">
      <label for="inputNumber4">Enter Adhar No.:</label>
      <input type="Number" class="form-control" name ="Adhar" id="inputNo4" placeholder="Adhar No" required>
    </div>
    </div>
    <div class="form-group col-md-6">
  <div class="form-group col-md-8">
      <label for="inputDate4">Issue Date :</label>
      <input type="date" class="form-control" name ="Issue_date" id="inputPassword" placeholder="Issue date" required>
    </div>
    <div class="form-group col-md-8">
      <label for="inputEmail4">Enter Address :</label>
      <input type="text" class="form-control" name="D_address" id="inputEmail4" placeholder="Address" required>
    </div>
    </div>
   
    <div class="form-group col-md-6">
  <div class="form-group col-md-8">
    <label for="inputdate2">Birthdate :</label>
    <input type="date" class="form-control" name="Birth_date" id="inputdate2" placeholder="Birthdate" required>
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
                                                <br>
                                                <label>Gender  :</label>
                                              <input type="radio" name="gender" id="" value="  Male">Male
    <input type="radio" name="gender" value="Female">Female
    <input type="radio" name="gender" id="" value="Other">Other
                                                </div>
  </div>
  
  
  <div class="submit">
  <input type="Submit" name="Submit" value="Add New Donar">
  </div>
  
</form>
</body>

</html>
