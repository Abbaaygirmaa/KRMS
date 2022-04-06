
<html>
<body>
<?php
include('dbcon.php');
//if(isset($_POST['userid'])){
//$userid=$_POST['userid'];
//$a=mysqlii_connect("localhost","root","");
if(!$con){die('not connet'.mysqli_error());}
//mysqlii_select_db("MA",$a);
$query="DELETE FROM deatham WHERE death_id='".$_GET['del_id']."'";
$result=mysqli_query($con, $query) or die($query);
if($result){
    echo '<script type="text/javascript">alert(" successfully account Deleted!!");window.location=\'todd.php\';</script>';
    echo "data is inserted";
       }
       else{
        header("location:serchdeth.php");
       echo "fail  data not inserted".mysqli_error();
mysqli_close($con);
}

//include("search.php");
?>
<html>
<body>
