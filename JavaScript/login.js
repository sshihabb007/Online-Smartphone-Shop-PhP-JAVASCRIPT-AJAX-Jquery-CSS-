function chkemail()
{
	var i =document.login.Email.value.length;
	var j=document.login.Email.value;
	if(i==0)
	{
		document.login.Email.style="background-color: #ff6666";
		return false;
	}
	else
	{
		var indx=j.indexOf("@");
		if(indx>1)
		{
			if(j.indexOf(".",indx)>1)
			{
				document.login.Email.style="background-color: white";
				return true;
			}
			else
			{
				document.login.Email.style="background-color: #ff6666";
				return false;
			}
		}
		else
		{
			document.login.Email.style="background-color: #ff6666";
			return false;
		}
	}
}

function chkepass()
{
	var i =document.login.Password.value.length;
	if(i==0)
	{
		document.login.Password.style="background-color: #ff6666";
		return false;
	}
	else
	{
		document.login.Password.style="background-color: white";
		return true;
	}
}

function logvf()
{
	if(!chkemail())
	{
		document.login.Email.focus();
		return false;
	}
	if(!chkepass())
	{
		document.login.Password.focus();
		return false;
	}
	else return true;
}