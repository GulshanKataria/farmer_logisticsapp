
<?php
session_start();
error_reporting(0);
  
include("connection.php");
?>
<html>
<head>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 20px;
text-align: left;
}
th {
background-color: #5b6e2e;
color: white;
}
button{
	background-color: #C7DBE1
}
.jumbotron{
	
	
background-color: #5b6e2e;
color: white;

}
.name{
	text-align: center;

}
tr:nth-child(even) {background-color: #f2f2f2}




</style>
</head>


	<title> Customer Requests</title></head>
<body>
<?php

$b=$_SESSION['Email'];
$a=$_SESSION['name'];
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'nlp'); //where customers is the database
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

$query="SELECT * from customer_detail WHERE   nlp = '$a' "; // Fetch all the records from the table address
$result=mysqli_query($db,$query);
?>

<section class="jumbotron-section-1">
                <div class="jumbotron no-margin jumbotron-section-1-bg">
                    <div class="container-fluid introduction">
                        <h2 class="name">REQUEST FROM CUSTOMERS</h2>
                        
                        <a href="#" class="visible-xs btn call-me"></a>
                    </div>      
                </div> 
            </section>

 

 
<table border="1">
<tr>
<th> NAME </th>
<th> EMAIL</th>
<th> PHONE</th>
<th> TRACKING(YES/NO)</th> 
<th>TYPE OF SERVICE</th>
<th> TRUCK NAME</th> 
<th> PICK UP CITY NAME</th> 
<th>PICK UP LOCATION</th> 
<th>DROP CITY</th> 
<th>DROP LOCATION</th> 
<th>DATE</th> 
<th>HOUR</th>
<th>MINUTE</th>
<th>TIME</th>
</tr>
<?php
 
$sql = "SELECT * from customer_detail where nlp='$a' ";

$result = $conn->query($sql);

if ($result && $result->num_rows) {
    
    
    while($row = $result->fetch_assoc()) {

        echo "<tr> <td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["tracking"]."</td><td>".$row["typeofservice"]."</td><td>".$row["truck"]."</td><td>".$row["city"]."</td><td>".$row["location"]."</td><td>".$row["city1"]."</td><td>".$row["location1"]."</td><td>".$row["date"]."</td><td>".$row["hour"]."</td><td>".$row["minute"]."</td><td>".$row["time"]."</td> ";
$e=$row["name"];
$_SESSION['nlp']=$e;
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();


?>

</table>
</body>
</html>