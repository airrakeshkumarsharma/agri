<?php include 'header.php'; 
session_start();
$username = $_SESSION['nameuser'];
$id = $_SESSION['id'];
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<div class="w3-row-padding w3-margin-bottom">
    
    <table id="table_id" class="display table-responsive">
        <thead>
            <tr>
                <th>sno</th>
                <th>Survey_number</th>
                <th>Full_area</th>
                <th>not_cultivated</th>
                <th>Cultivation_area</th>
                <th>Account_number</th>
                <th>land_rent</th>
                <th>land_rented</th> 
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM `account1` WHERE `id`=$id";
            $fetch = mysqli_query($con, $query);
            while($account = mysqli_fetch_array($fetch))
            { 
            ?>
                <tr>
                    <td><?php echo $account['sno']; ?></td>
                    <td><?php echo $account['Survey_number']; ?></td>
                    <td><?php echo $account['Full_area']; ?></td>
                    <td><?php echo $account['not_cultivated']; ?></td>
                    <td><?php echo $account['Cultivation_area']; ?></td>
                    <td><?php echo $account['Account_number']; ?></td>
                    <td>
                        <button data-target="#myModal" data-toggle="modal"  onclick="landrent(<?php echo $account['id']?>, <?php echo $account['sno']?>)">view</button>
                    </td>


                    <td><button data-target="#myModal" data-toggle="modal"  onclick="landrented(<?php echo $account['id']?>, <?php echo $account['sno']?>)">view</button></td>
                </tr>

            <?php
            }
            ?>
            
        </tbody>
    </table>
    
    <div class="container">
  <!-- Trigger the modal with a button -->
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
  </div>


<script type="text/javascript">
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
function landrent(id,sno){
    $.ajax({
        type : "post",
        url : "rent.php",
        data : {"id": id, "sno":sno},
        success : function(data){
            $(".modal-body").html(data)
        }
    });
}
function landrented(id,sno){
        $.ajax({
        type : "post",
        url : "rented.php",
        data : {"id": id, "sno":sno},
        success : function(data){
            $(".modal-body").html(data)
        }
    });
}
</script>
         
         
<?php include 'footer.php'; ?>