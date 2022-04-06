<?php
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) || $role!="admin"){
      header('Location: indexa.php?err=2');
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::. wku University.::</title>
<link rel="stylesheet" type="text/css" href="css/style_view.css" />


<link href="bs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/cs.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <script src="/bs/jquery/jquery.min.js"></script>
</head>

<body>
   <!-- Navigation -->
   <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="./image/logooo.png" alt=" General Logo" /></a>
    
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        
          
      

        <?php echo" welcome to: ";echo  $_SESSION['sess_username'];?>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="adminhome.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              View vital event
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="ab.php">View Birth</a>
              <a class="dropdown-item" href="ad.php">View Death</a>
              <a class="dropdown-item" href="aa.php">View Adoption</a>
              <a class="dropdown-item" href="am.php">View Marriage</a>
              <a class="dropdown-item" href="add.php">View Divorce</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              View Report
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="rb.php">Birth Report</a>
              <a class="dropdown-item" href="rm.php">Marriage Report</a>
              <a class="dropdown-item" href="ra.php">Adoption Report</a>
              <a class="dropdown-item" href="rd.php">Death Report</a>
              <a class="dropdown-item" href="rdd.php"> Divorce Report</a>
              <a class="dropdown-item" href="all.php">View all report</a>
          
            </div>
          </li>
    
          <li class="nav-item">
            <a class="nav-link" href="createA.php">Manage Account</a>
         
          </li>
          <li class="nav-item">
            <a class="nav-link" href="insert_neww.php">post news</a>
          </li>


         
          <li class="nav-item">
            <a class="nav-link" href="ff.php">feedback</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="vff.php"> View fedback</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="logout.php"> Logout</a>
          </li>
        </ul>
      </div>
   
    </div>
  </nav>
<div id="style_div" >
<form method="post">
<table width="755">
	<tr>
    	<td align="center"width="190px" style="font-size:18px; color:#006; text-indent:30px;">Insert divorce Id
       
        	<input type="text" name="searchtxt" title="Enter Id for search " class="search" autocomplete="off"/>
        
        <style="float:right">
        	<input type="submit" name="btnsearch" value="Search" id="button-search" title="Search Student" />
        </td>
    </tr>
</table>
</form>
</div><!--- end of style_div -->
<br />
<div id="content">
<form method="post">

    <table border="1" width="1050px" align="center" cellpadding="3" class="mytable" cellspacing="0">
        <tr bgcolor="#BDE0A8">
            <th>Divorce_Registration Id</th>
            <th>Divorce_Registration Form_number</th>
            <th>Husband's_Bitrh Registration_Id</th>
			
			<th>Wife's_Bitrh Registration_Id</th>
            <th>Marrage Registration_Id</th>
            <th>Husband Full_Name</th>
			
			<th>Husband_Birth Date</th>
            <th> Husband_Birth Date</th>
            <th>Husband_Nationality</th>
			
			<th>Husband_Photo</th>
            <th>Zone</th>
            <th>Wereda</th>
			
			<th>kebele</th>
            <th>Wife_Full Name</th>
            <th>Wife_Birth_date</th>
			
            <th>Wife_Birth_place</th>
            <th>Wife_Nationality</th>
			<th>Wife_photo</th>
            <th>Zone</th>
            <th>Wereda</th>
            <th>Kebele</th>
			<th>divorced_Date</th>
			<th>Couse_of_Divorce</th>
            <th>Divorce_Registared_Date</th>
      
        </tr>
        
        <?php
		include('dbcon.php');
if(!$con){
die('not connected'.mysqli_error());}
else
//echo"connected";

	$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysqli_query($con, "SElECT * FROM divorceam WHERE div_id  like '%$key%' or date like '%$key%'");
	
	else
		 $sql_sel=mysqli_query($con,"SELECT * FROM divorceam");
	
		
       
    $i=0;
    while($row=mysqli_fetch_array($sql_sel)){
    $i++;
    $color=($i%2==0)?"lightblue":"white";
    ?>
      <tr bgcolor="<?php echo $color?>">
            
                     
            <td><?php echo $row['div_id'];?></td>
            <td><?php echo $row['constant'];?></td>
            <td><?php echo $row['hdivbrthid'];?></td>
			
			<td><?php echo $row['wdivbrthid'];?></td>
			<td><?php echo $row['marrage_id'];?></td>
            <td><?php echo $row['hfulname'];?></td>
            <td><?php echo $row['hbirthdt'];?></td>
            <td><?php echo $row['hplacbirth'];?></td>
            <td><?php echo $row['hcitizn'];?></td>
			<td style="text-align:center; margin-top:10px; word-break:break-all; width:100px; line-height:90px;">
<?php if($row['div_id'] != ""): ?>
<img src="image/<?php echo $row['hasphot']; ?>" width="60" height="60" style="border:1px solid #333333;">
<?php else: ?>
<img src="image/" width="60" height="60" style="border:1px solid #333333;">
<?php endif; ?>
</td>
            <td><?php echo $row['zone'];?></td>
           <td><?php echo $row['wereda'];?></td>
            <td><?php echo $row['role'];?></td>
            <td><?php echo $row['wfulname'];?></td>
			
			<td><?php echo $row['wbrthdate'];?></td>
	       <td><?php echo $row['wfbrthplace'];?></td> 
	      <td><?php echo $row['wcitzn'];?></td>
			<td style="text-align:center; margin-top:10px; word-break:break-all; width:100px; line-height:90px;">
<?php if($row['div_id'] != ""): ?>
<img src="image/<?php echo $row['wifphot']; ?>" width="60" height="60" style="border:1px solid #333333;">
<?php else: ?>
<img src="image/" width="60" height="60" style="border:1px solid #333333;">
<?php endif; ?>
</td>

			<td><?php echo $row['wzone'];?></td>
            <td><?php echo $row['wwereda'];?></td>
            <td><?php echo $row['role'];?></td>
			
            <td><?php echo $row['wdivdate'];?></td>
			<td><?php echo $row['couse'];?></td>
			<td><?php echo $row['date'];?></td>
			
            
           </tr>			
			<script language="javascript">
			function deleteme(delid)
			{
				if(confirm("ለማጥፋት እርግጠኛ ነዎት ?")){
					window.location.href='deldivo.php?del_id=' +delid+'';
				}
			}
		   </script>	
        
             
        </tr>
    <?php	
    }
	// ----- for search studnens------	
		
$records = mysqli_num_rows($sql_sel);
    ?>
	 <tr>
              <td colspan="5" class="style3"><div align="center" class="style12"><?php echo "Total ".$records." Records"; ?> </td>
            </tr>
    </table>
</form>
</div>
<script src="bs/jquery/jquery.min.js"></script>
  <script src="bs/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>