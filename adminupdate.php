<?php
  session_start();

  $conn=mysqli_connect("localhost","root","","login");
   
  if(isset($_POST['Submit']))
  {

  
  $a_name=$_POST['a_name'];
  $a_password=$_POST['a_password'];

  $query="UPDATE admin_login SET a_password='$a_password' WHERE a_name='$a_name'";

  $query_run=mysqli_query($conn,$query);

  if($query_run)
  {
      $_SESSION['Submit']="Donar Update Succesfully!!";
      header("Location:index.php");


  }
  else
  {
    $_SESSION['Submit']="Not updated";
    header("Location:index.php");
  }
}
?>