

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
die('not connected'.mysqli_error());}
else

if(isset($_POST['submit'])){

$birthid=$_POST['birthid'];
$fname=$_POST['fname'];
$sex=$_POST['sex'];
  
$zon=$_POST['zon'];
$wereda=$_POST['wereda'];
$kebele=$_POST['kebele'];
 $age=$_POST['age'];
 $titile_name=$_POST['titile_name'];
 $citizenship=$_POST['citizenship'];
 $case_of_death=$_POST['case_of_death'];
 $place_of_death=$_POST['place_of_death'];
$dethdate=$_POST['dethdate'];
$date=date('Y-m-d H:m:s');
$child_photo = $_FILES["child_photo"]["name"] or die('can not get post');

$sql="INSERT INTO `deathregistration`(`death_id`, `birthid`, `fname`, `sex`, `zon`, `wereda`, `kebele`, `age`, `titile_name`, `citizenship`, `case_of_death`, `place_of_death`, `dethdate`, `date`) 
VALUES ('[value-1]','$birthid','$fname','$sex','$zon','$wereda','$kebele','$age','$titile_name','$citizenship','$case_of_death','$place_of_death','$dethdate','$date','child_photo')";


$result=mysqli_query($conn,$sql);
if($result){
 echo '<script type="text/javascript">alert(" Thank you for your Registration!! data is inserted");window.location="./eventregistrar/td.php";</script>';
 echo "data is inserted";
 
    }
    else 
	//header("location:.html");
   echo '<script type="text/javascript">alert(" data is not inserted");window.location="./eventregistrar/td.php";</script>'.mysqli_error($conn);
mysqli_close($conn);
}
?>