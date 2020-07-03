<?php
session_start();
error_reporting(0);
include('connection.php');

$EmailId = filter_input(INPUT_POST, 'Email');
$LoginPassword = filter_input(INPUT_POST, 'Password');
$Name = filter_input(INPUT_POST, 'FullName');




$b=$_REQUEST['Email'];
$_SESSION['Email'] = $b;




if (!empty($EmailId) && !empty($LoginPassword)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "nlp";
$db="farmer";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "SELECT Email FROM farmer WHERE Email = '$EmailId' and Password = '$LoginPassword'";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
if($count > 0)
{
	echo "Logged In Successfully";
	echo "<br>";
	echo "Redirecting to Home Page";
	header("refresh: 1; url = home.php"); 
}
$conn->close();
}
}
?>