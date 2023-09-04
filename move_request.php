<?php
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "blood_bank";
    
  // Create connection
  $conn = new mysqli($servername,$username, $password, $dbname);
    
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
    // $full_name = $_POST['full_name'];
    // $email = $_POST['email'];
    // $phone= $_POST['phone'];
    // $Adhar=$_POST['Adhar'];
    // $Issue_date = $_POST['Issue_date'];
    // $D_address=$_POST['D_address'];
    // $Birth_date=$_POST['Birth_date'];
    // $B_group=$_POST['B_group'];
    

    $Adhar=$_GET['Adhar'];
	$result="DELETE FROM request_blood WHERE Adhar=$Adhar ";
  $sql = "INSERT INTO success SELECT * FROM request_blood WHERE Adhar=$Adhar ";
// --   VALUES('$full_name','$email','$phone','$Adhar','$Issue_date','$D_address','$Birth_date','$B_group','$gender')";
  
  if ($conn->query($sql) === TRUE) {
    if($conn->query($result)==TRUE)
  {
    echo '<script>alert("Record Save Successfully")</script>';
    header("Location:../donate_request.php");
  }
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
      echo '<script>alert("Record Save Successfully")</script>';
      header("Location:../donate_request.php");
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  header("location:View_Request.php");
 
?>