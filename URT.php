<!DOCTYPE html>
<html>
	<head>
		<title>User Registration Table</title>
		<style type="text/css">
			html{ 
			background-image: url('https://i.postimg.cc/nztGFcMY/cloud2.jpg');
    		background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			}

			form{
				width: 600px;
				margin: 200px auto;
				background-color: #FFC0CB;
				padding: 30px;
				padding-top: 10px;
				font-size: 25px;
				margin-top: 0;
				margin-bottom: 0;
			}
			
			td{
				padding: 10px;
			}
			
			input{
				padding: 10px;
			}
			
			button{
				background: linear-gradient(90deg,  #8080ff, #1a1aff);
				color: #fff;
				padding: 10px;
				border: 0;
				border-radius: 5px;
				height: 40px;
				width: 100px;
				font-size: 15px;
				letter-spacing: 1px;
				cursor: pointer;
			}
			.error {
				color:  red;
				font-size: 20px;
				background: rgba(252, 252, 5,0.5);
				text-align: center;
				padding-right: 5px;
			}
			.hd
			{
				font-family: Didot, Didot LT STD, Hoefler Text, Garamond, Calisto MT, Times New Roman, serif;
				font-size: 50px;
				text-align: center;
			}

		</style>
	</head>
	<body>
		<form method = "post" action="URT_process.php" name = "Student_form" onsubmit="return validateForm()">
			<table>
				<p class="hd" >User Registration</p>
				
				<tr>
					<td><label>Name:</label></td>
						<td><input type="text" name="name" id="name" size="35px" placeholder="Enter Your Full Name"></td>
				</tr><br>				
				<tr>
					<td><label>Email ID:</label></td>
					<td><input type="email" name="email" id="email" size="35px" placeholder="Enter a Valid Email ID"></td>
				</tr>
				
				<tr>
					<td><label>Password:</label></td>
					<td><input type="password" id="pswd" name="pswd" size="35px" placeholder="Enter a Strong Password"></td>
					<!-- <span id="msg" style="color: red;"> </span> -->
				</tr>

				<tr>
					<td><label>Confirm Password:</label></td>
					<td><input type="password" id="cpswd" name="cpswd" size="35px"placeholder="Confirm Your Password"></td>
					<!-- <span id="msg"> </span> -->
				</tr>
				
				<tr>
					<td><label>Gender:</label></td>
					<td>
						<label><input type="radio" name="gender" id="gender" value="Male">Male</label>
						<label><input type="radio" name="gender" id="gender" value="Female">Female</label>
						<label><input type="radio" name="gender" id="gender" value="Other">Other</label>
					</td>
				</tr>

				<tr>
					<td></td>
					<td><p id="errormsg" class="error"></p></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
					<a href="welcomepage.php" target="_blank"><button onclick="returnmyFunction()" type="submit" name="register"> REGISTER</button></a>
						<button type="reset" name="clear"> CLEAR </button></td>
				</tr>


	
			</table>
			<div class="para"><a href="Welcome.php">>>Home</a></div>
		</form>

		<script type="text/javascript">
		function validateForm(){
			var name = document.getElementById("name").value;
			var email = document.getElementById("email").value;
			var pswd = document.getElementById("pswd").value;
			var cpswd= document.getElementById("cpswd").value;

			if(name.length==0){
				
				document.getElementById("errormsg").innerHTML="Name cannot be empty.";

				return false;
			}

			if(email.length == 0) {
				
				document.getElementById("errormsg").innerHTML="Email ID	cannot be empty.";

				return false;
			}

			if(pswd.length == 0) {
				
				document.getElementById("errormsg").innerHTML="Password cannot be empty.";

				return false;
			}

			if(cpswd.length==0)
			{
				document.getElementById("errormsg").innerHTML="Please confirm your password";
				return false;
			}
            

			if(pswd!=cpswd)
			{
                alert("Password doesn't match. Please try again.");
                return false;
            }

		}
	</script>

	</body>
</html>
