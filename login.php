<?php
session_start();
error_reporting(0);
include('connection.php');

$EmailId = filter_input(INPUT_POST, 'Email');
$LoginPassword = filter_input(INPUT_POST, 'Password');
$Name = filter_input(INPUT_POST, 'FullName');




$b=$_REQUEST['Email'];
$_SESSION['Email'] = $b;



echo "$b";

if (!empty($EmailId) && !empty($LoginPassword)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "nlp";
$db="account";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "SELECT Email FROM account WHERE Email = '$EmailId' and Password = '$LoginPassword'";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
if($count > 0)
{
	echo "Logged In Successfully";
	echo "<br>";
	echo "Redirecting to Request from Customers Page";
	header("refresh: 1; url = nlprequest.php"); 
}
$conn->close();
}
}
?>