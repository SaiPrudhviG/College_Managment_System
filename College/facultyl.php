<?php
$username=$_POST['uname'];
$p=$_POST['psw'];
$conn=new mysqli('localhost','root','hello','college');
$sql="select password from faculty where username='$username'";
$result=$conn->query($sql);
if($result->num_rows)
{
    $res=$result->fetch_assoc();
    $pc=$res['password'];
    if($p==$pc)
		echo file_get_contents("facultyhm.html"); 
    else
        echo "enter correct password";
}
else
    echo "Given username is not registered,please register first";
?>
</body>
</html>