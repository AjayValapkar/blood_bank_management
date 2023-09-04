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
   

// sql to delete a record
$sql = "DELETE FROM new_donar WHERE Adhar=$Adhar"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: ../View_Donar.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>