<?php
$FullName = filter_input(INPUT_POST, 'FullName');
$Email = filter_input(INPUT_POST, 'Email');
$Password = filter_input(INPUT_POST, 'Password');
$ConfirmPassword= filter_input(INPUT_POST, 'ConfirmPassword');
$Address= filter_input(INPUT_POST, 'Address');
$Phone= filter_input(INPUT_POST, 'Phone');


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
$sql = "INSERT INTO farmer (FullName, Password,Email,Address,Phone)
values ('$FullName','$Password','$Email','$Address','$Phone')";
if ($conn->query($sql)){
echo "You have been successfully registered! ";
header("refresh: 1; url = farmerlogin.html"); 
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
?>