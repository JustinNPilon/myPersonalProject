<!--
Name: Justin Pilon
Id: 000452052
-->
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="SCRIPT.js"></script>
	<link rel="stylesheet" type="text/css" href="STYLE.css">

</head>
<body>
	<div class="container">

	<div class="row">
		<div id="headerText" class="col-md-12 col-sm-12 padding-image" style="height: 250px">
			<img class="titleBackground" height="250px" width="100%" src="Water2.jpg"/>
			<img class="titleImage" height="200px" width="300px" src="myElephant.gif"/>
			<h1 class="titleText">Register Today</h1>
		</div>
	</div>

	<div class="row">
		<ul>
			<li><a class="active" href="INDEX.php">Home</a></li>
			<li><a href="REGISTER.php">Register</a></li>
			<li><a href="CONTACTS.php">Contacts</a></li>
			<li><a href="MAP.php">Travel</a></li>
			<li><a href="LINKS.php">Links</a></li>
		</ul>
	</div>
	
	<form method="get" action="bouncer.php">
	
	<div class="row">
		<div class="col-md-2 col-sm-12 pictures" style="background: #42a5f5; height: 480px;">
			<p>When your registration form is submitted, one of our agents will contact you.  Once you are contacted, you will recieve a travel package in 5 buisness days.</p>
		</div>
		<div class="col-md-10 col-sm-12 descriptions" style="background: #2196f3; height: 480px;">
			<table border="1px">
				<tr>
					<td>First Name</td><td><input name="fname" type="text"></input></td>
				</tr>
				<tr>
					<td>Last Name</td><td><input name="lname" type="text"></input></td>
				</tr>
				<tr>
					<td>Address</td><td><input name="address" type="text"></input></td>
				</tr>
				<tr>
					<td>City</td><td><input name="city" type="text"></input></td>
				</tr>
				<tr>
					<td>Province/State</td><td><input name="province" type="text"></input></td>
				</tr>
				<tr>
					<td>Email</td><td><input name="email" type="text"></input></td>
				</tr>
				<tr>
					<td>Postal Code</td><td><input name="postalCode" type="text"></input></td>
				</tr>
				<tr>
					<td>Male</td><td><input name="gender" value="m" type="radio"></input></td>
				</tr>
				<tr>
					<td>Femaile</td><td><input name="gender" value="f" type="radio"></input></td>
				</tr>
				<tr>
					<td>Canadian Citizen</td><td><input name="citizen" type="checkbox" value="yes"></input></td>
				</tr>
			</table><br/>
			<button class="buttonYellow" type="submit" id="Submit" onclick="return validate()">Submit</button><button class="buttonBlue" type="reset" id="Reset">Reset</button>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-2 col-sm-12 pictures" style="background: #42a5f5; height: 270px;">
			<p>Email verification list</p><br/>
			<p><div id="gatheredEmails"></div></p>
		</div>
		<div class="col-md-10 col-sm-12 descriptions" style="background: #1e88e5; height: 270px;">
			<p>Please record any additional information including the emails of any additional passengers.  Press Enter to verify email adresses.</p>
			<textarea name="textArea" rows="7" cols="70"></textarea><br/>
			<button class="buttonYellow" id="gatherEmails" type="reset" onclick="emailAccumulation(this.form.textArea.value)">Enter</button>
		</div>
	</div>
	
	</form>

	<footer class="row" id="copyright">
		copyright travel experts &copy; 2001-2016
	</footer>
	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	</div>
</body>
</html>