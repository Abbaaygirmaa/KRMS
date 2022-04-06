
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
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="/bs/jquery/jquery.min.js"></script>
</head>
<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <?php include './include/sidebar.php' ?>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <?php include './include/navbar.php' ?>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">

<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-menu-trigger">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em
                    class="icon ni ni-menu"></em></a>
        </div>
        <div class="nk-sidebar-brand">
            <a href="./eventregistrar/index.php" class="logo-link nk-sidebar-logo">
            <h3>Event Registrar</h3>
            </a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">

         <li class="nk-menu-item">
         <a class="nav-link dropdown-toggle" href="./eventregistrar/index.php" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            &nbsp;&nbsp;<span class="nk-menu-icon"><em class="icon ni ni-user-fill-c"></em></span>
                            <span class="nk-menu-text">Event Registration</span>               
         </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="nav-link dropdown-toggle" href="./eventregistrar/index.php" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                &nbsp;&nbsp;<span class="nk-menu-icon"><em class="icon ni ni-user-fill-c"></em></span>
                            <span class="nk-menu-text">Do You Want To Register Event?</span>   
               </a>
        
         <div>
        <a class="dropdown-item" href="eventregistrar/tb.php">Birth Registration<br>( የወልድ ምዝገባ )</a><br>
        <a class="dropdown-item" href="eventregistrar/td.php">Death Registration<br>( የሞት ምዝገባ )</a><br>
        <a class="dropdown-item" href="eventregistrar/marr.php">Marriage Registration<br>( የጋብቻ ምዝገባ )</a><br>
        <a class="dropdown-item" href="eventregistrar/Divorce.php">Divorce Registration<br>( የፍቺ ምዝገባ )</a>
        </div>
            </li>




        <li class="nk-menu-item">
         <a class="nav-link dropdown-toggle" href="./eventregistrar/index.php" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            &nbsp;&nbsp;<span class="nk-menu-icon"><em class="icon ni ni-account-setting-alt"></em></span>
                            <span class="nk-menu-text">View Event</span>               
         </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="nav-link dropdown-toggle" href="./eventregistrar/index.php" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            &nbsp;&nbsp;<span class="nk-menu-icon"><em class="icon ni ni-account-setting-alt"></em></span>
                            <span class="nk-menu-text">Do You Want To View Event?</span>
                        
         </a>
        
         <div>
    <a class="dropdown-item" href="eventregistrar/ab.php"><strong>Birth Info?</strong></font></a><br>
    <a class="dropdown-item" href="eventregistrar/view_birth.php"><strong>Birth Info List?</strong></font></a><br>
    <a class="dropdown-item" href="eventregistrar/ad.php"><strong>Death Info?</strong></a><br>
    <a class="dropdown-item" href="eventregistrar/am.php"><strong>Marriage Info?</strong> </a><br>
    <a class="dropdown-item" href="eventregistrar/add.php"><strong>Divorce Info?</strong></a>
        </div>
            </li>

            <li class="nk-menu-item">
                        <a href="eventregistrar/view_profile.php" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-list"></em></span>
                            <span class="nk-menu-text">View Profile</span>
                        </a>
            </li>
                    <li class="nk-menu-item">
                        <a href="logout.php" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-power"></em></span>
                            <span class="nk-menu-text">Logout</span>
                        </a>
                    </li><!-- .nk-menu-item -->


                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>



<center> <table align="center" background="#eee" width="800" bordercolor="black">
<div id="wrapper">
  
  <div id="content">

            <h4 class="nk-block-title">The Following Is Data List For Registered Child</h4>

<div id="style_div" >
<form method="post">
<table width="755">
<tr>
    	<td width="190px" style="font-size:18px; color:#006; text-indent:30px;">Insert First Name(Birth_ID)/የዎላዲ ሲም(አይዲ) አስግባ 
        
        <input type="text" name="searchtxt" title="Enter Id for search " class="search" autocomplete="off"/>
        
        <style="float:right">
        	<input type="submit" name="btnsearch" value="Search" id="button-search" title="Search chidren" />
        </td>
    </tr>
