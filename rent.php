<?php
if(isset($_POST['id']) && isset($_POST['sno']))
{
	include_once("config.php");
	$id = $_POST['id'];
	$sno = $_POST['sno'];
	
	$query = "SELECT * FROM `rent` WHERE `id`=$sno";
	$fetch = mysqli_query($con,$query);
	$fetch1 = mysqli_fetch_array($fetch);
	?>
	<table>
		<td>
			<tr>uuid : </tr>
			<tr><?php echo $fetch1['id'];?></tr>
		</td><br>
		<td>
			<tr>owner name : </tr>
			<tr><?php echo $fetch1['name'];?></tr>
		</td><br>
		<td>
			<tr>date : </tr>
			<tr><?php echo $fetch1['date'];?></tr>
		</td>
		<br>
	</table>
	<?php
}
?>