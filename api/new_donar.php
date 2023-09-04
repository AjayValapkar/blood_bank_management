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
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone= $_POST['phone'];
    $Adhar=$_POST['Adhar'];
    $Issue_date = $_POST['Issue_date'];
    $D_address=$_POST['D_address'];
    $Birth_date=$_POST['Birth_date'];
    $B_group=$_POST['B_group'];
    $gender=$_POST['gender'];
    

    
  $sql = "INSERT INTO new_donar VALUES('$full_name','$email','$phone','$Adhar','$Issue_date','$D_address','$Birth_date','$B_group','$gender')";
    
  if ($conn->query($sql) === TRUE) {
    
      echo '<script>alert("Record Save Successfully")</script>';
      header("Location:../New_Donar.php");
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
 
?>
<!-- if(array_key_exists('Submit',$_POST))
{
  Submit()
}
function Submit(){
  echo '<script>alert("Add Donar Successful")</script>';

}
mysqli_close($conn);

    

?> -->