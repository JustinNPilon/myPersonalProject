<?php
$title = "Links"; // this is the title of you page
require("header.php");
//include(header.php);
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
	
	//$result = mysqli_query($dbh,"SELECT * FROM `customers`"); // The whole table
	//$result = mysqli_query($dbh,"SELECT * FROM `customers` where AgentId=1"); // Just customers with agent 1
	$result = mysqli_query($dbh,"SELECT CustFirstName, CustLastName, CustHomePhone FROM `customers`"); // first name last name and phone number
	
	print("<table border='1'>");
	$headernotprinted = true;
	while ($row = mysqli_fetch_row($result))
	{
		if ($headernotprinted)
		{
			$keys = array_keys($row);
			print("<tr>");
			foreach ($keys as $key)
			{
				print("<th>$key</th>");
			}
			print("</tr>");
			$headernotprinted = false;
		}
		
		print("<tr>");
		foreach($row as $col)
		{
			print("<td>$col</td>");
		}
		print("</tr>");
	}
	print("</table>");
	
	mysqli_close($dbh);
	?>
	
	
		
<?php
require("footer.php");
//include(footer.php);
?>