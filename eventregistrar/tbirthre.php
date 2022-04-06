
<!DOCTYPE html>

<html lang="zxx" class="js">
<?php include './include/header.php' ?>
<?php include '../database/database.php' ?>
<?php include '../include/session.php' ?>
<?php require '../include/function.php' ?>
<?php
//login confirmation
confirm_logged_in();

?>
<?php
if(!$conn){
die('not connected'.mysql_error());}
else
//echo"connected";

  if(isset($_POST['submit'])){
$constant=$_POST['constant'];
$fullname=$_POST['fullname'];
 $sex=$_POST['sex'];
 $date_of_birth=$_POST['date_of_birth'];
 $Place_of_birth=$_POST['Place_of_birth'];

 $zone=$_POST['zone'];
$wereda=$_POST['wereda'];
 $kebele=$_POST['kebele'];
 $nationality=$_POST['nationality'];
 $motherfullname=$_POST['motherfullname'];
 $mothercitzn=$_POST['mothercitzn'];
 $fatherfulnam=$_POST['fatherfulnam'];
 $fatherctznship=$_POST['fatherctznship'];
 $date=date('Y-m-d H:m:s');
 $child_photo = $_FILES["child_photo"]["name"] or die('can not get post');
 
$sql="INSERT INTO birthregitration (constant,fullname,sex,date_of_birth,Place_of_birth,zone,wereda,kebele,nationality,motherfullname,mothercitzn,fatherfulnam,fatherctznship,child_photo,date) 
VALUES('$constant','$fullname','$sex','$date_of_birth','$Place_of_birth','$zone','$wereda','$kebele','$nationality','$motherfullname','$mothercitzn','$fatherfulnam','$fatherctznship','$child_photo','$date')";
$result=mysqli_query($conn, $sql);
if($result){
 echo '<script type="text/javascript">alert(" Thank you for your Registration!! data is inserted");window.location=\'./eventregistrar/tb.php\';</script>';
 echo "data is inserted";
    }
    else 
	//header("location:.html");
   echo '<script type="text/javascript">alert(" data is not inserted");window.location=\'tb.php\';</script>'.mysqli_error($conn);
mysql_close($conn);
}
?>