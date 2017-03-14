function validateForm()
{
	var isnotnumber=/[^0-9]/;
	var isnotalphanum=/[^0-9a-zA-Z]/;
	var paz=/^[\w\.\-\+\@\*]{6,}$/;
	var fn1= /^[a-zA-Z]+$/;
	
	var fname=document.getElementById("fname").value;
	
	var lname=document.getElementById("lname").value;
	
	var pass=document.getElementById("pass").value;
	
	if(fname=="" || !fn1.test(fname))
	{
		alert("Enter valid First name");
		return false;
	}

	if(lname=="" || !fn1.test(lname))
	{
		alert("Enter valid Last name");
		return false;
	}
	
	if(pass=="" || !paz.test(pass))
	{
		alert("Enter valid password:\nShould contain atleast 6 characters");
		return false;
	}

	
}