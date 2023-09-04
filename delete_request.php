<?php
	// include('include/Database_connect.php');
    $conn=mysqli_connect("localhost","root","","blood_bank");
	$Adhar=$_GET['Adhar'];
	$deletequery="DELETE FROM request_blood WHERE Adhar=$Adhar";
	$query=mysqli_query($conn,$deletequery);
	if($query){
		?>
		<script>
       alert("Deleted Successsful");
			</script>
		<?php
	}
	else{
		?>
		<script>
			alert("error");
		</script>
		<?php
	}
	header('location:View_Request.php');
?>