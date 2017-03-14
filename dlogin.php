<?php

$dbc = mysqli_connect('localhost','root','','clinico');
mysqli_select_db($dbc,"clinico")or die("unable to select db");

$name = $_POST['doc'];
$pwd = sha1($_POST['password']);
$d_id  = (int)$_POST['d_id'];
$query = "select * from doctor where name='$name' AND pwd='$pwd'  ";
$result = mysqli_query($dbc,$query);
/*if(mysqli_num_rows($result) == 0)*/
if(mysqli_affected_rows($dbc)>0)
{
 echo ' You have entered a wrong username or password</br>';

}

else
{
 
 $query1= "select * from patient where d_id=$d_id";
 $result1 = mysqli_query($dbc,$query1);
$count=1;
 
 while($row = mysqli_fetch_array($result1))
 {  echo '<table>';
    echo '<tr><td>Patient Number</td><td>'.$count.'</td></tr>';
    echo '<tr><td>Patient Name </td><td>'.$row['f_name'].' ',$row['l_name'].'</td></tr>';
    echo '</table>';
    $count= $count + 1;
    echo "\n";
 } 
echo "\n\n";
}
mysqli_close($dbc);
?>