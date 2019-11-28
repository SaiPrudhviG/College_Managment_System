<?php
$username=$_POST['notif'];
$conn=mysqli_connect('localhost','root','hello','college');
if($conn->connect_error)
    die("connection failed".$conn->connecterror);
$sql1="insert into adminnotif values('$username')";
if($conn->query($sql1))
{
     
	 echo file_get_contents("adminhm.html"); 
}
else
{
    echo "registration unsuccessful";
}
?>                                                                                                                                                                                              
