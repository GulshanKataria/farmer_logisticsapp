<?php
  session_start();
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
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
<body>

<body>
<section class="jumbotron-section-1">
                <div class="jumbotron no-margin jumbotron-section-1-bg">
                    <div class="container-fluid introduction">
                        <h2 class="name">NLP IN YOUR LOCATION</h2>
                        
                        <a href="#" class="visible-xs btn call-me"></a>
                    </div>      
                </div> 
            </section>
  

<div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordered table-hover">
    <tr>
<th>NLPNAME</th>
<th>CONTACT</th>
<th>PRICE</th>
<th>OVERALL REVIEW</th>
<th>TRACKING</th>
<th>COLD STORAGE</th>
<th>ONLINE FACILITY</th>
<th>Booking</th>


</tr>
<?php
  

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nlp";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




$first=$_REQUEST['source'];
$second=$_REQUEST['destination'];

$a=$_REQUEST['tracking'];
$b=$_REQUEST['typeofservice'];
$c=$_REQUEST['truck'];
$d=$_REQUEST['material'];

$_SESSION['tracking'] = $a;
$_SESSION['typeofservice'] = $b;
$_SESSION['truck'] = $c;
$_SESSION['material'] = $d;



$sql = "SELECT name,contact,price,reviews,tracking,coldstorage,online  FROM providers where source='$first' and destination='$second' ";

$result = $conn->query($sql);

if ($result && $result->num_rows) {
    
    
    while($row = $result->fetch_assoc()) {

        echo "<tr> <td>".$row["name"]."</td><td>".$row["contact"]."</td><td>".$row["price"]."</td><td>".$row["reviews"]."</td><td>".$row["tracking"]."</td><td>".$row["coldstorage"]."</td><td>".$row["online"]."</td><td><form action='book.php'>
    
    <input type='submit' value='Submit' class='btn btn-success' />
</form></td>";
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
</div>
</div>
</div>
</div>


</body>
</body>
</body>
</html>