<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
	<style type= "text/css">
	.head{
		text-align: center;
		padding: 10px;
		font-weight: bolder;
		font-size: 25px;
	}
		form{
			position:absolute;
			right:0;
			left:0;
			margin:auto;
			border-radius:10px;
			border:3px solid gainsboro;
			padding:10px;
			max-width:500px;
			
		}
		.form-control{
			margin: 10px;
		}
	label{
			color: gray;
			margin-bottom: -50px;	
			margin-left:20px; 
		}
	</style>
</head>

<body>
<div class="head"> REGISTRATION</div>
	<form name="registration" method="post" action="data.php" class="form-group" >
  
	     
	    <input placeholder="First Name" type="text" name="fname" class="form-control">
	 
	    
	    <input placeholder="Middle Name" type="text" name="mname" class="form-control">
	  
	    
	    <input placeholder="Last Name" type="text" name="lname" class="form-control">
	  
	    
	    <input placeholder="Address" type="textarea" name="address" class="form-control">	
	  
	    <label>City : </label>
	    <select name="city" id="city" class="form-control">
	      
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
	
	
	  
	    
	    <input placeholder="District" type="text" name="district" class="form-control">
	  
	

	
	
	  
	    <label>State : </label>
	    <select name="state" class="form-control">
	      
	      <option value="maharashtra">Maharashtra</option>	
	      <option value="Gujrat">Gujrat</option>	
	      <option value="Rajasthan">Rajasthan</option>	
	      <option value="goa">goa</option>	
	      </select>
	  
	

	
	  
	    <label>Country : </label>
	    <select name="country" class="form-control">
	      
	      <option value="india">India</option>	
	      <option value="africa">Africa</option>	
	      <option value="singapur">Singapur</option>	
	     	
        </select>
	  

	    <label>DOB : </label>
	    <input placeholder="DOB" type="date" name="dob" class="form-control">
	  
	
	
	
	  
	    
	    <input placeholder="Age" type="number" name="age" class="form-control">
	  
	 
	
	
	  
	<label>Gender : </label>
	<input type="radio" name="gender" value="male"  <?php if(isset($gender) && $gender == "male") "checked";?> />Male
	<input type="radio" name="gender" value="female"  <?php if(isset($gender) && $gender == "female") "checked";?>> Female
      
	
	
	
	  
	    
	    
	    <input placeholder="Email" type="text" name="email"class="form-control">
	  
	
	
	
	  
	    
	    
	    <input placeholder="Phone no" type="text" name="phoneno" class="form-control">
	  
	

	
	  
	    
	    <input placeholder="Username" type="text" name="username" class="form-control">
	  
	
	
	
	  
	    
	    <input placeholder="Password" onkeypress="myFunction()" id="password" type="password" name="pass" class="form-control">
	  
	
	
	
	  
	    
	    <!-- <input placeholder="Confirm Password" type="password" name="password" class="form-control"> -->
	  
		<label id="out"><label>
	
	
		
			<input type="submit" name="submit" class="btn btn-primary" value="Submit"  >
			<input type="button" name="Cancel" class="btn btn-danger" value="Cancel">
			
			
		
	

	</form>
	<script>
		function myFunction(){
		var pass = document.getElementById("password").value;
		var out = document.getElementById("out");
		console.log(pass);
//		out.innerHTML = pass;
}
		</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

