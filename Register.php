<?php

if(isset($_POST['btnSubmit'])){

	$farmer_id = $_POST['nic']; 
    $full_name = $_POST['full_name'];
    $nic = $_POST['nic'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $contact_number = $_POST['mobile'];
    $home_number = $_POST['home_number'] ?? NULL;
    $address = $_POST['address'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $land_ownership = $_POST['land_ownership'];
    $land_area = $_POST['land_area'];
    $irrigation = $_POST['irrigation'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = 'Farmer';

    $id_proof = NULL;
    if (!empty($_FILES['id_proof']['tmp_name'])) {
        $id_proof = file_get_contents($_FILES['id_proof']['tmp_name']);
    }

    $con = mysqli_connect("localhost" , "root" , "sqlroot" , "GrainChain");

    $sql_check = "SELECT * FROM Users WHERE farmer_id = '$farmer_id'";
    $res_check = mysqli_query($con,$sql_check);
    if(mysqli_num_rows($res_check) == 1){
    	echo "<script>alert('You have already registered.');window.location.href='Index.html';</script>";
    }
    else{
    	$sql_farmer = "INSERT INTO farmer_details (farmer_id, full_name, nic, birth_date, gender, contact_number, home_number, address, id_proof) VALUES ('$farmer_id','$full_name','$nic','$birthdate','$gender','$contact_number','$home_number','$address','id_proof')";

	    $sql_land = "INSERT INTO land_details (farmer_id, province, district, ownership, land_area, irrigation_type) VALUES ('$farmer_id','$province','$district','$land_ownership','$land_area','$irrigation')";

	    $sql_user = "INSERT INTO Users (username, password, role, farmer_id) VALUES ('$username','$password','$role','$farmer_id')";

		if(mysqli_query($con,$sql_farmer) && mysqli_query($con,$sql_land) && mysqli_query($con,$sql_user)){
			echo "<script>alert('Registration successful!');window.location.href='Login.html';</script>";
		}
		else{
			echo "Error:". mysqli_error($con);
		}
    }

    
	mysqli_close($con);
      
    exit;
}
?>