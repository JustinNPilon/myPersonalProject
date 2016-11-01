/*
Name: Justin Pilon
Id: 000452053
*/

function validate() 
{
	var stat = true;
	
	var field1 = document.forms[0].fname;
	if (field1.value == "")
	{
		alert("Must enter your first name");
		field1.style.backgroundColor = "cyan";
		stat = false;
	}
	
	var field2 = document.forms[0].lname;
	if (field2.value == "")
	{
		alert("Must enter your last name");
		field2.style.backgroundColor = "cyan";
		stat = false;
	}
	
	var field3 = document.forms[0].address;
	if (field3.value == "")
	{
		alert("Must enter your address");
		field3.style.backgroundColor = "cyan";
		stat = false;
	}
	
	var field4 = document.forms[0].city;
	if (field4.value == "")
	{
		alert("Must enter your city");
		field4.style.backgroundColor = "cyan";
		stat = false;
	}
	
	var field5 = document.forms[0].province;
	if (field5.value == "")
	{
		alert("Must enter your province/state");
		field5.style.backgroundColor = "cyan";
		stat = false;
	}
	
	var regexpr1 = /\b\w+\.[a-z0-9_]+@[a-z]+\.ca\b/gi;
	var field6 = document.forms[0].email;
	if ((regexpr1.test(field6.value) != true))
	{
		alert("Must be a valid Email address");
		field6.style.backgroundColor = "cyan";
		stat = false;
	}
	
	var regexpr2 = /^[A-Z]\d[A-Z] ?\d[A-Z]\d$/;
	var field7 = document.forms[0].postalCode;
	if ((regexpr2.test(field7.value) != true))
	{
		alert("Must be a valid postal code");
		field7.style.backgroundColor = "cyan";
		stat = false;
	}
	
	return stat;
}

var myimages = ["WestJet.png","Oceanic.png","Delta.png","AirCanada.png"];

function displayImage(index)
{ 
	var img = document.getElementById("myimg");
	img.src = myimages[index];
}

function OrderedList(lst)
{
var returnString = ""
returnString += "<ol>";
var i = 0;
while (i < lst.length)
{
returnString = returnString + "<li>"+ lst[i] +"</li>";
i++;
}
//for (var i = 0; i < lst.length; i++)
//	{
//	returnString += "<li>"+ lst[i] +"</li>";
//	}
returnString += "</ol>";
return returnString;
}

function emailAccumulation(string)
{
	var str = string;
	var regexp = /\b\w+\.[a-z0-9_]+@[a-z]+\.ca\b/gi;
	n = str.match(regexp);
	document.getElementById("gatheredEmails").innerHTML = OrderedList(n);
}
