

<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.style1 {
	color: #FFFFFF;
	font-size: x-large;
	font-family: "comic Sans MS";
}
.style2 {color: #FFFFFF}
td{

  color:white;
}

</style>
</head>
<body marginheight="1" marginwidth="1">
<form id="form1" name="Registration" method="POST" action="loginpage.php">
<table width="100%" height="100%" bgcolor="#000066" cellpadding="9">
  <tr>
    <td colspan="4" bgcolor="#FFCC00"><font color="#0000FF" size="5">Registration</td>
  </tr>

  <tr>
    <td width="14%" align="right">First Name </td>
    <td width="86%" colspan="3"><input name="txtfirstname" type="text" id="txtfirstname" value="<?php ?>"></td>
  </tr>	

    <td align="right">Middle Name  </td>
    <td colspan="3"><input name="txtmiddlename" type="text" id="txtmiddlename" value="<?php if(isset($_POST["txtmiddlename"])) echo $_POST["txtmiddlename"];?>" /></td>
  </tr>
  <tr>
    <td align="right">Last Name  </td>
    <td colspan="3"><input name="txtlastname" type="text" id="txtlastname" value="<?php if(isset($_POST["txtlastname"])) echo $_POST["txtlastname"];?>" /></td>
  </tr>
  <tr>
    <td align="right">Address </td>
    <td colspan="3"><textarea name="txtaddress" id="txtaddress" value="<?php if(isset($_POST["txtaddress"])) echo $_POST["txtaddress"];?>"></textarea></td>
  </tr>
  <tr>
    <td align="right">State</td>
    <td colspan="3"><input name="txtstate" type="text" id="txtstate" value="<?php if(isset($_POST["txtstate"])) echo $_POST["txtstate"];?>" /></td>
  </tr>
  <tr>
    <td align="right">District </td>
    <td colspan="3"><input name="txtdistrict" type="text" id="txtdistrict" value="<?php if(isset($_POST["txtdistrict"])) echo $_POST["txtdistrict"];?>" /></td>
  </tr>
  <tr>
    <td align="right">Date of Birth  </td>
    <td colspan="3"><input type="date" name="bdate" id="date" value="<?php if(isset($_POST["bdate"])) echo $_POST["bdate"];?>" /></td>
    </tr>
  <tr>
    <td align="right">Gender </td>
    <td colspan="3"><input name="gender" type="radio" value="male"  />
    Male  
      <input name="gender" type="radio" value = "female"  />
    Female </td>
  </tr>
  <tr>
    <td align="right">Country </td>
    <td colspan="3"><select name="combocountry" id="combocountry"  >
      <option>Africa </option>
      <option>Australia </option>
      <option>Belgium </option>
      <option>Canada </option>
      <option>Dubai </option>
      <option>England </option>
      <option>France </option>
      <option>Germany </option>
      <option>India </option>
      <option>Japan </option>
      <option>Korea </option>
      <option>London </option>
  </select>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">E-mail </td>
    <td colspan="3"><input name="txtemail" type="text" id="txtemail" /></td>
  </tr>
  <tr>
    <td align="right">Phone </td>
    <td colspan="3"><input name="txtphone" type="text" id="txtphone" /></td>
  </tr>

  <tr>
    <td align="right">User Name  </td>
    <td colspan="3">
      <input name="txtusername" type="text" id="txtusername"  />
    </td>
  </tr>
  <tr>
    <td align="right">Password </td>
    <td colspan="3"><input name="txtpassword" type="text" id="txtpassword" /></td>
  </tr>
  <tr>
    <td align="right">Confirm Password  </td>
    <td colspan="3"><input name="txtconpassword" type="text" id="txtconpassword" /></td>
  </tr>
  
  <tr>
    <td colspan="4" align="right" bgcolor="#FFCC00">
		<input name="buttonsubmit" type="submit" id="buttonsubmit" value="Submit" border="0" onClick="regis()" /> 
		<input name="buttoncancel" type="cancel" id="buttoncancel" value="Cancel" />
	</td>
  </tr>
</table>
</form>
	</td>
  </tr>
  </table>

</body>
</html>

<?php

require_once("DB_controller.php");
	function regis()
	{
	$FNAME = $_POST["txtfirstname"];
	$MNAME = $_POST["txtmiddlename"];
	$LNAME = $_POST["txtlastname"];
	$NAME = $FNAME . " " . $MNAME . " " . $LNAME;
	
	$ADD = $_POST["txtaddress"];
	$STATE = $_POST["txtstate"];
	$DIST = $_POST["txtdistrict"];
	$COUNTRY = $_POST["combocountry"];
	$MADDRESS = $ADD . "," . $STATE . "," . $DIST . "," . $COUNTRY;
	$USERNAME = $_POST["txtusername"];
	$PASSWORD = $_POST["txtpassword"];
	
	
	
	$query="INSERT INTO u_registration (Username, Password, C_Name) VALUES ('$USERNAME','$PASSWORD','$FNAME')";

if(mysqli_query($link,$query))
{
	echo "record inserted successfully";
}
else 
{
	echo "Error : Could not able to execute" .$query;
	mysqli_error($query);
	mysqli_error($link);
}

//close connection
mysqli_close($link);

	}
?>