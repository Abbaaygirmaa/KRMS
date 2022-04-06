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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <script src="demo/js/jquery-1.6.1.min.js" type="text/javascript"></script>
  <script src="demo/js/jquery.datePicker-min.js" type="text/javascript"></script>
  <script type="text/javascript">
  $(window).ready(function(){
  $('#date-pick').datePicker({clickInput:true});
});
</script>
<script type="text/javascript">
  $(window).ready(function(){
  $('#date-pick1').datePicker({clickInput:true});
});
</script>
<script type="text/javascript">
  $(window).ready(function(){
  $('#date-pick2').datePicker({clickInput:true});
});
</script>
<meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script type="text/javascript">
function validate(form)
{
var A=form.death_id.value;
var B=form.fname.value;
var C=form.mname.value;
var D=form.lname.value;
var E=form.sex.value;
var R=form.age.value;
var F=form.titile_name.value;
var G=form.case_of_death.value;
var K=form.place_of_death.value;
var L=form.registration_date.value;

var O=form.religion.value;

var check = /^[a-z A-Z\ \']+$/;
 var isNumeric = /^[0-9]+$/;
 var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
 if(!check.test(A))
{
alert("please enter only letter for death_id name");
form.death_id.focus();
form.death_id.value="";
return false;
}
if(B=="")
{
alert("please not leave child fname empty?");
form.fname.focus();
form.fname.value="";
return false;
}
if(!check.test(C))
{
alert("please enter only letter for mname");
form.mname.focus();
form.mname.value="";
return false;
}
if(D=="")
{
alert("please enter last name?");
form.lname.focus();
form.lname.value="";
return false;
}
if(E=="")
{
alert("please enter  gender ");
form.sex.focus();
form.sex.value="";
return false;
}
if(R=="")
{
alert("please enter  age ");
form.age.focus();
form.age.value="";
return false;
}
if(!check.test(F))
{
alert("please enter titile_name ?");
form.titile_name.focus();
form.titile_name.value="";
return false;
}
if(G=="")
{
alert("please enter case_of_death?");
form.case_of_death.focus();
form.case_of_death.value="";
return false;
}

if(K=="")
{
alert("please enter his/her place_of_death?");
form.place_of_death.focus();
form.place_of_death.value="";
return false;
}
if(L=="")
{
alert("please select  registration_date?");
form.registration_date.focus();
form.registration_date.value="";
return false;
}
if(O=="")
{
alert("please select his/her religion?");
form.religion.focus();
form.religion.value="";
return false;
}

return true
}
</script>
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


    <h4><center><span style="color:#003300">Please Fill Death Information the space provided below</span></center></h4>&nbsp;&nbsp;&nbsp;&nbsp;
   <center> <table align="center" bgcolor="#eeeeee" border color="#CC66FF" cellpadding="1" cellspacing="1" width="600">
      <tr>
        <td height="27" bgcolor="#eed"><span class="style6"><strong><image align ="left"width="110" height="100" src="image/br2.jpg">
    <image align ="right"width="110" height="100" src="image/br1.jpg"></strong></span><h2><center>Death Registration Form</center> </h2></td>
      </tr>
      <tr>
        <td height="26">
          <form id="login" name="login" method="POST" enctype="multipart/form-data" action="./eventregistrar/tdeathre.php" onSubmit="return validate(this) ;">
            <table width="100%"  border="0" cellpadding="0" cellspacing="0">
       </tr>
       <tr>
        <td><font  height="32" color="red">*</font>Death Registration Form Number :</td>
      
                <td><span id="sprytextfield3">
                   <label>
                 <select name="constant"id="constant" onKeyPress="return ValidateAlpha(event)"required>
         <option   value="-1">-select registration form number-</option>
         <option>024513</option>
         
        </select>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
        <br>
       <tr>
        <td><font  height="32" color="red">*</font>Birth Registration ID : </td>
          
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" size="32px" placeholder="Type Here Birth Registration ID"  type="text" name="birthid" id="birthid" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
         </tr>
         <tr>
        <tr>
          <td><font  height="32" color="red">*</font>Died Full Name / ሙሉ ስም :</td>
                
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" placeholder="Type Here Died Full Name  " size="32px" name="fname" id="fname"placeholder ="year-month-date" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>        
         </tr>
         <tr>
              <td><font  height="32" color="red">*</font>Gender :</td>
                <td><span id="sprytextfield2">
                  <label>
                 <select name="sex"id="sex" onKeyPress="return ValidateAlpha(event)"required>
         <option value="-1">-select gender-</option>
         <option>male</option>
         <option>female</option></select>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>                
        
        <tr>
          <td><font  height="32" color="red">*</font>Zone:</td>
              
                <td><span id="sprytextfield3">
                  <label>
        <input type="text" size="32px" placeholder=" Type Here Zone Died" name="zon" id="zon" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
            <tr>
           <td><font  height="32" color="red">*</font>Woreda:</td>
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" size="32px"  placeholder="Type Here Woreda of Died " name="wereda" id="wereda" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
         <tr>
          <td><font  height="32" color="red">*</font>Kebele:</td>
                
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" size="32px"  placeholder="Type Here Kebele of Died"  name="kebele" id="kebele"  onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
                 <tr>


           <td><font  height="32" color="red">*</font>Age of Died:</td>
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" size="32px" name="age" placeholder="Type Here Age of Died " id="date-pick" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>

         <tr>
         <tr>
           <td><font  height="32" color="red">*</font>Title Name:</td>
                
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" size="32px" placeholder="Type Here Title Name  of Died " name="titile_name" id="titile_name"  onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
       <tr>
        <td><font  height="32" color="red">*</font>Nationality:</td>
         
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" size="32px" placeholder="Type Here Nationality of Died  " name="citizenship" id="citizenship" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
         <tr>
           <td><font  height="32" color="red">*</font>Case Of Death:</td>
                
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" size="32px" placeholder="Type Here Case Of Death "  name="case_of_death" id="case_of_death" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
         
         <tr>
          <td><font  height="32" color="red">*</font>Died Place:</td>
                
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" size="32px"  placeholder="Type Here Died Place" name="place_of_death" id="place_of_death" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
         </tr>


                <tr>
                    <td height="32" ><font  height="32" color="red">*</font>Died Date:</td>
                    <td><span id="sprytextfield3">
                      <label>
                    
                  <input type="date" size="32px" id="date-pick1" name="dethdate" value = '' pattern='([0-9]{1,2})+' oninvalid="setCustomValidity('Plz enter only number')" onchange="try{setCustomValidity('')}catch(e){}" required/>
                      </label>
                      <span class="textfieldRequiredMsg"></span></span></td>
                  </tr>


                 <tr>
                    <td height="32" ><font  height="32" color="red">*</font>Registered Date:</td>
                    <td><span id="sprytextfield3">
                      <label>
                    
                  <input type="date" size="32px" name="fatherctznship" id="fatherctznship" value = '' pattern='([0-9]{1,2})+' oninvalid="setCustomValidity('Plz enter only number')" onchange="try{setCustomValidity('')}catch(e){}" required/>
                      </label>
                      <span class="textfieldRequiredMsg"></span></span></td>
                  </tr>

    
                <tr>
                   <td><font  height="32" color="red">*</font>Died Photo:</td>
              
                <td><span id="sprytextfield3">
                  <label>
                  <input type="file" size="32px"  name="child_photo" id="child_photo" id="child_photo" />
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
 <td height="35" align="center"> 
  <input    size="40px" class="btn btn-primary btn-inline mt-3" type="submit"name="submit"value="submit "/></td><td height="40" align="justify"> 
 <input type='reset' class="btn btn-primary btn-inline mt-3" value='Clear'>
</td>
</form>      
</table>
</table>
</form>
</div>
                                   </div>
                                  </div>
                                </div><!-- .nk-block -->
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
                   
</body>
</html>
