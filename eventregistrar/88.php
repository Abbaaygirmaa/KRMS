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
<script src="/bs/jquery/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
	
<?php		
$id=$_GET['id'];
$sql = "select * from birthregitration WHERE id='$id'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result))
{

$id=$row['id'];                      
$constant=$row['constant'];
$child_photo=$row['child_photo'];
$fullname=$row['fullname'];
$sex=$row['sex'];
$date_of_birth=$row['date_of_birth'];
$Place_of_birth=$row['Place_of_birth'];


$zone=$row['zone'];                         
$wereda=$row['wereda'];
$kebele=$row['kebele'];
$nationality=$row['nationality'];
$motherfullname=$row['motherfullname'];
$mothercitzn=$row['mothercitzn'];


$fatherfulnam=$row['fatherfulnam'];                         
$fatherctznship=$row['fatherctznship'];
$date=$row['date'];
$date1=date('Y-m-d ');
} 
?>


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
        <a class="dropdown-item" href="eventregistrar/confirmation.php">Marriage Registration<br>( የጋብቻ ምዝገባ )</a><br>
        <a class="dropdown-item" href="eventregistrar/update.php">Divorce Registration<br>( የፍቺ ምዝገባ )</a>
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
            <a class="dropdown-item" href="eventregistrar/ab.php">Birth Info?</a>
            <a class="dropdown-item" href="eventregistrar/view_birth.php">Birth Info List?</a>
            <a class="dropdown-item" href="eventregistrar/ad.php">Death Info?</a>
            <a class="dropdown-item" href="eventregistrar/am.php">Marriage Info? </a>
            <a class="dropdown-item" href="eventregistrar/add.php">Divorce Info?</a>
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
<center> <table align="center" background="#eee"  height="300" width="800" bordercolor="black">
<div id="wrapper">
  
  <div id="content">

<td height="5">
<tr>
<td height="20" bgcolor="#eeeeee"><span class="style6"><font color=blue face=arial size=5>
<i><image align ="left"width="80" height="70" src="image/eti(1).jpg"><image align ="right"width="80" height="70" src="image/sss.jpg">
<center>Kebele  <br/> Event Registration Office <br/><u>Birth Certificate</u></center>

</i>
</font></td>

  </tr>
 <form id="upbr" name="upbr" method="POST" onSubmit="return validate(this) ;">
  </tr>
 <form id="upbr" name="upbr" method="POST" onSubmit="return validate(this) ;">
 <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/<?php echo $child_photo?>"  align="left"alt=" "width="60" height="70" style="border:1px solid #333333;">

 <text align="center"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Birth Registration Id: <u>&nbsp;&nbsp;<?php echo $id?>&nbsp;&nbsp;&nbsp;&nbsp;</u></b><br/>
<text align="center"> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Birth Registration Form Number:<u>&nbsp;&nbsp;<?php echo $constant?>&nbsp;&nbsp;&nbsp;&nbsp;</u></b></td></tr>
<tr><td> <b>Child Full Name:<u>&nbsp;&nbsp;<?php echo $fullname?>&nbsp;&nbsp;&nbsp;&nbsp;</u></td></tr>

<tr><td> <b>Gender: <u>&nbsp;&nbsp;<?php echo $sex?>&nbsp;&nbsp;&nbsp;&nbsp;</u></td></tr>
<tr><td> <b>Date of Birth:<u>&nbsp;&nbsp;<?php echo $date_of_birth?>&nbsp;&nbsp;&nbsp;&nbsp;</u></td></tr>
<tr><td> <b>Place of Birth:<u>&nbsp;&nbsp;<?php echo $Place_of_birth?>&nbsp;&nbsp;&nbsp;&nbsp;</u></td></tr>

<tr><td> <b>Zone: <u>&nbsp;&nbsp;<?php echo $zone?>&nbsp;&nbsp;&nbsp;&nbsp;</u></td></tr>
<tr><td> <b>Wereda:<u>&nbsp;&nbsp;<?php echo $wereda?>&nbsp;&nbsp;&nbsp;&nbsp;</u></td></tr>
<tr><td> <b>Kebele:<u>&nbsp;&nbsp;<?php echo $kebele?>&nbsp;&nbsp;&nbsp;&nbsp;</u></td></tr>

<tr><td> <b>Child Nationality:<u>&nbsp;&nbsp;<?php echo $nationality?>&nbsp;&nbsp;&nbsp;&nbsp;</u></td></tr>
<tr><td> <b>Mother Full Name:<u>&nbsp;&nbsp;<?php echo $motherfullname?>&nbsp;&nbsp;&nbsp;&nbsp;</u></td></tr>
<tr><td> <b>Mother Nationality:<u>&nbsp;&nbsp;<?php echo $mothercitzn?>&nbsp;&nbsp;&nbsp;&nbsp;</u></td></tr>

<tr><td> <b>Father Full Name: <u>&nbsp;&nbsp;<?php echo $fatherfulnam?>&nbsp;&nbsp;&nbsp;&nbsp;</u></td></tr>
<tr><td> <b>Father Nationality:<u>&nbsp;&nbsp;<?php echo $fatherctznship?>&nbsp;&nbsp;&nbsp;&nbsp;</u></td></tr>

<tr><td><b> Registered date:<u>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $date ?>&nbsp;&nbsp;&nbsp;&nbsp;</u></td></tr>

<tr><td><b> Certified date:<u>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $date1 ?>&nbsp;&nbsp;&nbsp;&nbsp;</u></td></tr>	
<tr><td><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</u></td></tr>	
<tr><td>Civil Status Officer<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>	</td></tr>	
<br/><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seal <a checkbox="approve"> </td></tr>
<tr><td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td></tr>



</td>
</form>	
</table>

  <div id="print" align="center">
  <button onclick="myFunction()">print</button>
  <script>
function myFunction() {
    window.print();
}
</script>
</div>
		
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