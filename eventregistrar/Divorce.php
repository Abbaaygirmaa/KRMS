<html xmlns="http://www.w3.org/1999/xhtml">
<head>

   
<link href="bs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/cs.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="/bs/jquery/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <link rel="stylesheet" type="text/css" href="css/style.css" />
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


<title><h1> WELCOME TO CUSTOMER REGISTRATION FORM!!!</h1><BR></title>
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
alert("please enter only letter for death_id ");
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
<body bgcolor="#eeeeee">
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="./image/logooo.png" alt=" General Logo" /></a>
    
        <span class="navbar-toggler-icon"></span>
      </button>
   
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="den.php">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Register vital event
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="Birthr1.php">Register Birth</a>
              <a class="dropdown-item" href="death1.php">Register Death</a>
              <a class="dropdown-item" href="abandchil.php">Register Adoption</a>
              <a class="dropdown-item" href="marr.php">Register Marriage</a>
              <a class="dropdown-item" href="Divorce.php">Register Divorce</a>
            </div>
          </li>

         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              View vital event
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="dro.php">view Birth</a>
              <a class="dropdown-item" href="dod.php">view Death</a>
              <a class="dropdown-item" href="doa.php">view Adoption</a>
              <a class="dropdown-item" href="dom.php">view Marriage</a>
              <a class="dropdown-item" href="dodi.php">view Divorce</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Report
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="doob.php">report Birth</a>
              <a class="dropdown-item" href="dd.php">report Death</a>
              <a class="dropdown-item" href="dooo.php">report Adoption</a>
              <a class="dropdown-item" href="dmm.php">report Marriage</a>
              <a class="dropdown-item" href="doo.php">report Divorce</a>
              <a class="dropdown-item" href="  dooall.php">All report </a>
            
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="of.html">View fedback</a>
         
          </li>
          <li class="nav-item">
            <a class="nav-link" href="changepass.html">Change Password</a>
         
          </li>

        </li>
   
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
     
      </li>



          
          
        </div>
      </nav>
<div id="wrapper">
  
  <div id="content">
    <h2><center><span style="color:#003300">Web Based Civil and Vital Event Registration System for Kombolcha Kebele 02</span></center></h2>
   <center> <table align="center" bgcolor="#eeeeee" border color="#CC66FF" cellpadding="1" cellspacing="1" height="500" width="800">
      <tr>
        <td height="27" bgcolor="#eed"><span class="style10"><strong><h1><center>Register Divorce form</center>
		
      </tr>
      <tr>
        <td height="26"><form id="login" name="login" method="POST" action="divo.php" onSubmit="return validate(this) ;">
            <table width="100%"  border="0" cellpadding="0" cellspacing="0">
			 </tr>
			 
			 <tr>
                <td height="32" > Divorce Registration Form Number</td>
                <td><span id="sprytextfield3">
                  <label>
                 <select name="constant"id="constant"onKeyPress="return ValidateAlpha(event)"required>
				 <option value="-1">-Select Registration Form Number-</option>
				 <option>024513</option>
				 
				</select>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			  <tr>
                <td height="32" > Wife's Birth Registration Id</td>
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" name="hdivbrthid" id="hdivbrthid" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			  <tr>
                <td height="32" > Husband's Birth Registration Id</td>
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" name="wdivbrthid" id="wdivbrthid" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			  <tr>
                <td height="32" > Marrage registration Id</td>
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" name="marrage_id" id="marrage_id" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>

			 <tr>
                <td height="32" > Husband Full Name</td>
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" name="hfulname" id="hfulname" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			  <tr>
                <td height="32" >  Husband Birth Date</td>
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" name="hbirthdt" id="date-pick" placeholder ="year-month-date" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			   <tr>
                <td height="32" >  Husband Birth place</td>
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" name="hplacbirth" id="hplacbirth" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			   <tr>
                <td height="32" >  Husband nationality</td>
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" name="hcitizn" id="hcitizn" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			  <tr>
                <td height="32" >Husband photo</td>
                <td><span id="sprytextfield3">
                  <label>
                  <input type="file"name="hasphot" required id="husband_mname" />
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			  <tr>
                <td height="30" > zone </td>
                <td><span id="sprytextfield2">
                  <label>
				  <input type="text" name="zone" id="zone" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			  <tr>
                <td height="30" > Wereda</td>
                <td><span id="sprytextfield2">
                  <label>
				  <input type="text" name="wereda" id="wereda" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			  <tr>
                <td height="30" > Kebele</td>
                <td><span id="sprytextfield2">
                  <label>
				  <input type="text" name="kebele" id="kebele" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			  
			   <tr>
                <td height="32" >Wife Full Name</td>
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" name="wfulname" id="wfulname" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			   <tr>
                <td height="32" >  Wife Birth Date</td>
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" name="wbrthdate" id="date-pick1" placeholder ="year-month-date"onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			  <tr>
                <td height="32" >  Wife Birth Place</td>
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" name="wfbrthplace" id="wfbrthplace" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			  <tr>
                <td height="32" >  Wife Nationality</td>
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" name="wcitzn" id="wcitzn" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			  <tr>
                <td height="32" >Wife photo</td>
                <td><span id="sprytextfield3">
                  <label>
                  <input type="file"name="wifphot" required id="wifphot" />
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			  <tr>
                <td height="30" > zone</td>
                <td><span id="sprytextfield2">
                  <label>
				  <input type="text" name="wzone" id="wzone" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			  <tr>
                <td height="30" > Wereda</td>
                <td><span id="sprytextfield2">
                  <label>
				  <input type="text" name="wwereda" id="wwereda" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			  <tr>
                <td height="30" > kebele</td>
                <td><span id="sprytextfield2">
                  <label>
				  <input type="text" name="wkebele" id="wkebele" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			   <tr>
                <td height="32" > Divorced Date</td>
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" name="wdivdate" id="date-pick2" placeholder ="year-month-date" onKeyPress="return ValidateAlpha(event)"required/>
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			   
			   
				<tr>
                <td height="30" >Couse of divorce</td>
                <td><span id="sprytextfield2">
                  <label>
                 <select name="couse"id="couse"onKeyPress="return ValidateAlpha(event)"required>
				 <option value="-1">-select couse-</option>
				 <option>Disagreement</option>
				 <option>Death</option>
				 
                  </label>
                  <span class="textfieldRequiredMsg"></span></span></td>
              </tr>
			   
              
             
 <td height="35" align="center"> <input type="submit"name="submit"value="submit "/></td><td height="40" align="justify"> 
 <input type="reset"name="reset" value="Clear" /></td>
</table>

        </form></td>
      </tr>
      
  </div>
   <div style="clear:both;"></div>
</div>
<script src="bs/jquery/jquery.min.js"></script>
<script src="bs/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
