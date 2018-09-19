<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style type= "text/css">
		.mar{
			position: center;
		}
	</style>
</head>

<body>
<div>REGISTRATION</div>
	<form name="registration" method="post" action="data.php" >
<div class="mar">
	<div>
	  <p>
	    <label>First Name :  </label>
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	    <input type="text" name="fname">
	  </p>
	</div>
	
	<div>
	  <p>
	    <label>Middle Name : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="text" name="mname">
	  </p>
</div>

	
	<div>
	  <p>
	    <label>last Name : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="text" name="lname">
	  </p>
	</div>

	
	<div>
	  <p>
	    <label>Address : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="textarea" name="address">
	  </p>
	</div>

	
	<div>
	  <p>
	    <label>City : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <select name="city" id="city">
	      
	      <option value="karad">Karad</option>	
	      <option value="pune">pune</option>	
	      <option value="satara">satara</option>	
	      <option value="kolhapur">kolhapur</option>	
	      <option value="sangli">sangli</option>	
	     	
        </select>	
		  
		  <script>
		  
		  var city = document.getElementById('city');
			  console.log(city);
		  
		  </script>
	  </p>
	</div>

	
	<div>
	  <p>
	    <label>District : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="text" name="district">
	  </p>
	</div>

	
	<div>
	  <p>
	    <label>State : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <select name="state">
	      
	      <option value="maharashtra">Maharashtra</option>	
	      <option value="Gujrat">Gujrat</option>	
	      <option value="Rajasthan">Rajasthan</option>	
	      <option value="goa">goa</option>	
	      </select>
	  </p>
	</div>

	<div>
	  <p>
	    <label>Country : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <select name="country">
	      
	      <option value="india">India</option>	
	      <option value="africa">Africa</option>	
	      <option value="singapur">Singapur</option>	
	     	
        </select>
	  </p>
	</div>
	
	
	<div>
	  <p>
	    <label>DOB : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="date" name="dob">
	  </p>
	</div>
	
	<div>
	  <p>
	    <label>Age : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="number" name="age">
	  </p>
	</div> 
	
	<div>
	  <p>
	<label>Gender : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="radio" name="gender" value="male" <?php if(isset($gender) && $gender == "male") "checked";?> />Male
	<input type="radio" name="gender" value="female" <?php if(isset($gender) && $gender == "female") "checked";?>> Female
      </p>
	</div>
	
	<div>
	  <p>
	    <label>Email : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="text" name="email">
	  </p>
	</div>
	
	<div>
	  <p>
	    <label>Phone no. : </label>
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="text" name="phoneno">
	  </p>
	</div>

	<div>
	  <p>
	    <label>Username : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="text" name="username">
	  </p>
	</div>
	
	<div>
	  <p>
	    <label>Password : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="password" name="pass">
	  </p>
	</div>
	
	<div>
	  <p>
	    <label>Confirm Password : </label>
	    <input type="password" name="password">
	  </p>
	</div>
	
	<div>
		<p>
			<input type="submit" name="submit" value="Submit"  >
			<input type="button" name="Cancel" value="Cancel">
			
			
		</p>
	</div>
</div>
	</form>
	
</body>
</html>

