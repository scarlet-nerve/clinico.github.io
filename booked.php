<!DOCTYPE HTML>
<html lang="en">

	<head>
		<title>Clinico</title>
		<meta charset="utf-8">
		<meta name="description" content="It's How Medicine Should Be">
		<meta name="keywords" content="Clinico, Medical Services">
		<meta name="author" content="010624">
		<link rel="stylesheet" type="text/css" href="clinicostyle.css">
		<script src="validateapp.js"></script>
	</head>
	
	<body>
		<div>
			<div id="header">
				<div id="h_top">
					
						<div id="contact_info">
							<div id="left"><img src="images/contact.jpg"></div>
							<div id="left"><p>022-22222222</p></div>
							<div id="left"><img src="images/mail.jpg"></div>
							<div id="left"><p>info@Clinico.com</p></div>
						</div>
				</div>
				
				<div id="h_cen">
					<div id="logo">
						<a href="index.html"><img src="images/logo3.jpg" alt="Clinico"></a>
					</div>
					<div id="search">
						<form>
							<div id="left"><input type="text" name="search" class="round" placeholder="Search....."/></div>
							<div id="left"><input type="image" src="images/search.jpg" alt="Submit" class="button"></div>
						</form>
					</div>
				</div>
				
				
				<div id="h_bot">
					<div id="menu_cover">
						<ul class="menu">
							<li><a href="home.html">Home</a></li>
							<li><a href="depart.html">Departments</a></li>
							<li><a href="services.html">Care Areas</a></li>
							<li><a href="#">Find A Doctor</a></li>
							<li id="Appoint"><a href="book.html">Book An Appointment</a></li>
							<li><a href="mychart.html">MyChart</a></li>
							<li><a href="phylog.html">Physician Login</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div id="cont">
				<?php
					$dbc = mysqli_connect("localhost","root","","clinico") or die("unable to connect");
					
					mysqli_select_db($dbc,"clinico")or die("unable to select db");
					 $pf_name = $_POST['name1'];
					 $pl_name = $_POST['name2'];
					 $doc_name = $_POST['doc'];
					 $date = $_POST['date'];
					 $pwd = sha1($_POST['password']);
					 $mail = $_POST['emailid'];
					 $query = "select * from doctor where name='$doc_name'";
					 $result = mysqli_query($dbc,$query);
					 $row = mysqli_fetch_array($result);
					$d_id=$row['d_id'];

					$myquery = "select * from patient where d_id=$d_id";
					$myresult = mysqli_query($dbc,$myquery);
					if(mysqli_num_rows($myresult)>=15)
					{
					  echo 'All the appointments for today are full';

					}
					else{
					//Inserting the patient details in the database patient table


					$query1 = "INSERT INTO patient (f_name,l_name,d_id,date,pwd,emailid)
							   values('$pf_name', '$pl_name',$d_id,'$date', '$pwd','$mail')";

					mysqli_query($dbc,$query1);
					if(mysqli_affected_rows($dbc)>0)
					echo'your appointment is confirmed';
					else
					echo'false';
					}
					mysqli_close($dbc);
				?>

			</div>
			
			<div id="footer">
				<div  id="mleft">
					<div  id="m1left">
						<div><img src="images/location.jpg"></div>
						<div><p>Clinico</p></div>
					</div>
					<div id="m2left">
						<p>Gallifrey DW,<br>Galactic Coordinates | 10-0-11-0-0 by 0-2<br>From Galactic Zero Centre</p>
					</div>
					<div id="media">
						<br>
						<a href="https://www.facebook.com"><img src="images/facebook.jpg"></a>
						<a href="https://www.twitter.com"><img src="images/twitter.jpg"></a>
						<a href="https://www.youtube.com"><img src="images/youtube.jpg"></a>
						<a href="https://www.linkedin.com"><img src="images/linkedin.jpg"></a>
					</div>
					<div>
						
					</div>
					
				</div>
				
				<div id="mleft">
					<div id="m1left"><p>About Us</p></div>
					<div id="m2left">
						<p>
							<a href="#">History</a><br>
							<a href="#">Hospital Amenities</a><br>
							<a href="#">Awards and Accreditations</a><br>
							<a href="#">News and Media</a>
						</p>
					</div>
				</div>
				
				<div id="mleft">
					<div id="m1left"><p>Billing and Insurance</p></div>
					<div id="m2left">
						<p>
							<a href="#">MyChart</a><br>
							<a href="#">Billing Questions</a><br>
							<a href="#">Finanacial Assistance</a><br>
							<a href="#">Pay a Bill</a><br>
							<a href="#">Insurance Information</a>
						</p>
					</div>	
				</div>
				<div id="mleft">
					<div id="m1left"><p>For Medical Professionals</p></div>
					<div id="m2left">
						<p>
							<a href="#">Physician Login</a><br>
							<a href="#">For Physicians</a><br>
							<a href="#">For Nurses</a><br>
						</p>
					</div>
					
				</div>
				
				
			</div>
			
			<div id="end">
				<h5 id="dead_center">Copyright &copy2016 Clinico | All rights reserved</h5>
			</div>
		</div>
	</body>