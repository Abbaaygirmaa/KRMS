<html>
<head>

</title>
</head>
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
<?php
//$con=mysqli_connect("localhost","root","") or die('not connected');
$child_id=$_REQUEST['child_id'];
$constant=$_REQUEST['constant'];
$fullname=$_REQUEST['fullname'];
 $sex=$_REQUEST['sex'];
 $date_of_birth=$_REQUEST['date_of_birth'];
 $Place_of_birth=$_REQUEST['Place_of_birth'];
 
 $zone=$_REQUEST['zone'];
$wereda=$_REQUEST['wereda'];
 $kebele=$_REQUEST['kebele'];
 
 $nationality=$_REQUEST['nationality'];
 $motherfullname=$_REQUEST['motherfullname'];
 $mothercitzn=$_REQUEST['mothercitzn'];
 $fatherfulnam=$_REQUEST['fatherfulnam'];
 $fatherctznship=$_REQUEST['fatherctznship'];
  $child_photo=$_REQUEST['child_photo'];
 $date=$_REQUEST['date'];
//mysqli_select_db("MA",$con) or die("can not select the database");
$query="UPDATE birthregitration SET child_id='".$child_id."',constant='".$constant."',fullname='".$fullname."',sex='".$sex."',date_of_birth='".$date_of_birth."',Place_of_birth='".$Place_of_birth."',
 zone='".$zone."',wereda='".$wereda."',kebele='".$kebele."',nationality='".$nationality."',motherfullname='".$motherfullname."',mothercitzn='".$mothercitzn."',
 fatherfulnam='".$fatherfulnam."',fatherctznship='".$fatherctznship."',child_photo='".$child_photo."',date='".$date."' WHERE child_id='".$child_id."' ";
$con=mysqli_query($con,$query);
if(!$con)
{
die('data can not be Update' . mysqli_error());
}
else
{
echo '<script type="text/javascript">alert(" successfully updated!!");window.location=\'tdob.php\';</script>';
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
</div>
</body>

</html>