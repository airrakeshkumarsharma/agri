        <?php
include "header.php";
?>
<style>
.thumbnail
  {
   background-color:rgba(0,0,0,0.5) !important; 

  }
  .form-group{
    width: 80%;
  }
  .text{
    color: #FFC312;
  }
  .btn{
    background-color:#FFC312; 
  }
  </style>
<form method=post>

            <div class="col-md-6 thumbnail" >
                <h3 class="text text-center">Change Password</h3><hr>
                
                
       <br>
         <div class="form-group input-group  col-xs-offset-2 ">
          <span class="input-group-addon">Current password</span>
             <input type="password" class="form-control" placeholder="Enter password" name="oldpassword" required>
         </div>
                  <div class="form-group input-group col-xs-offset-2">
          <span class="input-group-addon">New password</span>
             <input type="password" class="form-control" placeholder="Enter password" name="newpassword" required>
         </div>

         <div class="form-group input-group col-xs-offset-2">
          <span class="input-group-addon">Conform Password</span>
             <input type="password" class="form-control" placeholder="Enter password" name="Conformpassword" required>
         </div>
             <button class="btn col-xs-offset-9" name="submit">Submit</button>
             
            </div>
        </form>
    
    <?php
    if(isset($_POST['submit'])) 
    {
      $oldpassword=mysqli_real_escape_string($con,$_POST['oldpassword']);
      $newpassword=mysqli_real_escape_string($con,$_POST['newpassword']);
      $Conformpassword=mysqli_real_escape_string($con,$_POST['Conformpassword']);
      $query="SELECT password from users where username='".$_SESSION['nameuser']."'";
      $result=mysqli_query($con,$query);
      $fetch_details=mysqli_fetch_array($result);
      $oldpassworddb=$fetch_details['password'];
      if($oldpassword==$oldpassworddb)
      {
        if($oldpassworddb!=$newpassword)
        {


        if($newpassword==$Conformpassword)
        {
          $query="UPDATE users set password='".$newpassword."' where username='".$_SESSION['nameuser']."'";
          $result=mysqli_query($con,$query);
         echo"success";
        }
        else{
          echo"Conformpassword not matched";
        }
      }
      else{
        echo" please change the password";
      }
      }
      else{
        echo" oldpassword not matched";
      }
      
    } 
    ?>
    <?php
    include "footer.php";
    ?>