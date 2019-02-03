<?php
include('config.php');
if(@$_SESSION['nameuser']!='' || @$_SESSION['id']!='')
{

    echo"<script > location.href='index4.php'</script>";

}
?> 
<?php
if(isset ($_POST['submit'])){
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $password=mysqli_real_escape_string($con,$_POST['password']);

    $query="select * from `users` where username='$_POST[username]' AND password='$_POST[password]'";
   // echo $query;
    $result=mysqli_query($con,$query);
    $count=mysqli_num_rows($result);
    if($count==1){
        $fetch_details=mysqli_fetch_array($result);
        $name=$fetch_details['username'];
        $psw=$fetch_details['password'];
        if($name==$username&& $psw==$password)
        {
            echo "success";
            $_SESSION['nameuser']=$name;
            $_SESSION['id']=$fetch_details['id'];
           echo"<script > location.href='index4.php'</script>";
}

        
        else{
            echo "<script>alert('please enter correct details')</script>";
        }
        
    
    }
    else{
            echo "<script>alert('please enter correct details111')</script>";
        }

    }


 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
   <link href="../style.css" rel="stylesheet">
    <!--Custom styles-->
    <style>
        /* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
    </style>
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Sign In</h3>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="username " name="username" autofocus>
                        
                    </div><br>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="password" name="password">
                    </div>
                    <div class="form-group">
                        <button name="submit"  class="btn float login_btn" >Login</button>
                    </div>
                    
                
                        
                </div>
                <div style="color: red">OR login with your thumb</div>
                <img src="https://assets-auto.rbl.ms/3cec2595f2203e2ba8036dea2f8ec84bcfab76c9b599d7c38b7febee94e235b2" width="400px" height="200px">
            </form>
            </div>
            
        </div>
    </div>

</div>
</body>
</html>