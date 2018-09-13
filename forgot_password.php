<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Forgot_password.html</title>
	<script type="text/javascript">
		function choice()
		{
		var ch = parseInt(document.getElementById("number").value);
		if(ch==1)
			{
				prompt("Enter Email");
			}
		else{
			prompt("Enter mobile number")
		}
		}
	</script>
</head>

<body>
<div>
  <p>What would you like to verify :</p>
  <p>1. Email</p>
  <p>2. Mobile number  </p>
	
  <p>Enter 1/2 :  
    <input type="number" name="number" id="number">
    <input type="button" name="button" id="button" value="OK" onClick="choice()">
  </p>
  <p>&nbsp;</p>
</div>
</body>
</html>
