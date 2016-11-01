<!--
Name: Justin Pilon
Id: 000452052
-->
<!DOCTYPE html>
<html>
<head>
	<title>Travel</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="SCRIPT.js"></script>
	<link rel="stylesheet" type="text/css" href="STYLE.css">

</head>
<body>
	<div class="container">

	<audio autoplay loop>
		<source src="TangerineDream.mp3" type="audio/mpeg">
	</audio>

	<div class="row">
		<div id="headerText" class="col-md-12 col-sm-12 padding-image" style="height: 250px">
			<img class="titleBackground" height="250px" width="100%" src="Water2.jpg"/>
			<img class="titleImage" height="200px" width="300px" src="myElephant.gif"/>
			<h1 class="titleText">Plan Your Trip</h1>
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
	
	<div class="row">
		<div class="col-md-2 col-sm-12 pictures" style="background: #42a5f5; height: 370px;">
		
		<p>Current Location</p>
		<select id="initial">
			<option value="IOtt">Ottowa</option>
			<option value="ICal">Calgary</option>
			<option value="IWas">Washington</option>
			<option value="ISan">San Francisco</option>
			<option value="IBra">Brazilia</option>
			<option value="ILon">London</option>
			<option value="ICan">Canberra</option>
			<option value="IMos">Moscow</option>
			<option value="ITok">Tokyo</option>
			<option value="IBei">Beijing</option>
			<option value="IRey">Reykjavik</option>
			<option value="IAnc">Anchorage</option>
			<option value="ICai">Cairo</option>
			<option value="IMex">Mexico City</option>
		</select>
			
		<p>Destination</p>
		<select id="final">
			<option value="FOtt">Ottowa</option>
			<option value="FCal">Calgary</option>
			<option value="FWas">Washington</option>
			<option value="FSan">San Francisco</option>
			<option value="FBra">Brazilia</option>
			<option value="FLon">London</option>
			<option value="FCan">Canberra</option>
			<option value="FMos">Moscow</option>
			<option value="FTok">Tokyo</option>
			<option value="FBei">Beijing</option>
			<option value="FRey">Reykjavik</option>
			<option value="FAnc">Anchorage</option>
			<option value="FCai">Cairo</option>
			<option value="FMex">Mexico City</option>
		</select>
			
		<p>Plan Trip</p>
		<button class="buttonYellow" id="Submit" onclick="drawline()">Initiate</button>
		
		</div>
		<div class="col-md-10 col-sm-12 descriptions" style="background: #2196f3; height: 370px">
			
			<div class="row">
				<div class="col-md-8 col-sm-4">
				<img id="world" width="0" height="0" src="earth.png">
				<canvas id="myCanvas" width="650" height="350" style="border:1px solid blue;"></canvas>
				</div>
			</div>
			
			<script>
			function oneWayTripPath()
			{
				var coordinatesInitial = [];
				if (document.getElementById("initial").selectedIndex == "0") {coordinatesInitial[0] = 185; coordinatesInitial[1] = 130;}
				if (document.getElementById("initial").selectedIndex == "1") {coordinatesInitial[0] = 120; coordinatesInitial[1] = 120;}
				if (document.getElementById("initial").selectedIndex == "2") {coordinatesInitial[0] = 180; coordinatesInitial[1] = 150;}
				if (document.getElementById("initial").selectedIndex == "3") {coordinatesInitial[0] = 105; coordinatesInitial[1] = 150;}
				if (document.getElementById("initial").selectedIndex == "4") {coordinatesInitial[0] = 230; coordinatesInitial[1] = 250;}
				if (document.getElementById("initial").selectedIndex == "5") {coordinatesInitial[0] = 310; coordinatesInitial[1] = 120;}
				if (document.getElementById("initial").selectedIndex == "6") {coordinatesInitial[0] = 555; coordinatesInitial[1] = 295;}
				if (document.getElementById("initial").selectedIndex == "7") {coordinatesInitial[0] = 365; coordinatesInitial[1] = 110;}
				if (document.getElementById("initial").selectedIndex == "8") {coordinatesInitial[0] = 540; coordinatesInitial[1] = 155;}
				if (document.getElementById("initial").selectedIndex == "9") {coordinatesInitial[0] = 505; coordinatesInitial[1] = 145;}
				if (document.getElementById("initial").selectedIndex == "10") {coordinatesInitial[0] = 275; coordinatesInitial[1] = 85;}
				if (document.getElementById("initial").selectedIndex == "11") {coordinatesInitial[0] = 60; coordinatesInitial[1] = 90;}
				if (document.getElementById("initial").selectedIndex == "12") {coordinatesInitial[0] = 360; coordinatesInitial[1] = 170;}
				if (document.getElementById("initial").selectedIndex == "13") {coordinatesInitial[0] = 140; coordinatesInitial[1] = 185;}
				var coordinatesFinal = [];
				if (document.getElementById("final").selectedIndex == "0") {coordinatesFinal[0] = 185; coordinatesFinal[1] = 130;}
				if (document.getElementById("final").selectedIndex == "1") {coordinatesFinal[0] = 120; coordinatesFinal[1] = 120;}
				if (document.getElementById("final").selectedIndex == "2") {coordinatesFinal[0] = 180; coordinatesFinal[1] = 150;}
				if (document.getElementById("final").selectedIndex == "3") {coordinatesFinal[0] = 105; coordinatesFinal[1] = 150;}
				if (document.getElementById("final").selectedIndex == "4") {coordinatesFinal[0] = 230; coordinatesFinal[1] = 250;}
				if (document.getElementById("final").selectedIndex == "5") {coordinatesFinal[0] = 310; coordinatesFinal[1] = 120;}
				if (document.getElementById("final").selectedIndex == "6") {coordinatesFinal[0] = 555; coordinatesFinal[1] = 295;}
				if (document.getElementById("final").selectedIndex == "7") {coordinatesFinal[0] = 365; coordinatesFinal[1] = 110;}
				if (document.getElementById("final").selectedIndex == "8") {coordinatesFinal[0] = 540; coordinatesFinal[1] = 155;}
				if (document.getElementById("final").selectedIndex == "9") {coordinatesFinal[0] = 505; coordinatesFinal[1] = 145;}
				if (document.getElementById("final").selectedIndex == "10") {coordinatesFinal[0] = 275; coordinatesFinal[1] = 85;}
				if (document.getElementById("final").selectedIndex == "11") {coordinatesFinal[0] = 60; coordinatesFinal[1] = 90;}
				if (document.getElementById("final").selectedIndex == "12") {coordinatesFinal[0] = 360; coordinatesFinal[1] = 170;}
				if (document.getElementById("final").selectedIndex == "13") {coordinatesFinal[0] = 140; coordinatesFinal[1] = 185;}
				var output = [coordinatesInitial[0],coordinatesInitial[1],coordinatesFinal[0],coordinatesFinal[1]];
				return output;
			}
			
			var c = document.getElementById("myCanvas");
			var ctx = c.getContext("2d");
			var img = document.getElementById("world");
			ctx.drawImage(img, 25, 25);
			
			var i = 0;
			hexList = ["F","E","D","C","B","A","9","8","7","6","5","4","3","2","1","0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F"];
			
			x = [185,120,180,105,230,310,555,365,540,505,275,60,360,140];
			
			y = [130,120,150,150,250,120,296,110,155,145,85,90,170,185];
			
			colorChange();
			
			function colorChange()
			{
				for (var j = 0; j < x.length; j++)
				{
					point(x[j],y[j],hexList[i],hexList[i]);
				}
				if ( i > hexList.length)
				{
					i = 0;
				}
				i++;
				setTimeout("colorChange()",100);
			}
			
			function point(x,y,w,z) 
			{
				ctx.fillStyle = "#"+ w + z + w + z +"00";
				ctx.beginPath();
				ctx.arc(x,y,2,0,2*Math.PI);
				ctx.stroke();
				ctx.fill();
			}
			
			/*		
			//Ottowa (Capital of Canada)
			ctx.beginPath();
			ctx.arc(185,130,1,0,2*Math.PI);
			ctx.stroke();
			
			//Calgary (Canada)
			ctx.beginPath();
			ctx.arc(120,120,1,0,2*Math.PI);
			ctx.stroke();
			
			//Washington D.C (Capital of the USA)
			ctx.beginPath();
			ctx.arc(180,150,1,0,2*Math.PI);
			ctx.stroke();
			
			//San Francisco
			ctx.beginPath();
			ctx.arc(105,150,1,0,2*Math.PI);
			ctx.stroke();
			
			//Brasilia (Capital of Brazil)
			ctx.beginPath();
			ctx.arc(230,250,1,0,2*Math.PI);
			ctx.stroke();
			
			//London (Capital of the UK)
			ctx.beginPath();
			ctx.arc(310,120,1,0,2*Math.PI);
			ctx.stroke();
			
			//Canberra (Capital of Australia)
			ctx.beginPath();
			ctx.arc(555,295,1,0,2*Math.PI);
			ctx.stroke();
			
			//Moscow (Capital of Russia)
			ctx.beginPath();
			ctx.arc(365,110,1,0,2*Math.PI);
			ctx.stroke();
			
			//Tokyo (Capital of Japan)
			ctx.beginPath();
			ctx.arc(540,155,1,0,2*Math.PI);
			ctx.stroke();
			
			//Beijing (Capital of China)
			ctx.beginPath();
			ctx.arc(505,145,1,0,2*Math.PI);
			ctx.stroke();
			
			//Reykjavik (Capital of Iceland)
			ctx.beginPath();
			ctx.arc(275,85,1,0,2*Math.PI);
			ctx.stroke();
			
			//Anchorage (City in Alaska)
			ctx.beginPath();
			ctx.arc(60,90,1,0,2*Math.PI);
			ctx.stroke();
			
			//Cairo (Capital of Egypt)
			ctx.beginPath();
			ctx.arc(360,170,1,0,2*Math.PI);
			ctx.stroke();
			
			//Mexico City (Capital of Mexico)
			ctx.beginPath();
			ctx.arc(140,185,1,0,2*Math.PI);
			ctx.stroke();
			*/
			
			
			
			
			
			
			// Your MATHEMATICS BEGINS

			/*
			var myarray = oneWayTripPath();

			var xx1 = myarray[0];
			var yy1 = myarray[1];
			var xx2 = myarray[2];
			var yy2 = myarray[3];

			var r = 300;
			*/

			function X(n) { return (n);}
			function Y(n) { return (myCanvas.height-n);}

			function curveColor(x1,y1,x2,y2)
			{
				if ((y1 > y2) && (x1 < x2))
				{
					return "red";
				}
				if ((y1 < y2) && (x1 < x2))
				{
					return "blue";
				}
				if ((y1 > y2) && (x1 > x2))
				{
					return "green";
				}
				if ((y1 < y2) && (x1 > x2))
				{
					return "yellow";
				}
			}

			function Radcoef(n,x1,y1,x2,y2)
			{
				if ((y1 > y2) && (x1 < x2))
				{
					return ((n-1)*Math.PI);
				}
				if ((y1 < y2) && (x1 < x2))
				{
					return ((n)*Math.PI);
				}
				if ((y1 > y2) && (x1 > x2))
				{
					return ((n)*Math.PI);
				}
				if ((y1 < y2) && (x1 > x2))
				{
					return ((n-1)*Math.PI);
				}
			}

			function lineDist(x1,y1,x2,y2) { return Math.sqrt(Math.pow((x1 - x2),2) + Math.pow((y1 - y2),2));}
			function midX(x1,y1,x2,y2) { return ((x1 + x2)/2);}
			function midY(x1,y1,x2,y2) { return ((y1 + y2)/2);}
			function highSchoolTrig(x1,y1,x2,y2) { return Math.acos((Math.pow(r,2) + Math.pow(r,2) - Math.pow(lineDist(x1,y1,x2,y2),2))/(2*r*r));}
			function triangleMidLineDist(x1,y1,x2,y2) { return (r*Math.cos(highSchoolTrig(x1,y1,x2,y2)/2));}
			function Slope(x1,y1,x2,y2) { return ((y2 - y1)/(x2 - x1));}
			function NrSlope(x1,y1,x2,y2) { return (-1/Slope(x1,y1,x2,y2));}
			function SQRTtan(x1,y1,x2,y2) { return (Math.sqrt(1 + Math.pow(NrSlope(x1,y1,x2,y2),2)));}
			function originX(x1,y1,x2,y2) { return (midX(x1,y1,x2,y2) + (triangleMidLineDist(x1,y1,x2,y2)/SQRTtan(x1,y1,x2,y2)));}
			function originY(x1,y1,x2,y2) { return (midY(x1,y1,x2,y2) + ((triangleMidLineDist(x1,y1,x2,y2)*NrSlope(x1,y1,x2,y2))/SQRTtan(x1,y1,x2,y2)));}

			function NewPointX(x1,y1,x2,y2)
			{
				if ((y1 > y2) && (x1 < x2))
				{
					return (originX(x1,y1,x2,y2)-r);
				}
				if ((y1 < y2) && (x1 < x2))
				{
					return (originX(x1,y1,x2,y2)+r);
				}
				if ((y1 > y2) && (x1 > x2))
				{
					return (originX(x1,y1,x2,y2)+r);
				}
				if ((y1 < y2) && (x1 > x2))
				{
					return (originX(x1,y1,x2,y2)-r);
				}
			}

			function trueFalse(x1,y1,x2,y2)
			{
				if ((y1 > y2) && (x1 < x2))
				{
					return false;
				}
				if ((y1 < y2) && (x1 < x2))
				{
					return true;
				}
				if ((y1 > y2) && (x1 > x2))
				{
					return false;
				}
				if ((y1 < y2) && (x1 > x2))
				{
					return true;
				}
			}

			function NewPointY(x1,y1,x2,y2){ return (originY(x1,y1,x2,y2));}
			function firstRad(x1,y1,x2,y2) { return highSchoolTrig(NewPointX(x1,y1,x2,y2),NewPointY(x1,y1,x2,y2),x1,y1);}
			function secondRad(x1,y1,x2,y2) { return highSchoolTrig(NewPointX(x1,y1,x2,y2),NewPointY(x1,y1,x2,y2),x2,y2);}
			
			/*
			document.write("xx1 = "+ X(xx1) +"<br/>");
			document.write("yy1 = "+ Y(yy1) +"<br/>");
			document.write("xx2 = "+ X(xx2) +"<br/>");
			document.write("yy2 = "+ Y(yy2) +"<br/>");
			document.write("lineDist = "+ lineDist(X(xx1),Y(yy1),X(xx2),Y(yy2)) +"<br/>");
			document.write("midX = "+ midX(X(xx1),Y(yy1),X(xx2),Y(yy2)) +"<br/>");
			document.write("midY = "+ midY(X(xx1),Y(yy1),X(xx2),Y(yy2)) +"<br/>");
			document.write("highSchoolTrig = "+ highSchoolTrig(X(xx1),Y(yy1),X(xx2),Y(yy2)) +"<br/>");
			document.write("triangleMidLineDist = "+ triangleMidLineDist(X(xx1),Y(yy1),X(xx2),Y(yy2)) +"<br/>");
			document.write("Slope = "+ Slope(X(xx1),Y(yy1),X(xx2),Y(yy2)) +"<br/>");
			document.write("NrSlope = "+ NrSlope(X(xx1),Y(yy1),X(xx2),Y(yy2)) +"<br/>");
			document.write("SQRTtan = "+ SQRTtan(X(xx1),Y(yy1),X(xx2),Y(yy2)) +"<br/>");
			document.write("originX = "+ originX(X(xx1),Y(yy1),X(xx2),Y(yy2)) +"<br/>");
			document.write("originY = "+ originY(X(xx1),Y(yy1),X(xx2),Y(yy2)) +"<br/>");
			document.write("NewPointX = "+ NewPointX(X(xx1),Y(yy1),X(xx2),Y(yy2)) +"<br/>");
			document.write("NewPointY = "+ NewPointY(X(xx1),Y(yy1),X(xx2),Y(yy2)) +"<br/>");
			document.write("firstRad = "+ firstRad(X(xx1),Y(yy1),X(xx2),Y(yy2)) +"<br/>");
			document.write("secondRad = "+ secondRad(X(xx1),Y(yy1),X(xx2),Y(yy2)) +"<br/>");
			*/


			//var c = document.getElementById("myCanvas");
			//var ctx = c.getContext("2d");


			/*Point 1*/
			//ctx.beginPath();
			//ctx.arc(xx1,yy1,1,0,2*Math.PI);
			//ctx.stroke();

			/*Point 2*/
			//ctx.beginPath();
			//ctx.arc(xx2,yy2,1,0,2*Math.PI);
			//ctx.stroke();

			/*Midpoint*/
			//ctx.beginPath();
			//ctx.arc(midX(xx1,yy1,xx2,yy2),midY(xx1,yy1,xx2,yy2),1,0,2*Math.PI);
			//ctx.stroke();

			/*Test Big Circle*/
			
			var r = 500;
			
			function drawline()
			{
			
				var myarray = oneWayTripPath();

				var xx1 = myarray[0];
				var yy1 = myarray[1];
				var xx2 = myarray[2];
				var yy2 = myarray[3];

			
				ctx.strokeStyle = curveColor(xx1,yy1,xx2,yy2);
				ctx.beginPath();
				ctx.arc(originX(xx1,yy1,xx2,yy2),originY(xx1,yy1,xx2,yy2),r,Radcoef((firstRad(xx1,yy1,xx2,yy2)/Math.PI),xx1,yy1,xx2,yy2),Radcoef((secondRad(xx1,yy1,xx2,yy2)/Math.PI),xx1,yy1,xx2,yy2),trueFalse(xx1,yy1,xx2,yy2));
				ctx.stroke();
			}


			// Your MATHEMATICS ENDS
			
			
			
			
			/*
			function drawline()
			{
				var myarray = oneWayTripPath();
				ctx.moveTo(myarray[0],myarray[1]);
				ctx.lineTo(myarray[2],myarray[3]);
				ctx.stroke();
			}
			*/
			
			</script>
			
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