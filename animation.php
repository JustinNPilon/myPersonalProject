<!DOCTYPE html>
<html>
<body>

<p id="float" style="position:absolute; left:20px"><img src="Shark.gif"/></p>
<button onclick="slide()">Initiate Animation</button>

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





</body>


</html>