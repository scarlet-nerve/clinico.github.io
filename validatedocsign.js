function validateForm()
{
	var isnotnumber=/[^0-9]/;
	var isnum= /^[0-9]{1,}$/;
	var isnotalphanum=/[^0-9a-zA-Z]/;
	var paz=/^[\w\.\-\+\@\*]{6,}$/;

	
	var did=document.getElementById("d_id").value;
	var pass=document.getElementById("pass").value;
	
		if(did=="" || !isnum.test(did))
	{
		alert("Enter valid Personnel Id:\nShould contain only digits\nShould not contain special characters\nShould not contain spaces");
		return false;
	}
	
	if(pass=="" || !paz.test(pass))
	{
		alert("Enter valid password:\nShould contain atleast 6 characters");
		return false;
	}
	
}