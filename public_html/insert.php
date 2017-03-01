<?php

$con=mysqli_connect("localhost", "root", "","sarga");
if (!empty($con))
{
	$name = $_POST['name-id'];
	$e_mail = $_POST['email-id'];
	$msg = $_POST['message-id'];
	
		$sql = "INSERT INTO records (Name,E-mail,Message)
		VALUES ('$name','$e_mail','$msg')";
		$res=mysqli_query($con,$sql);

	//echo "1 record added";
	echo "<script type='text/javascript'>\n";
echo "alert('you are Succesflly registered');\n";
echo "</script>"; 

}

header("location:/sarga/index.html");
?>