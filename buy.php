<?php
if(isset($_POST['name']))
{
	include('config.php');
	$name = $_POST['name'];
	$seed = $_POST['seed'];
	$quantity = $_POST['quantity'];	
	$buy = $_POST['rate'];

	$query = "INSERT INTO `buy`( `username`, `seed`, `quantity`, `subsidy`,`status`, `actual`) VALUES ( '$name', '$seed', '$quantity', 'not', 'pending by bank', '$buy' )";
	
	$fetch = mysqli_query($con, $query);

	if($fetch){
		echo "data inserted successfully";
	}else{
		echo "some problems occured";
	}

}
?>