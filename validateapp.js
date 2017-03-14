function validateForm()
{
	var isnotnumber=/[^0-9]/;
	var isnotalphanum=/[^0-9a-zA-Z]/;
	var emailreg=/^[\w\.\-]+\@[\w\.\-]+\.[a-zA-Z]{2,6}$/;
	var fn1= /^[a-zA-Z]+$/;
	var pnum=/^[0-9]{8,10}$/;
	var pnum1=/^[0-9]{9}$/;
	var paz=/^[\w\.\-\+\@\*]{6,}$/;
	var dat=/^[0-9]{4}[\-][0-9]{2}[\-][0-9]{2}$/;
	
	var fname=document.getElementById("fname").value;
	
	var lname=document.getElementById("lname").value;
	
	var doc=document.getElementById("doc").value;
	
	var phno=document.getElementById("phno").value;
	
	var pass=document.getElementById("pass").value;
	
	var date=document.getElementById("date").value;
	
	var email=document.getElementById("email").value;
	
	var address=document.getElementById("address").value;
	
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
	
	if(doc=="" || !fn1.test(doc))
	{
		alert("Enter valid Doctor's name");
		return false;
	}
	
	
	if(phno=="" || !pnum.test(phno))
	{
		alert("Enter valid Phone Number");
		return false;
	}
	
	if(pnum1.test(phno))
	{
		alert("Enter valid Phone Number 8 or 10 digits");
		return false;
	}
	
		if(email=="" || !emailreg.test(email))
	{
		alert("Enter valid email");
		return false;
	}
	
	if(pass=="" || !paz.test(pass))
	{
		alert("Enter valid password:\nShould contain atleast 6 characters");
		return false;
	}
	
	if(address=="")
	{
		alert("Enter valid Address");
		return false;
	}
	
	if(dat=="" || !dat.test(date))
	{
		alert("Enter valid date:\nShould be of yyyy-mm-dd format");
		return false;
	}
}