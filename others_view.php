<?php 
include ('config.php');
include('header.php');

 ?>
<div class="container-fluid">
    <div class="table-responsive">
        <table id="myTable" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>branch</th>
                    <th>course</th>
                    <th>year</th>
                    <th>semester</th>
                    <th>photo</th>
                    <th>add_by</th>
                
                </tr>
            </thead>
            <tbody>
                <?php 
                $sno = 1;
                    $query = "SELECT * FROM file  WHERE add_by!='".$_SESSION['nameuser']."'";
                    $result = mysqli_query($con,$query);
                    while ($fetch = mysqli_fetch_array($result)) {
                        $query="SELECT* FROM users where id='$fetch[add_by]'";
                        $fetch_user_detail=mysqli_fetch_array(mysqli_query($con,$query));
                        ?>
                        <tr>
                            <td><?php echo $sno ?></td>
                            <td><?php echo $fetch['branch'] ?></td>
                            <td><?php echo $fetch['course'] ?></td>
                            <td><?php echo $fetch['year'] ?></td>
                            <td><?php echo $fetch['semester'] ?></td>
                            <td><a target="_blank" href="img/uploads/<?php echo $fetch['photo'] ?>"><?php echo $fetch['photo'] ?></a></td>
                            <td><?php echo $fetch['add_by'] ?></td>
                        </tr>
                     <?php
                     $sno++;
                   }
                ?>  
    </tbody>
</table>
</div>
</div>
<?php include('footer.php');?>