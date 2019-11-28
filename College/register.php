<?php
$username=$_POST['uname'];
$password=$_POST['psw'];
$conn=mysqli_connect('localhost','root','hello','college');
if($conn->connect_error)
    die("connection failed".$conn->connecterror);
$sql1="insert into student values('$username','$password')";
if($conn->query($sql1))
{
     
	 echo file_get_contents("panel.html"); 
}
else
{
    echo "registration unsuccessful";
}
?>                                                                                                                                                                                              
