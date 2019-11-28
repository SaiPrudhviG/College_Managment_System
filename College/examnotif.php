<?php
$s1=$_POST['date'];
$d1=$_POST['sub'];
$s2=$_POST['date1'];
$d2=$_POST['sub1'];
$s3=$_POST['date2'];
$d3=$_POST['sub2'];
$s4=$_POST['date3'];
$d4=$_POST['sub3'];
$s5=$_POST['date4'];
$d5=$_POST['sub4'];
$s6=$_POST['date5'];
$d6=$_POST['sub5'];
$conn=mysqli_connect('localhost','root','hello','college');
if($conn->connect_error)
    die("connection failed".$conn->connecterror);
$sql1="insert into examtimetable values('$d1','$s1','$d2','$s2','$d3','$s3','$d4','$s4','$d5','$s5','$d6','$s6')";
if($conn->query($sql1))
{
     
	 echo file_get_contents("examhm.html"); 
}
else
{
    echo "registration unsuccessful";
}
?>                                                                                                                                                                                              
