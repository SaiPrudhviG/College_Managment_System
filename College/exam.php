<?php
$username=$_POST['uname'];
$p=$_POST['psw'];
if($username=="Exam" && $p==1234)
{

 	echo file_get_contents("examhm.html");
 }
else
    echo "Given username is not registered,please register first";
?>