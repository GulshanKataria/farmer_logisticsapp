<?php
$EmailId = filter_input(INPUT_POST, 'Email');
$LoginPassword = filter_input(INPUT_POST, 'Password');
if (!empty($EmailId) && !empty($LoginPassword)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "nlp";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "SELECT Email FROM warehouse WHERE Email = '$EmailId' and Password = '$LoginPassword'";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
if($count > 0)
{
	echo "Logged In Successfully";
	echo "<br>";
	header("refresh: 1; url = warehouselogin1.php"); 
}
$conn->close();
}
}
?>