
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
<div id="wrapper">
  
  <div id="content">

                    <h4 class="nk-block-title">The Following Is Data List For Registered Death</h4>
<div id="style_div" >
<form method="post">
<table width="755">
	<tr>
<td  style="font-size:18px; color:#006; text-indent:30px;">Insert First Name(Death_ID)/የሞት ሲም(አይዲ) አስግባ 
<input  type="text" placeholder="   Type in to search" name="searchtxt" title="Enter Id for search " class="search" autocomplete="off"/>
<style="float:right">
<input type="submit" name="btnsearch" value="Search" id="button-search" title="Search Died Information" />
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
            <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>Death_registration Id </strong></div></th>
            <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>Death_registration Form_Number </strong></div></th>
               <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>Birth_Registration Id </strong></div></th>
              <th height="50" bgcolor="#BDE0A8" class="style10"><div align="left" class="style9 style5"><strong>Full_Name</strong></div></th>
            
			   <th bgcolor="#BDE0A8" class="style3">Gender</th>
			    <th bgcolor="#BDE0A8" class="style3"width="30">Zone</th>
				 <th bgcolor="#BDE0A8" class="style3" width="30">wereda</th>
				  <th bgcolor="#BDE0A8" class="style3" width="30">kebele</th>
			   <th bgcolor="#BDE0A8" class="style3">Age</th>
			    <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style12">Title_name</div></th>
			   <th bgcolor="#BDE0A8" class="style3" width="30"><div align="left" class="style9 style5"><strong>Nationality</strong></div></th>
              <th  bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>Case_of_death</strong></div></th>
			  <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>Died_place</strong></div></th>
              <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>Died_date</strong></div></th>
              <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style12">Registered_Date</div></th>

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
		$sql_sel=mysqli_query($conn, "SElECT * FROM deathregistration WHERE death_id  like '%$key%' or fname like '%$key%' or fname like '%$key%'");
	
	else
		 $sql_sel=mysqli_query($conn,"SELECT * FROM deathregistration");	
       
    $i=0;
    while($row=mysqli_fetch_array($sql_sel)){
    $i++;
    $color=($i%2==0)?"lightblue":"white";
    ?>
      <tr bgcolor="<?php echo $color?>">
            
           <tr>
           
		   <td><?php echo $row['death_id'];?></td>
            <td><?php echo $row['constant'];?></td>
		    <td><?php echo $row['birthid'];?></td>
            <td><?php echo $row['fname'];?></td>
            <td><?php echo $row['sex'];?></td> 
			<td><?php echo $row['zon'];?></td>
             
            <td><?php echo $row['wereda'];?></td>          
			<td><?php echo $row['kebele'];?></td>  
            <td><?php echo $row['age'];?></td>
            <td><?php echo $row['titile_name'];?></td>
            <td><?php echo $row['citizenship'];?></td>
			
			<td><?php echo $row['case_of_death'];?></td>
			<td><?php echo $row['place_of_death'];?></td>
		    <td><?php echo $row['dethdate'];?></td>
            <td><?php echo $row['date'];?></td>	
	
        </tr>
            			
			<script language="javascript">
			function deleteme(delid)
			{
				if(confirm("ለማጥፋት እርግጠኛ ነዎት ?")){
					window.location.href='./eventregistrar/deldeth.php?del_id=' +delid+'';
				}
			}
		</script>	
			
    <?php	
    }
	// ----- for search studnens------	
	$records = mysqli_num_rows($sql_sel);
    ?>
	 <tr>
<td colspan="5" class="style3"><div align="center" class="style12">
                <?php  echo "Total [".$records."] Death  /"; ?>
                <?php  echo "ጠቅላላ [".$records."] ሞት"; ?> </div>
</td>
     </tr>
    </table>
</form>
</div>
<script src="bs/jquery/jquery.min.js"></script>
</div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
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
<script src="bs/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>