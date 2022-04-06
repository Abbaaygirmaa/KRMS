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
<title>::. Build Bright University .::</title>
<link rel="stylesheet" type="text/css" href="css/style_view.css" />
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
            &nbsp;&nbsp; <span class="nk-menu-icon"><em class="icon ni ni-user-fill-c"></em></span>

                         <span class="nk-menu-text">Event Registration</span>
         </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="eventregistrar/tb.php">Birth Registation</a>
              <a class="dropdown-item" href="eventregistrar/view_house.php">Death Registation</a>
              <a class="dropdown-item" href="eventregistrar/confirmation.php">Marriage Registation</a>
              <a class="dropdown-item" href="eventregistrar/update.php">Divorce Registation</a>
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
<center> <table align="center" bgcolor="#eee" border="black" height="500" width="500">


<div id="wrapper">
<div id="content">
<div class="content">

<tr>
        <td height="20" colspan="2" bgcolor=""><strong><h1><center>Updte Birth Form</center></h1></td>
</tr>		
                
<?php
$child_id=$_GET['child_id'];
$sql = "SELECT * from birthregitration where child_id='$child_id'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result))
{
        $child_id=$row['child_id'];
$constant=$row['constant'];
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
  $child_photo=$row['child_photo'];
 $date=$row['date'];
} 
?>
<td height="15">
 <form id="upbr" name="upbr" method="POST" action="./eventregistrar/99.php" onSubmit="return validate(this) ;">

<tr><td>Birth Registration Id:</td><td><input type="text" value="<?php echo $child_id?>" class="input-medium" name="child_id"/><br/><br/></td><tr>
<tr><td> Birth Registration Form Number: </td><td><input type="text" value="<?php echo $constant?>" class="input-medium" name="constant"/><br/><br/></td><tr>
<tr><td> Child fullname:</td><td><input type="text" value="<?php echo $fullname ?>" class="input-medium" name="fullname"/><br><br/></td></tr>

<tr><td> Gender: </td><td><input type="text" value="<?php echo $sex?>" class="input-medium" name="sex"/><br/><br/></td><tr>
<tr><td> Bith Date:</td><td><input type="text" value="<?php echo $date_of_birth?>" class="input-medium" name="date_of_birth"/><br/><br/></td><tr>
<tr><td> Birth Place:</td><td><input type="text" value="<?php echo $Place_of_birth ?>" class="input-medium" name="Place_of_birth"/><br><br/></td></tr>

<tr><td> Zone: </td><td><input type="text" value="<?php echo $zone?>" class="input-medium" name="zone"/><br/><br/></td><tr>
<tr><td> Wereda:</td><td><input type="text" value="<?php echo $wereda?>" class="input-medium" name="wereda"/><br/><br/></td><tr>
<tr><td> Kebele:</td><td><input type="text" value="<?php echo $kebele ?>" class="input-medium" name="kebele"/><br><br/></td></tr>
<tr><td> Child Nationality:</td><td><input type="text" value="<?php echo $nationality ?>"placeholder="" class="input-medium" name="nationality" /><br/><br/></td></tr>
			
<tr><td> Mother fullname:</td><td><input type="text" value="<?php echo $motherfullname ?>" class="input-medium" name="motherfullname"/><br/><br/></td></tr>
<tr><td> Mother Nationality</td><td><input type="text" value="<?php echo $mothercitzn ?>" class="input-medium" name="mothercitzn"/><br/><br/></td></tr>
<tr><td> Father fullname:</td><td><input type="text" value="<?php echo $fatherfulnam ?>"placeholder="" class="input-medium" name="fatherfulnam" /><br/><br/></td></tr>
			
<tr><td> Father Nationality:</td><td><input type="text" value="<?php echo $fatherctznship ?>" class="input-medium" name="fatherctznship"/><br/><br/></td></tr>
<tr><td> Child photo:</td><td><input type="text" value="<?php echo $child_photo ?>" class="input-medium" name="child_photo"/><br/><br/></td></tr>
<tr><td> Registered Date:</td><td><input type="text" value="<?php echo $date ?>"placeholder="" class="input-medium" name="date" /><br/><br/></td></tr
			
<tr><td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" align="center"name="update" value="update" class="btn btn-info" Onclick="return formValidator(this.form)" /></td></tr>
</form>	</td></tr>
</table>		
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