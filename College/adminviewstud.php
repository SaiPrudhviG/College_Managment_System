
<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:#f4f7f7;
}

li {
    float: left;
}

li a {
    display: block;
    color: #5990ea;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body>

<ul><li><a href="hmpage.html" class="active">Home</a></li>    
						<li><a href="panel.html" class="scroll">Student Login</a></li> 
<li><a href="registration.html" class="scroll">Student Registration</a></li>
<li><a href="facultyr.html" class="scroll">Faculty Registration</a></li>						
						<li><a href="facultyl.html" class="scroll">Faculty Login</a></li>    
						<li><a href="Adminl.html" class="scroll">Admin Login</a></li>    	
					<li><a href="examl.html" class="scroll">Exam Center Login</a></li>
					</ul>

</body>
</html>
<?php
$conn=mysqli_connect('localhost','root','hello','college');
 echo "<h1><b>Hello !</b></h1>";
// Checking mysql connection
 
// Writing a mysql query 
 ?>
 <?php
 

	$sql = "select username from student";
 
	$qury = mysqli_query($conn,$sql);
 
	while($row = mysqli_fetch_array($qury))
		echo "<br><h3>Student's Name:</h3> $row[0]</br><br>";
 echo "--------------------------------------------------------------------------------------------------------------------------------------------------";
			 
$conn->close();
?>

