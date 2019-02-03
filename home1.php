<!DOCTYPE html>
<html>
<head>
	<title>college</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<style>
		.container{
			background-color:white;
			border-style: solid;
  border-color: white white blue white;

		}
		.fa-phone{
			color: blue;
			font-size:20px;
			padding-top:20px;

  	
  }
.dropdown{
	padding-right:75px;
	font-size:20px;
	color: blue;
}


		body {
  font-family: 'Lato', sans-serif;
}

.overlay {
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color:#0066cc;
  overflow-y: hidden;
  margin-top:100px;
  transition: 0.3s;
}

.overlay-content {
  position: relative;
  top: 15%;
  width: 100%;
  text-align: left;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size:26px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color:white;
  background-color:#00a3cc;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
	.col-sm-6{
	padding-bottom:30px;
}
.col-sm-4{
	padding-top:30px;
}
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color:white;
  width:20%;
  height: 500px;

}

.canvas{
  position: relative;
  width: 350px;
  height: 281px;
  margin: 20px auto;
  perspective: 1000px;
}

.card{
  width: 100%;
  height: 100%;
  transform-style: preserve-3d;
  transition-duration: 1s;
}

.canvas:hover .card{
  transform: rotateX(180deg);
}

.front, .back{
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  color: white;
  text-align: center;
  line-height: 281px;
  font-size: 100px;
}

.front{
  display:block;
  background-color: gray;
}

.back{
  display:block;
  transform: rotateX(180deg);
  background-color:orange;
}

.container1{
	border-style: solid;
	border-color:gray gray gray gray;
}


.btn {
  padding: 10px 20px;
  background-color: #333;
  color: #f1f1f1;
  border-radius: 0;
  transition: .2s;
}

.btn:hover, btn:focus {
  border: 1px solid #333;
  background-color: orange;
  color: #000;
}

.modal-header, h4 {
  background-color: orange;
  color: #fff !important;
  text-align: center;
  font-size: 30px;
}

.modal-header, .modal-body {
  padding: 40px 50px;
}
.container2{
padding-left: 300px;
padding-right: 300px;
padding-top: 50px;
padding-bottom: 50px;
}




	

	</style>
</head>
<body>
	<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="tab">
    <a href="#"><i class="fa fa-fw fa-user"></i>About</a>
    <div class="dropdown-divider"></div>
    <a href="#"><i class="fa fa-fw fa-list"></i>Services</a>
    <div class="dropdown-divider"></div>
    <a href="#"><i class="fa fa-fw fa-users"></i>Clients</a>
    <div class="dropdown-divider"></div>
    <a href="#"><i class="fa fa-fw fa-mobile"></i>Contact</a>
    <div class="dropdown-divider"></div>
  </div>
</div>


<div class="container">
<div class ="row">
 <div class="col-sm-4">
<span style= "font-size:30px;cursor:pointer;color:blue;" onclick="openNav()">&#9776;  Menu</span>

</div>
  <div class="col-sm-6">
  	
  	<img src="img/pic3.png"alt =height="300"px width="300"px/>
  </div>
  <div class="col-sm-2">
  	<span class="fa fa-fw fa-phone">Contactus:</span>
  	<ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <div  class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Login</div>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile2.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <br>
                        <li>
                            <a href="changepwd.php"><i class="fa fa-fw fa-key"></i>Edit Password</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php ?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
  </div>
</div>
</div>

<script>
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
</script>
<marquee> <h3 style="color:#ff9999">*Department of Electronics and Communication Engineering*  </h3></marquee>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/pic1.jpg" alt="New York">
          <div class="carousel-caption">
            <h3>New York</h3>
            <p>The atmosphere in New York is lorem ipsum.</p>
          </div>
        </div>
        <div class="item">
          <img src="img/pic2.jpg" alt="Chicago">
          <div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago - A night we won't forget.</p>
          </div>
        </div>
        <div class="item">
          <img src="img/img9.jpg" alt="Los Angeles">
          <div class="carousel-caption">
            <h3>LA</h3>
            <p>Even though the traffic was a mess, we had the best time.</p>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Custom CSS -->
    <div class="container1">
<div class ="row">
 <div class="col-sm-4">
    <div class="canvas">
  <div class="card">
    <div class="front">
      <div>Hellow</div>
    </div>
    <div class="back">
      <div>World!</div>
    </div>
  </div>
</div>
</div>
<div class="col-sm-4">
    <div class="canvas">
  <div class="card">
    <div class="front">
      <div>Hellow</div>
    </div>
    <div class="back">
      <div>World!</div>
    </div>
  </div>
</div>
</div>
<div class="col-sm-4">
    <div class="canvas">
  <div class="card">
    <div class="front">
      <div>Hellow</div>
    </div>
    <div class="back">
      <div>World!</div>
    </div>
  </div>
</div>
</div>
</div>
</div>
 <!-- Custom CSS -->    
 <div class="container2">
 <div class="modal-content">
          <div class="modal-header">
            <h4><span class="glyphicon glyphicon-user"></span>Signup</h4>
          </div>
        
<div class="modal-body">
            <form role="form">
              <div class="form-group">
              	<label for="usrname"><span class="fa fa-fw fa-user"></span>UserName</label>
                <input type="text" class="form-control" id="usrname" placeholder=" Enter UserName" required>
                
                              </div>
              <div class="form-group">
                <label for="psw"><span class="fa fa-fw fa-key"></span>Password </label>
                <input type="Password" class="form-control" id="psw" placeholder=" Enter Password" required>

              </div>
              <button type="submit" class="btn btn-block">Submit
                <span class="glyphicon glyphicon-ok"></span>
              </button>
            </form>
          </div>
          
          </div>
      </div>
    </div>
</div>
          

</body>
</html>