function email()
{
	document.Pro.Email.readOnly = true;
	document.Pro.Email.style="background-color: #d9d9d9";
}
function fastname()
{
	var i=document.Pro.fname.value.length;
	if(i>=2 && i<=8)
	{
		document.getElementById("fna").style = "visibility: hidden";
		document.Pro.fname.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("fna").style = "visibility: visible";
		document.Pro.fname.style="background-color: #ff6666";
		return false;
	}
}
function lastname()
{
	var i=document.Pro.lname.value.length;
	if(i>=2 && i<=8)
	{
		document.getElementById("lna").style = "visibility: hidden";
		document.Pro.lname.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("lna").style = "visibility: visible";
		document.Pro.lname.style="background-color: #ff6666";
		return false;
	}
}
function g()
{
	var i=document.Pro.gender.value.length;
	if(i!=0)
	{
		return true;
	}
	else
	{
		return false;
	}
}
function datecheck() {
	var date = document.getElementById('db').value.length;
	if (date > 0) {
		document.getElementById("dob").style = "visibility: hidden";
		document.getElementById('db').style = "background-color: white";
		return true;
	}
	else {
		document.getElementById("dob").style = "visibility: visible";
		document.getElementById('db').style = "background-color: #ff6666";
		return false;
	}
}
function cpass()
{
	var i=document.Pro.CPassword.value.length;
	if(i>=8 && i<=15)
	{
		document.getElementById("cps").style = "visibility: hidden";
		document.Pro.CPassword.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("cps").style = "visibility: visible";
		document.Pro.CPassword.style="background-color: #ff6666";
		return false;
	}
}
function npass()
{
	var i=document.Pro.NPassword.value.length;
	if(i==0 || (i>=8 && i<=15))
	{
		document.getElementById("nps").style = "visibility: hidden";
		document.Pro.NPassword.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("nps").style = "visibility: visible";
		document.Pro.NPassword.style="background-color: #ff6666";
		return false;
	}
}
function cnpass()
{
	var i=document.Pro.CNPassword.value.length;
	if(i==0 || (i>=8 && i<=15))
	{
		if(document.Pro.NPassword.value==document.Pro.CNPassword.value)
		{
			document.getElementById("cnps").style = "visibility: hidden";
			document.Pro.CNPassword.style="background-color: white";
			return true;
		}
		else
		{
			document.getElementById("cnps").innerHTML = "Not Matched";
			document.getElementById("cnps").style = "visibility: visible";
			document.Pro.CNPassword.style="background-color: #ff6666";
			return false;
		}
	}
	else
	{
		document.getElementById("cnps").innerHTML = "(range: 8-15)";
		document.getElementById("cnps").style = "visibility: visible";
		document.Pro.CNPassword.style="background-color: #ff6666";
		return false;
	}
}
function phne()
{
	var i=document.Pro.phone.value.length;
	var p=document.Pro.phone.value;
	var num = Math.sign(p)
	if(i==11)
	{
		if(Number.isInteger(parseInt(p)) && (parseInt(p).toString().length==10 ||parseInt(p).toString().length==11))
		{
			if(num == 1)
			{
				document.getElementById("pn").style = "visibility: hidden";
				document.Pro.phone.style="background-color: white";
				return true;
			}
			else
			{
				document.getElementById("pn").innerHTML = "(invalid)";
				document.getElementById("pn").style = "visibility: visible";
				document.Pro.phone.style="background-color: #ff6666";
				return false;
			}
		}
		else
	{
		
		document.getElementById("pn").innerHTML = "(invalid)";
		document.getElementById("pn").style = "visibility: visible";
		document.Pro.phone.style="background-color: #ff6666";
		return false;
	}
	}
	else
	{
		document.getElementById("pn").style = "(range:11-11)";
		document.getElementById("pn").style = "visibility: visible";
		document.Pro.phone.style="background-color: #ff6666";
		return false;
	}
}
function update()
{
	if(!fastname())
	{
		document.Pro.fname.focus();
		return false;
	}
	else if (!lastname())
	{
		document.Pro.lname.focus();
		return false;
	}
	else if (!g())
		{document.Pro.gender.focus();
			return false;
	}
	else if (!datecheck())
	{
			return false;
	}
	else if (!cpass())
		{document.Pro.CPassword.focus();
			return false;
	}
	else if (!npass())
		{document.Pro.NPassword.focus();
			return false;
	}
	else if (!cnpass())
		{document.Pro.CNPassword.focus();
			return false;
	}
	else if (!phne())
		{document.Pro.phone.focus();
			return false;
	}
	else 
		{
			return true;
	}
}
function eroad()
{
	alert('Some thing is missing');
}