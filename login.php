<?php

$dbc = mysqli_connect('localhost','root','','clinico');
mysqli_select_db($dbc,"clinico")or die("unable to select db");


$f_name = $_POST['name1'];
$l_name = $_POST['name2'];
$pwd = sha1($_POST['password']);



$query = "select * from patient where f_name='$f_name' AND l_name='$l_name' AND pwd ='$pwd'";
$result = mysqli_query($dbc , $query);

if(mysqli_num_rows($result) == 0)
{
   echo'The username or password you entered is incorrect.</br>';

}
else
{echo'You are registered';
echo "\n" ;

 $query = "select * from patient where f_name='$f_name' AND l_name='$l_name' AND pwd='$pwd' ";
 $myresult = mysqli_query($dbc, $query);
 $result = mysqli_fetch_array($myresult);
 $d_id = $result['d_id'];
 $date = $result['date'];
 $query = "select name from doctor where d_id=$d_id ";
 $dname= mysqli_query($dbc,$query);
$d1name=mysqli_fetch_array($dname);
$doctorname=$d1name['name'];
 echo 'Welcome'. ' ' . $f_name.' '.$l_name.'</br>';
 echo "Your appointment with doctor $doctorname  on $date has been confirmed</br>";

//cancelling the appointment
 echo ' Do you want to cancel your appointment? </br>';
 echo '<from action = "http://localhost/clinico/login.php" method = "post">';
 echo '<input type = "radio" value = "yes" name="cancel">Yes</br>';
 echo '<input type= "radio" value="no" name="cancel">No </br>';
 //echo '<input type="hidden" value="'.$id.'" name="pass" ></br>';
  echo '<input type="hidden" value="'.$pwd.'" name="pass1" ></br>';
 echo '<input type = "submit">';

}

/*if(isset($_POST['cancel']))
{  if ($_POST['cancel'] == "yes"){
  $query = "delete * from patient where p_id=$_POST['pass']";
  mysqli_query($dbc,$query);
 echo 'Your Appointment was cancelled successfully';
 }
else{} */

mysqli_close($dbc);
?> 