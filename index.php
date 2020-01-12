<?php 

  // MySQLi or PDO - can use either MySQLi is an easier procedural method.  Should learn PDO when I can
  $conn = mysqli_connect('localhost', 'un4h9q4cq4qq9', 'bQ5~R3d#5|^2', 'dbvxpegdk288uk' );

   // Check connection working
   if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
   }

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>
<?php include('templates/footer.php'); ?>



</html>
