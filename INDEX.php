<!--
Name: Justin Pilon
Id: 000452052
-->
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>

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
			<h1 class="titleText">Welcome to Travel Experts</h1>
			
			<p id="float" style="position:absolute; left: 10px; top: 100px"><img src="Shark.gif"/></p>

			<script>
			var f = document.getElementById("float");
			var current;
			var speed =10;

			function slide()
			{
				setInterval(move, 100);
			}

			function move ()
			{
			current = parseFloat(f.style.left);
			console.log(current);
				if (current > 700)
				{
					speed = -10;
				}
				else if (current < 30) 
				{
					speed = 10;
				}
			current += speed;
			f.style.left = current + "px";
			}
			</script>
				
		</div>
	</div>

	<div class="row">
		<ul>
			<li><button class="buttonBlue" onclick="slide()">Shark Movement</button><li>
			<li><a class="active" href="INDEX.php">Home</a></li>
			<li><a href="REGISTER.php">Register</a></li>
			<li><a href="CONTACTS.php">Contacts</a></li>
			<li><a href="MAP.php">Travel</a></li>
			<li><a href="LINKS.php">Links</a></li>
		</ul>
	</div>
	
	<div class="row">
		<div class="col-md-2 col-sm-12 picturs padding-image" style="background: #42a5f5; height: 250px;"><br/>
			<center><img id="SubPicture" style="height: 140px; width=100%;" src="Sub1.jpg"/></center>
			<center><p>Explore a WWI submarine in San Francisco.</p></center>
		</div>
		<div class="col-md-2 col-sm-12 picturs padding-image" style="background: #2196f3; height: 250px;"><br/>
			<center><img id="FlowerPictureOne" style="height: 140px; width=100%;" src="Flower1.jpg"/></center>
			<center><p>Relax.</p></center>
		</div>
		<div class="col-md-2 col-sm-12 picturs padding-image" style="background: #1e88e5; height: 250px;"><br/>
			<center><img id="FlowerPictureTwo" style="height: 140px; width=100%;" src="Flower2.jpg"/></center>
			<center><p>Enjoy beautiful sights.</p></center>
		</div>
		<div class="col-md-2 col-sm-12 picturs padding-image" style="background: #1976d2; height: 250px;"><br/>
			<center><img id="FlowerPictureThree" style="height: 140px; width=100%;" src="Flower3.jpg"/></center>
			<center><p>Bring your family close together.</p></center>
		</div>
		<div class="col-md-2 col-sm-12 picturs padding-image" style="background: #1565c0; height: 250px;"><br/>
			<center><img id="WinePicture" style="height: 140px; width=100%;" src="Wine1.jpg"/></center>
			<center><p>Explore a castle and drink wine.</p></center>
		</div>
		<div class="col-md-2 col-sm-12 picturs padding-image" style="background: #0d47a1; height: 250px;"><br/>
			<center><img id="PierPictureTwo" style="height: 140px; width=100%;" src="Pier2.jpg"/></center>
			<center><p>Have a coffee with family on the pier.</p></center>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12 col-sm-12 descriptions" style="background: #a7ffeb; height: 170px;">
			To take the next step, please click on the links below:<br/><br/>
			<center><a href="CONTACTS.html"><img class="indexLinks" height="120px" width="190px" src="myElephant1.gif"></a><a href="REGISTER.html"><img class="indexLinks" height="120px" width="190px" src="myElephant2.gif"></a></center>
		</div>
	</div>

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