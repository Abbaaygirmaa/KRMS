<!DOCTYPE html>
<html lang="zxx" class="js">
<?php include './include/header.php' ?>
<?php include '../database/database.php' ?>
<?php include '../include/session.php' ?>
<?php require '../include/function.php' ?>
<?php
if(isset($_GET["attempt"]))
{
$attempt=$_GET["attempt"];
}
?>
<html>
<head>

<script type='text/javascript'>
function formValidation(){
//assign the fields
        var news = document.getElementById('new');
        var subject = document.getElementById('subject');
	    var content=document.getElementById('content'); 
          // Check your input in the order that it appears in the form!
		  if(isAlphanumeric( news, "Please enter your valid Subject in number and alphabet")){
		  if(lengthRestriction(news, 1, 10,"for news id")){
	  if(isAlphanumeric( subject, "Please enter your valid Subject in number and alphabet")){
		  if(lengthRestriction(subject, 1, 300,"for your house number")){	  
	if(isAlphanumeric(content, "please fill your content letters only")){  
	if(lengthRestriction(content, 3, 200,"for your content")){
return true;
}	
				}
			}	
	}
	}
	}
	return false;
	
}
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function phoneValidator(elem, helperMsg){
	var phoneExp = /^\d{3}\d{3}\d{4}$/;
	if(elem.value.match(phoneExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}}
function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters" +helperMsg);
		elem.focus();
		return false;
	}
}


function ageRestriction(elem){
    var max="1130";
	var min="15";
	if(elem.value<18 ||elem.value>120)
	{
	alert("enter valid age");
	elem.focus();
	return false;}
	else{
  return true;
	}
}
function notEmpty(elem, helperMsg){
	if(elem.value.length ==0){
		alert(helperMsg);
		elem.focus(); 
		return false;
		}
		return true;
}
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9,-,/]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}
	else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z /]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function madeSelection(elem, helperMsg){
	if(elem.value =="select..."){
	alert(helperMsg);
		elem.focus();
		return false;
		}
	else{
		return true;
		
	}
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
          
	 <fieldset>
			<legend  align="center"><div class="legend"><b>Please Enter News the space provided below</b></div></legend>
					<br>
					<div>
						<form onsubmit='return formValidation()' action='./systemadministrator/postnews.php' method='POST'>
							<table>
								<tr>
									<td><font color="red">*</font>NewsId :</td>
									<td><input type="text" size="39.5px" name="new" id="new" placeholder="Enter newsid..." ></td>	
								    <td><font color="red">*</font>Subject :</td>
								  <td><input type="text"  size="40px" name="subject" id="subject" placeholder="Enter subject..." ></td>
								</tr>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<tr>
								  <td><font color="red">*</font>NewsContent :</td>
								  <td><textarea type="text" rows="4" cols="40" size="10px" name="content" id="content" placeholder="Enter newscontent..." ></textarea></td>
								  <td><font color="red">*</font>TimesOfSent :</td>
								  <td><input type="text"  size="40px" name="times" id="times" placeholder="Enter timesofsent..." ></td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td><input type='submit' class="btn btn-primary btn-inline mt-3" value='Post' name='sub' onclick="return check(this.form);"/> 
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type='reset' class="btn btn-primary btn-inline mt-3" value='Clear'>
								</td>
								</tr>		
							</table>		
						</form>
					</div>
				</fieldset>		
 <?php
if(isset($_POST["sub"]))
{
 if(!$conn)
  {
   die('Could not connect: '. mysql_error());
  }
mysqli_select_db($conn,"kms");
$sql="INSERT INTO new(NewsId,Subject,NewsContent,TimesOfSent)
VALUES
('$_POST[new]','$_POST[subject]','$_POST[content]','$_POST[times]')";
if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  else
  {
echo "Posted Successfully";
}
}
mysqli_close($conn)
?> 

</td>
	</tr>
	 </table>
</td>
 </tr>
</table></td>
 </tr>
 </table>
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
</body></html>