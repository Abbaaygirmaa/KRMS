<!DOCTYPE html>
<html lang="en">
<html lang="zxx" class="js">
<html>
<head>
  <link href="bs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
<script type="text/JavaScript">
var count = 0;
  function member() {
    if (parent.count ==0) {
       document.parent.src = "pic/DSC06368.jpg";
	 title="evahotel build";
       count = 1;
    }
     else if (parent.count ==1) {

       document.parent.src = "pic/3.jpg";
       count = 2;
    }
 else if(parent.count ==2) {
       document.parent.src = "pic/DSC06361.jpg";
       count = 3;
    }
 else if(parent.count ==3) {
       document.parent.src = "pic/DSC06359.jpg";
       count = 4;
    }
 else if(parent.count ==4) {
       document.parent.src = "pic/4.jpg";
       count = 5;
    }
 else if(parent.count ==5) {
       document.parent.src = "pic/5.jpg";
       count = 6;
    }

 else {
 document.parent.src = "pic/DSC06368.jpg";
       count = 0;

}
    setTimeout("member()", 3000);
  }
</script>
</head>
<body>
<table border="0" width="1000" cellspacing="0">
 <tr>
  <td id="dropdown" colspan="3">	
  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="./images/favicon.png" alt=" General Logo" /></a>
    
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="indexa.php"><strong>Home</strong></a>
          </li>
          <li>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </li>
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false"><strong>About US</strong>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="vi.html">Vision & Mission</a>
              <a class="dropdown-item" href="gg.html">Team</a>
            </div>
          </li>
          <li>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cont.html">
              <strong>Contact</strong></a>
          </li>
      <li>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</li>
<li class="nav-item">
<a class="nav-link" href="index.php"><h5><strong>Login</strong></h5></a>
</li>
 <td>
<li>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</li>
 </td>
 <tr>
<td>
 <table border="0" bgcolor="#0B0B0B" cellspacing="0">

   <tr>
     <td width="200" height="600" valign="top">	
	 <table border="0"  width="200" cellspacing="0">
<tr>
<td>

<script language="JavaScript">
<!-- hide code
// this array gives the weekday names
	var Weekday = new Array();
	Weekday[0] = "Sunday";
	Weekday[1] = "Monday";
	Weekday[2] = "Tuesday";
	Weekday[3] = "Wednesday";
	Weekday[4] = "Thursday";
	Weekday[5] = "Friday";
	Weekday[6] = "Saturday";
// this array gives month names
	var MonthA = new Array();
	MonthA[0] = "January";
	MonthA[1] = "February";
	MonthA[2] = "March";
	MonthA[3] = "April";
	MonthA[4] = "May";
	MonthA[5] = "June";
	MonthA[6] = "July";
	MonthA[7] = "August";
	MonthA[8] = "September";
	MonthA[9] = "October";
	MonthA[10] = "November";
	MonthA[11] = "December";
// this array gives the number of days in each month
	var Mdays = new Array();
	Mdays[0] = 31;
	Mdays[1] = 28;
	Mdays[2] = 31;
	Mdays[3] = 30;
	Mdays[4] = 31;
	Mdays[5] = 30;
	Mdays[6] = 31;
	Mdays[7] = 31;
	Mdays[8] = 30;
	Mdays[9] = 31;
	Mdays[10] = 30;
	Mdays[11] = 31;
// this code gets current date information
	var Today = new Date();
	var Date = Today.getDate();
	var Month = Today.getMonth();
	var dow = Today.getDay();
	var Year = Today.getYear();
// these are variables for 
	var day = 1;
	var i, j;
// adjust year for browser differences
	if (Year < 2000) {
		Year += 1900;
	}
// account for leap year
	if ((Year % 400 == 0) || ((Year % 4 == 0) && (Year % 100 !=0)))
		Mdays[1] = 29;
// determine day of week for first day of the month
	var Mfirst = Today;
	Mfirst.setDate(1);
	var dow1 = Mfirst.getDay();
