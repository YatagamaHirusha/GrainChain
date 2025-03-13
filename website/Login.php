<?php
session_start();

if(isset($_POST['btnSubmit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$con = mysqli_connect('localhost','root','sqlroot','GrainChain');

	$sql = "SELECT * FROM Users WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($con,$sql);
	if(mysqli_num_rows($result) == 1){
		$row = mysqli_fetch_assoc($result);
		$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['password'] = $row['password'];
		$_SESSION['role'] = $row['role'];
		$_SESSION['farmer_id'] = $row['farmer_id'];

		if($row['role'] == 'Farmer'){

			$sql_farmer = "SELECT * FROM farmer_details WHERE farmer_id = {$_SESSION['farmer_id']}";
       		$res_farmer = mysqli_query($con,$sql_farmer);
       		if(mysqli_num_rows($res_farmer) == 1){
	       		$roww = mysqli_fetch_assoc($res_farmer);
	       		$_SESSION['full_name'] = $roww['full_name'];
	       		$_SESSION['address'] = $roww['address'];
	       		$_SESSION['contact_number'] = $roww['contact_number'];
       		}

       		$sql_land = "SELECT * FROM land_details WHERE farmer_id = {$_SESSION['farmer_id']}";
       		$res_land = mysqli_query($con,$sql_land);
       		if(mysqli_num_rows($res_land) == 1){
       			$row_land = mysqli_fetch_assoc($res_land);
       			$_SESSION['province'] = $row_land['province'];
       			$_SESSION['district'] = $row_land['district'];
       			$_SESSION['land_area'] = $row_land['land_area'];
       			$_SESSION['irrigation_type'] = $row_land['irrigation_type'];
       		}

			header("Location: FarmerDashboard.php");
		}
		elseif ($row['role'] === 'Admin') {
           	header("Location: AdminDashboard.html");
       	} 
        elseif ($row['role'] === 'Agent') {
           	header("Location: AgentDashboard.html");
       	}

		exit();
		
	}
	else{
		echo "<script>alert('Invalid Username or Password!'); window.location.href='Login.html';</script>";
	}
	mysqli_close($con);
}
?>