</table>
</form>
</div><!--- end of style_div -->
<br />
<div id="content">
<form method="post">

    <table border="1" width="1050px" align="center" cellpadding="3" class="mytable" cellspacing="0">
        <tr>
            <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>BirthRegistration ID</strong></div></th>
            
              <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>Birth_Registration FormNumber</strong></div></th>
              <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style12">Child_Full Name</div></th>
			   <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style12">gender</div></th>
			   <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style12">Birth_date</div></th>
			    <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style12">Birth_Place</div></th>
			   <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>Zone</strong></div></th>
              <th height="32" bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>Wereda</strong></div></th>
              <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>Kebele</strong></div></th>	  
			  <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>Child Nationality</strong></div></th>
              <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style12">Mother's_Full Name</div></th>
			   <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style12">Mother's_Nationality</div></th>
			  
			  <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>Father's Full_Name</strong></div></th>
              <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style12">Father's_Nationality</div></th>
			   <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style12">Child_Photo</div></th>
			     <th height="50" bgcolor="#BDE0A8" class="style10"><div align="left" class="style9 style5"><strong>Child_Registered date </strong></div></th>    
                 <th height="50" bgcolor="#BDE0A8" class="style10"><div align="left" class="style9 style5"><strong>Update Info </strong></div></th>         
                <th height="50" bgcolor="#BDE0A8" class="style10"><div align="left" class="style9 style5"><strong>Delete</strong></div></th>  
                 <th height="50" bgcolor="#BDE0A8" class="style10"><div align="left" class="style9 style5"><strong>Certificate </strong></div></th>    
			</tr>       
        <?php
if(!$conn){
die('not connected'.mysqli_error());}
else
//echo"connected";

	$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysqli_query($conn, "SElECT * FROM birthregitration WHERE id  like '%$key%' or fullname like '%$key%'");
	
	else
		 $sql_sel=mysqli_query($conn, "SELECT * FROM birthregitration");    
    $i=0;
    while($row=mysqli_fetch_array($sql_sel)){
    $i++;
    $color=($i%2==0)?"lightblue":"white";
    ?>
      <tr bgcolor="<?php echo $color?>">
            
           <tr>    
		    <td><?php echo $row['id'];?></td>
           
            <td><?php echo $row['constant'];?></td>
            <td><?php echo $row['fullname'];?></td>
            <td><?php echo $row['sex'];?></td>
			
			<td><?php echo $row['date_of_birth'];?></td>
            <td><?php echo $row['Place_of_birth'];?></td>
            <td><?php echo $row['zone'];?></td>
            <td><?php echo $row['wereda'];?></td>
			
            <td><?php echo $row['kebele'];?></td>
            <td><?php echo $row['nationality'];?></td>
            <td><?php echo $row['motherfullname'];?></td>
            <td><?php echo $row['mothercitzn'];?></td>
			<td><?php echo $row['fatherfulnam'];?></td>
		    <td><?php echo $row['fatherctznship'];?></td>
			<td style="text-align:center; margin-top:10px; word-break:break-all; width:100px; line-height:90px;">
<?php if($row['id'] != ""): ?>
<img src="image/<?php echo $row['child_photo']; ?>" width="60" height="60" style="border:1px solid #333333;">
<?php else: ?>
<img src="image/" width="60" height="60" style="border:1px solid #333333;">
<?php endif; ?>
</td>
<td><?php echo $row['date'];?></td>  

<td><a href="./eventregistrar/telea.php?tag=student_entry&opr=upd&id=<?php echo $row['id'];?>" title="Update"><img src="image/e.jpg" height="20" width="25" align="center"></a></td>
            <td><input type="button" style="background-color: red"  onClick="deleteme(<?php echo $row['id'];?>)" name="delete" value="Delete" title="Delete"></td>
            <td><strong><a href="./eventregistrar/88.php?id=<?php echo $row['id'];?>" title="ምስክር ወረቀት">certaficate</a></strong></td> 
           </tr>            
         

           </tr>            
            <script language="javascript">
            function deleteme(delid)
            {
                if(confirm("are you sure to delete ?")){
                    window.location.href='./eventregistrar/tele.php?del_id=' +delid+'';
                }
            }

           </tr>			
         
           </tr>			
			<script language="javascript">
		
			{
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
            <td colspan="4" class="style3"><div align="center" class="style12">
                <?php  echo "Total [".$records."] Children  /"; ?>
                <?php  echo "ጠቅላላ [".$records."] ህጻናት"; ?> </div>
            </td>
   </tr>
    </table>
</form>
</div>
                                  </div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- content @e -->
                <!-- footer @s -->
                <?php include './include/footer.php' ?>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->

    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <?php include '../include/script.php' ?>  


</body>
</html>