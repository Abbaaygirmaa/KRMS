<?php
define("db_server","localhost");
define("db_user","root");
define("db_name","kms");
define("db_password","");
$conn=mysqli_connect(db_server,db_user,db_password);
if(!$conn)
{
die("Error in connection".mysqli_error());
}
$db_select=mysqli_select_db($conn,db_name);
if(!$db_select)
{
die("Error in db select".mysqli_error());
}
?>