
<html>
<body>
<?php
  include('dbcon.php');
//if(isset($_POST['userid'])){
//$userid=$_POST['userid'];
//$a=mysqli_connect("localhost","root","");
if(!$con){die('not connet'.mysqli_error());}
//mysqli_select_db("MA",$a);
$query="DELETE FROM birthregitraton WHERE child_id='".$_GET['del_id']."'";
$result=mysqli_query($con, $query) or die($query);

if($result){
    echo '<script type="text/javascript">alert(" successfully account Deleted!!");window.location=\'tdob.php\';</script>';
    echo "data is inserted";
       }
       else{
        header("location:tdob.php");
       echo "fail  data not inserted".mysqli_error();
mysqli_close($con);
}
//include("search.php");
?>
<html>
<body>
