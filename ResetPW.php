<?php
if(isset($_POST['btnReset'])){
	$nic = $_POST['nic'];
    $username = $_POST['username'];
    $new_password = $_POST['new_password'];

    $con = mysqli_connect('localhost','root','sqlroot','GrainChain');

	$sql = "SELECT * FROM Users WHERE username = '$username' AND farmer_id = '$nic'";
	$result = mysqli_query($con,$sql);
	if(mysqli_num_rows($result) == 1){
		$sql_up = "UPDATE Users SET password = '$new_password' WHERE farmer_id = '$nic'";
		if(mysqli_query($con,$sql_up)){
			echo "<script>alert('Password reseted successfully!'); window.location.href='login.html';</script>";
		}
		exit();
	}
	else{
		echo "<script>alert('Invalid username or nic.'); window.location.href='ResetPW.html';</script>";
	}
	mysqli_close($con);
}

?>