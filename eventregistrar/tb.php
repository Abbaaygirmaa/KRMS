<!DOCTYPE html>
<html lang="zxx" class="js">
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
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <link rel="stylesheet" type="text/css" href="demo/css/datePicker.css" />
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

<script type="text/javascript">
function validate(form)
{
var A=form.child_id.value;
var B=form.fullname.value;
var C=form.motherfullname.value;
var D=form.sex.value;
var O=form.house_no.value;
var E=form.date_of_birth.value;
var F=form.foccupation.value;
var G=form.motheroccupation.value;
var H=form.family_phone_no.value;
var I=form.Place_of_birth.value;
var J=form.registration_date.value;
var K=form.child_photo.value;
var L=form.Family_religion.value;

var O=form.h_no.value;
var P=form.p_o_box.value;
var M=form.kebele.value;
var check = /^[a-zA-Z\ \']+$/;
 var isNumeric = /^[0-9]+$/;
 var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
 if(!check.test(A))
{
alert("please enter only letter for child id name");
form.child_id.focus();
form.child_id.value="";
return false;
}
if(B=="")
{
alert("please not leave child fullname empty?");
form.fullname.focus();
form.fullname.value="";
return false;
}
if(!check.test(C))
{
alert("please enter only letter for motherfullname");
form.motherfullname.focus();
form.motherfullname.value="";
return false;
}
if(D=="")
{
alert("please enter sex name?");
form.sex.focus();
form.sex.value="";
return false;
}
if(O=="")
{
alert("please enter house_no?");
form.house_no.focus();
form.house_no.value="";
return false;
}
if(E=="")
{
alert("please enter customer date_of_birth ");
form.date_of_birth.focus();
form.date_of_birth.value="";
return false;
}
if(!check.test(F))
{
alert("please enter father occupation of customer?");
form.foccupation.focus();
form.foccupation.value="";
return false;
}
if(G=="")
{
alert("please enter mother occupation?");
form.motheroccupation.focus();
form.motheroccupation.value="";
return false;
}
if(!check.test(H))
{
alert("please enter only letter for phone name?");
form.family_phone_no.focus();
form.family_phone_no.value="";
return false;
}
if(I=="")
{
alert("please enter your Place_of_birth?");
form.Place_of_birth.focus();
form.Place_of_birth.value="";
return false;
}

    if(J=="")
{
alert("please enter your  registration_date?");
form.registration_date.focus();
form.registration_date.value="";
return false;
}
if(K=="")
{
alert("please enter your child_photo?");
form.child_photo.focus();
form.child_photo.value="";
return false;
}
if(L=="")
{
alert("please select your Family_religion?");
form.Family_religion.focus();
form.Family_religion.value="";
return false;
}
if(M=="")
{
alert("please Enter Kebele of the Child?");
form.kebele.focus();
form.kebele.value="";
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
                                <div class="nk-block">
                                    <div class="card-inner card-inner-lg">
                                        <div class="nk-block-head nk-block-head-lg">
                                            <div class="nk-block-between">
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
                            <span class="nk-menu-text" >Event Registration</span>               
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

    <h4><center><span style="color:#003300">Please Fill Birth Information the space provided below</span></center></h4>
     <center> <table align="center" bgcolor="#eeeeee" border color="#CC66FF" cellpadding="1" cellspacing="1" width="600"></center>
      <tr>
       <td height="27" bgcolor="#eed"><span class="style6"><strong><image align ="left"width="110" height="100" src="image/br2.jpg">
		<image align ="right"width="110" height="100" src="image/br1.jpg"></strong></span><h2><center>Birth Registration Form</center> </h2></td>
      </tr>
      <tr>
        <td height="26">
          <form id="login" name="login" method="POST" enctype="multipart/form-data" action="./eventregistrar/tbirthre.php" onSubmit="return validate(this) ;">
            <table width="100%"  border="0" cellpadding="0" cellspacing="0">
			 </tr>
			 <tr>
        <td><font  height="32" color="red">*</font>Birth Registration Form Number :</td>
      
                <td><span id="sprytextfield3">
                   <label>
                 <select  name="constant" id="constant"onKeyPress="return ValidateAlpha(event)"required>
				 <option   value="-1">-select registration form number-</option>
				 <option>024513</option>
				 
				</select>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			  <br>
			 <tr>
        <td><font  height="32" color="red">*</font>Child Full Name / የህጻናት ሙሉ ስም  : </td>
          
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" size="32px" placeholder="Type Here Child Fullname"  name="fullname" id="fullname" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			   </tr>
			   <tr>
               
			   </tr>
			   <tr>
              <td><font  height="32" color="red">*</font>Gender :</td>
                <td><span id="sprytextfield2">
                  <label>
                 <select name="sex"id="sex"onKeyPress="return ValidateAlpha(event)"required>
				 <option value="-1">-select gender-</option>
				 <option>male</option>
				 <option>female</option></select>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>			  			   
			   <tr>
                 <tr>
                    <td height="32" ><font  height="32" color="red">*</font>Birth Date:</td>
                    <td><span id="sprytextfield3">
                      <label>
                    
                  <input type="date" name="date_of_birth" id="date-pick" value = '' pattern='([0-9]{1,2})+' oninvalid="setCustomValidity('Plz enter only number')" onchange="try{setCustomValidity('')}catch(e){}" required/>
                      </label>
                      <span class="textfieldRequiredMsg"></span></span></td>
                  </tr>

			  <tr>
          <td><font  height="32" color="red">*</font>Birth Place:</td>
              
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" size="32px" placeholder=" Type Here Birth Place of Child " name="Place_of_birth" id="Place_of_birth" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>

			      <tr>
           <td><font  height="32" color="red">*</font>Zone:</td>
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" size="32px"  placeholder="Type Here Zone of Child " name="zone" id="zone" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			   <tr>
          <td><font  height="32" color="red">*</font>Wereda:</td>
                
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" size="32px"  placeholder="Type Here Wereda of Child "  name="wereda" id="wereda" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
                 <tr>
           <td><font  height="32" color="red">*</font>Kebele:</td>
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" size="32px" placeholder="Type Here Kebele of Child "  name="kebele" id="kebele" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			   <tr>
			   <tr>
           <td><font  height="32" color="red">*</font>Child Nationality:</td>
                
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" size="32px" placeholder="Type Here Child Nationality of Child " name="nationality" id="nationality" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			 <tr>
        <td><font  height="32" color="red">*</font>Mother Full Name:</td>
			   
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" size="32px" placeholder="Type Here Mother Full Name  " name="motherfullname" id="motherfullname" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			   <tr>
           <td><font  height="32" color="red">*</font>Mother's Nationality:</td>
                
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" size="32px" placeholder="Type Here Mother's Nationality  "  name="mothercitzn" id="mothercitzn" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			   
			   <tr>
          <td><font  height="32" color="red">*</font>Father's Full Name:</td>
                
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" size="32px"  placeholder="Type Here Father's Full Name  " name="fatherfulnam" id="fatherfulnam" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			   </tr>
			   
               <tr>
                <td><font  height="32" color="red">*</font>Father's Nationality:</td>
            
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" size="32px" placeholder="Type Here Father's Nationality  "  name="fatherctznship" id="fatherctznship" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
		
                <tr>
                   <td><font  height="32" color="red">*</font>Child Photo:</td>
              
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
