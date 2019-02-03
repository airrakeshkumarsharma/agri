   <?php  
error_reporting(0);
$con=mysqli_connect('localhost','root','','paper');

if (!$con) {
    echo"database is not connected";
    exit();
}

session_start();

?>
