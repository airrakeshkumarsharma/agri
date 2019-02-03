<?php
include('config.php');
include('header.php');
// Macro Management
$rice = 50;
$whete = 50;

?>

<div class="container-fluid">
	<div class="table-responsive">
		<table id="myTable" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>username</th>
					<th>seed</th>
					<th>quantity</th>
					<th>price</th>
					<th>subsidy</th>
					<th>status</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$name = $_SESSION['nameuser'];
				$query = "SELECT * FROM `buy` WHERE `username`= '$name'";
				$result = mysqli_query($con,$query);
				while ($fetch=mysqli_fetch_array($result)) 
				{

					?>
					<tr>
						
						<td><?php 	echo $fetch['username']?></td>
						<td><?php echo $fetch['seed']?></td>
						<td><?php echo $fetch['quantity']?></td>
						<td><?php echo $fetch['actual']?></td>
						<?php
						if($fetch['subsidy'] == 'not')
						{
							$query = "SELECT * FROM `account1` WHERE `username` = '$name'";
							$fetch2 = mysqli_query($con, $query);
							$row = mysqli_fetch_row($fetch2);
							$rs = $whete *(int)$fetch['actual']/100;
							?>
								<td><?php echo $rs ?></td>
							<?php

						}else{
						?>
						<td><?php echo $fetch['subsidy']?></td>
					<?php }?>
						<td><?php echo $fetch['status']?></td>
					</tr>
					<?php
					
				}
				?>
			</tbody>
		</table>

	</div>
</div>

<?php include 'footer.php'; ?>