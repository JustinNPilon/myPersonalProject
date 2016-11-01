<?php
$title = "Links"; // this is the title of you page
require("header.php");
//include(header.php);
?>
	
	<?php
	$data = array("fred","smith","1 home st.","Calgary","AB","q1q1q1","CA","403-555-555","403-555-666","403-555-7777","boom@home.com",5)
	require("header.php");
	?>
	
	
	<table border="1">
	<?php
		for ($i=1; $i<=2; $i++)
		{
			print("<tr>");
			print("<td>$i</td><td><a href='page$i.php' >Page $i</a></td>");
			print("</tr>");
		}
	?>
	</table>
	
	<h1>Good
	<?php
		$hour = date("G");
		if ($hour < 12)
		{
			print("Morning");
		}
		elseif ($hour < 18)
		{
			print("Afternoon");
		}
		else
		{
			print("Evening");
		}
	?>
	</h1>
	
	<?php
	$dbh = mysqli_connect("localhost","Abel","password","travelexperts");
	if (!$dbh)
	{
		print(mysqli_connect_error());
	}
	else
	{
		print("connected");
	}
	//do something
	$sql = "INSERT INTO `travelexperts`.`customers` (`CustomerId`, `CustFirstName`, `CustLastName`, `CustAddress`, `CustCity`, `CustProv`, `CustPostal`, `CustCountry`, `CustHomePhone`, `CustBusPhone`, `CustEmail`, `AgentId`) VALUES (NULL, '$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]', '$data[6]', '$data[7]', '$data[8]', '$data[9]', '$data[10]', $data[11]);";
	
	$result = mysqli_query($dbh, $sql);
	print("result=$result");
	
	mysqli_close($dbh);
	?>
	
	
		
<?php
require("footer.php");
//include(footer.php);
?>