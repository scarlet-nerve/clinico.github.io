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
if(mysqli_num_rows($myresult) >=15 )
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






  