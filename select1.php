<?php 
include'config.php';
include 'header.php';
include('check_session.php');
session_start();
$username = $_SESSION['nameuser'];
$id = $_SESSION['id'];
?>

		
			<div class="col-md-12  thumbnail">
				<h3 class="text-primary text-center">Tenant farmer form</h3><hr>
				<div class="row">
					<div class="col-xs-3 col-xs-offset-2">
						<label class="course">Land No:</label> 
					</div>
					<div class="col-xs-5">
						<input type="text" class="form-control" placeholder="land numer" name="land_number"  id="land_number" autofocus>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-xs-3 col-xs-offset-2">
						<label class="course">Aadhar No:</label> 
					</div>
					<div class="col-xs-5">
						<input type="text" class="form-control" placeholder="adhaar" name="adhaar" id="adhaar" autofocus>
					</div>
				</div>
					<br>
					<div class="row">
					<div class="col-xs-3 col-xs-offset-2">
						<label class="course">Phone No:</label> 
					</div>
					<div class="col-xs-5">
						<input type="text" class="form-control" placeholder="phone number "  id="phonenumber"name="phonenumber" autofocus>
						
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-xs-3 col-xs-offset-2">
						<label class="semester">Survey No :</label> 
					</div>
					<div class="col-xs-5">
					<input type="text" class="form-control" placeholder="survey number according to latest survey " id="survey_number" name="survey_number" autofocus>
							
						
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-xs-3 col-xs-offset-2">
						<label class="semester">Agri account number :</label> 
					</div>
					<div class="col-xs-5">
					<input type="text" class="form-control" placeholder="give your land account number " id="accountnumber" name="accountnumber" autofocus>
							
						
					</div>
				</div>
				
				<button class="btn btn-primary col-xs-offset-9"  name="submit">Button</button>
				<br><br>
			</div>
			<div class="clearfix"></div>
		
<script type="text/javascript"> 
	$("button").click(function(){

	  var land_number = $("#land_number").val(); 
	  var adhaar = $("#adhaar").val(); 
	  var phonenumber = $("#phonenumber").val(); 
	  var survey_number = $("#survey_number").val(); 
	  var accountnumber = $("#accountnumber").val();
	  var username = "<?= $username ?>";
	  var id = "<?= $id ?>";
	  $.ajax({
	  	type : "post",
	  	url : "upload.php",
	  	data : {"username":username, "id":id, "land_number":land_number, "adhaar":adhaar, "phonenumber":phonenumber, "survey_number":survey_number, "accountnumber":accountnumber},
	  	success : function(data)
	  	{
	  		$(".clearfix").html(data);
	  	}
	  });
	});
</script>
<?php include 'footer.php';?>