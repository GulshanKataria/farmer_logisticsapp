<?php
$FullName = filter_input(INPUT_POST, 'FullName');
$Email = filter_input(INPUT_POST, 'Email');
$Password = filter_input(INPUT_POST, 'Password');
$ConfirmPassword= filter_input(INPUT_POST, 'ConfirmPassword');
$Address= filter_input(INPUT_POST, 'Address');
$Phone= filter_input(INPUT_POST, 'Phone');
$Latitude= filter_input(INPUT_POST, 'Latitude');
$Longitude= filter_input(INPUT_POST, 'Longitude');
$PestControl= filter_input(INPUT_POST, 'PestControl');
$FireSystem= filter_input(INPUT_POST, 'FireSystem');
$Guard= filter_input(INPUT_POST, 'Guard');
$Loading= filter_input(INPUT_POST, 'Loading');
$Cctv= filter_input(INPUT_POST, 'Cctv');
$Access= filter_input(INPUT_POST, 'Access');

if (!empty($FullName) && !empty($Email) && !empty($Password)){
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
$sql = "INSERT INTO warehouse (FullName, Password,Email,Address,Phone,Latitude,Longitude,PestControl,FireSystem,Guard,Loading,Cctv,Access)
values ('$FullName','$Password','$Email','$Address','$Phone','$Latitude','$Longitude','$PestControl','$FireSystem','$Guard','$Loading','$Cctv','$Access')";
if ($conn->query($sql)){
echo "You have been successfully registered! ";
header("refresh: 1; url = warehouselogin1.php"); 
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
?>