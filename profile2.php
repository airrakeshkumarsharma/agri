<?php
include('config.php');
include('header.php');
if(isset($_POST['submit']))
{
  $password=mysqli_real_escape_string($con,$_POST['password']);
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $rollno=mysqli_real_escape_string($con,$_POST['rollno']);
  $file=$_FILES['file'];
    $filename=$file['name'];
    $tmpname=$file['tmp_name'];
    $target="img/uploads/";
    $files=explode(".", $filename);
    $count=count($files);
    $results=$count-1;
    if($files[$results]=="jpg")
    {
        $move = move_uploaded_file($tmpname, $target.$filename);
        if ($move) {
         
  $query="UPDATE users set email='".$email."',rollno='".$rollno."',photo='".$filename."',password='".$password."' where id='".$_SESSION['id']."'";
  $result= mysqli_query($con, $query);
              if ($result) {
                echo "<script>location.href='?msg=1'</script>";
            }
            else{
                echo "<script>location.href='?msg=2'</script>";
            }
        }
        else{
            echo "file uploadig failed";
        }
    }
    else
        echo "please insert pdf files only";
}
?>


        <form method=post enctype="multipart/form-data">

            <div class="col-md-6 col-xs-12 thumbnail" >
                <h3 class="text text-center">Profile</h3><hr>
                
                <div class="row">
                    <?php
                    $query="SELECT * FROM users WHERE id='".$_SESSION['id']."'";
                    $result=mysqli_query($con,$query);
                    $fetch_details=mysqli_fetch_array($result);
                    ?>
                    <div class="col-xs-2 col-xs-offset-4">
                       <img src="img/uploads/<?php echo $fetch_details['photo']; ?>" style="width:105px; border-radius: 50%;"> 
                    </div>
                  </div>
        
                <br>
                <div class="row">
                    <div class="col-xs-2 ">
                <input type="file" name="file" required>
            </div>
        </div>
       <br>
         <div class="form-group input-group">
          <span class="input-group-addon">Email</span>
             <input type="text" class="form-control" placeholder="Enter Email" name="email" required value="<?php echo $fetch_details['email']; ?>">
         </div>
                  <div class="form-group input-group">
          <span class="input-group-addon">username</span>
             <input type="text" class="form-control" placeholder="Enter username" name="username" required value="<?php echo $fetch_details['username'];?>">
         </div>

         <div class="form-group input-group ">
          <span class="input-group-addon">Rollno</span>
             <input type="text" class="form-control" placeholder="Enter Rollno" name="rollno" required value="<?php echo $fetch_details['rollno'];?>">
         </div>
             <button class="btn  col-xs-offset-9" name="submit">Submit</button>
             
            </div>
        </form>
<?php include('footer.php');?>