// write out current date
	document.write("Today is " + Weekday[dow] + ", " + MonthA[Month]);
	document.write(" " + Date + ", " + Year);
// construct calendar for current month
	document.write("<BR><BR><TABLE BORDER=1 BORDERCOLOR=INDIGO>" +
		"<TR><TH COLSPAN=7 ALIGN=CENTER>" + MonthA[Month] + " " + Year + "</TH></TR>");
	document.write("<TR><TH>Sun</TH><TH>Mon</TH><TH>Tue</TH><TH>Wed</TH>" +
		"<TH>Thu</TH><TH>Fri</TH><TH>Sat</TH></TR>");
	for (i = 0; i < 6; i++) {
// this loop writes one row of days Sun-Sat
		document.write("<TR>");
		for (j = 0; j < 7; j++) {
// this loop determines which dates to display and in which column
			if ((i == 0 && j < dow1) || (day > Mdays[Month])) {
// this puts in blank cells at the beginning an end of the month
				document.write("<TD><BR></TD>");
			} else {
				if (day == Date) {
// highlight the current day and display the date for this cell
					document.write("<TD><FONT COLOR=red>" + day + "</FONT></TD>");
				} else {
// display the date for this cell
					document.write("<TD>" + day + "</TD>");
				}
// increment day counter
				day++;
			}
		}
// end of row; determine if more rows needed
		document.write("</TR>");
		if (day > Mdays[Month]) {
			i = 6;
		}
	}
// end of table
	document.write("</TABLE>");
// end hiding -->
</script>
</td>
</tr>
</table></td> 
     <td width="600"  height="600" valign="top" bgcolor="#FBBFF8DC">
	 <?php
$i="";
define("db_server","localhost");
define("db_user","root");
define("db_password","");
define("db_name","kms");
$connect=mysqli_connect(db_server,db_user,db_password);
if(!$connect)
{
die("Error in connection".mysqli_error());
}
$db_select=mysqli_select_db($connect,db_name);
if(!$db_select)
{
die("Error in db select".mysqli_error());
}
$query="select NewsId,subject,NewsContent,TimesOfSent, Now() as PerDate from new";
$result=mysqli_query($connect,$query);
if(!$result)
{
die("Query fail".mysqli_error());
}
while($rel=mysqli_fetch_array($result))
{
//$temp=$rel[4];
echo "<center><h1 style='background:#DAA520;color:#FFDEAD;'>announcement news:</h1><br/></center>";
echo"<center><font style='font-family:verdana,arial,helvetica,sans-serif;font-size:14px;line-height:18px;left-align:justify;padding-left:20px; margin-top:0px; text-decoration:underline;'>".$rel[2]."</font></center></br>";
echo "<font style='font-family:verdana,arial,helvetica,sans-serif;font-size:12px;line-height:18px;left-align:justify;padding-left:20px; margin-top:0px;'>".$rel[3]."</font></br>";
echo "on the day of:".$rel[4];
//echo '$_SESSION['price']';
echo "</fieldset>";
}
?>
</td>
	
     <td width="50" height="600" valign="top">
	 <table border="0" bgcolor="#336666" width="50" height="600" cellspacing="0">
<tr  bgcolor="black">
<td align="center">
<h3><u><font color="#336666">Advertisment</font></u></h3>
</td>
</tr>
<tr><td bgcolor="white">
<img src="pic/DSC06355.jpg" width="200" height="170"/><br>
<img src="image/new.jpg" width="200" height="170" name="demo"/><br>
<img src="pic/DSC06374.jpg" width="200" height="170" name="demo"/>
</td></tr>
</table></td>
	</tr>
	 </table>
</td>
 </tr>
 <tr>
 <td colspan="3" height="25">
<table border="0"  align="center" width="200%" bgcolor="black" cellspacing="0">
<tr>
<td>
</td>
<td>
<font face="Times New Roman" color="white"><b> KEBELE RESIDENCE MANAGMENT SYSTEM &copy; 2014 COPY RIGHT RESERVED !!!</b>
</font>
</td>
</tr>
</table></td>
 </tr>
 </table>
</body>
</html>
