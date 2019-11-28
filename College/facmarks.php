<?php
$stname=$_POST['stuname'];
$firstyear=$_POST['1'];
$Secondyear=$_POST['2'];
$Thirdyear=$_POST['3'];
$Fourthyear=$_POST['4'];

$conn=mysqli_connect('localhost','root','hello','college');
if($conn->connect_error)
    die("connection failed".$conn->connecterror);
$sql1="insert into results values('$stname','$firstyear','$Secondyear','$Thirdyear','$Fourthyear')";

if($conn->query($sql1))
{
     
	 echo file_get_contents("facultyhm.html"); 
}
else
{
    echo "registration unsuccessful";
}
?>                                                                                                                                                                                              
