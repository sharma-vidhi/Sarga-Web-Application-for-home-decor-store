<?php
$database="sarga";
$name=$_POST['name-id'];//this values comes from html file after submitting 
$email=$_POST['email-id'];
$message=$_POST['message-id'];
    $con = mysql_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("$database", $con);

$query = "INSERT INTO records (Name,E-mail,Message)VALUES ('$name','$email','$message')";
mysql_query($query);

echo "<script type='text/javascript'>\n";
echo "alert('you are Succesflly registered');\n";
echo "</script>"; 


mysql_close();
?>

