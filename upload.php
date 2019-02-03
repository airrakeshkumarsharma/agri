<?php
if(isset($_POST['username']))
{
	include'config.php';
	$username = $_POST['username'];
	$id = $_POST['id'];
	$land_number = $_POST['land_number'];
	$adhaar = $_POST['adhaar'];
	$phonenumber = $_POST['phonenumber'];
	$survey_number = $_POST['survey_number'];
	$accountnumber = $_POST['accountnumber'];

	$query = "INSERT INTO `uploade`(`username`, `id`, `land_number`, `adhaar`, `phonenumber`, `survey_number`, `accountnumber`) VALUES ( '$username',  '$id', '$land_number', '$adhaar', '$phonenumber', '$survey_number', '$accountnumber')";
	

	$fetch = mysqli_query($con,$query);
	if($fetch){
	
		echo "data inserted succsessfully";
	}else
	{
		echo "not inserted";
	}
}
?>