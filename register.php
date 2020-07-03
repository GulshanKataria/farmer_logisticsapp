<?php
error_reporting(0);
 session_start();
  
include("connection.php");
$FullName = filter_input(INPUT_POST, 'FullName');
$Email = filter_input(INPUT_POST, 'Email');
$Password = filter_input(INPUT_POST, 'Password');
$ConfirmPassword= filter_input(INPUT_POST, 'ConfirmPassword');
$Address= filter_input(INPUT_POST, 'Address');
$Phone= filter_input(INPUT_POST, 'Phone');
$ServiceType=filter_input(INPUT_POST, 'serv');
$Cities=filter_input(INPUT_POST, 'city');
$Working=filter_input(INPUT_POST, 'work');
$Tracking=filter_input(INPUT_POST, 'track');
$ColdStorage=filter_input(INPUT_POST, 'cold');
$OnlineSupport=filter_input(INPUT_POST, 'on');



$a=$_REQUEST['FullName'];
$_SESSION['name'] = $a;


$b=$_REQUEST['Email'];
$_SESSION['email'] = $b;

echo "$a";
echo "$b";



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
$sql = "INSERT INTO account (FullName, Password,ServiceType,Address,Phone,Cities,Working,Email,Tracking,ColdStorage,OnlineSupport)
values ('$FullName','$Password','$ServiceType','$Address','$Phone','$Cities','$Working','$Email','$Tracking','$ColdStorage','$OnlineSupport')";
if ($conn->query($sql)){
echo "You have been successfully registered! ";
header("refresh: 1; url = nlplogin.php"); 
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
?>