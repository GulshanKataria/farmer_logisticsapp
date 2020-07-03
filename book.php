<?php
  session_start();
include("connection.php");
error_reporting(0);
?>


<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<title></title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css1/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css1/style.css" />
<style>

.back{
	align-items: center;
}

</style>
	
</head>

<body>
						
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Conform Booking</h1>
						</div>
						<form action="delivery.html" method='POST'>

	<div class="form-btn">	
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control" name="name" type="text" placeholder="Enter your name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" name="email" type="email" placeholder="Enter your email">
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control" name="phone" type="tel" placeholder="Enter your phone number">
							</div>
							<div class="form-group">
								<span class="form-label">Exact Pickup Location</span>
								<textarea class="input" rows="3" cols="80" name="location"></textarea>
							</div>
							<div class="form-group">
								<span class="form-label">Pick Up City Name:</span>
								<input class="form-control" name="city" type="text" placeholder="Enter ZIP/Location">
							</div>
							<div class="form-group">
								<span class="form-label">Destination City Name:</span>
								<input class="form-control" name="city1" type="text" placeholder="Enter ZIP/Location">
							</div>
							<div class="form-group">
								<span class="form-label">Exact Destination Location</span>
								<textarea class="input" rows="3" cols="80" name="location1"></textarea>
							</div>
							
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Pickup Date</span>
										<input class="form-control" name="date" type="date" required>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Hour</span>
												<select class="form-control" name="hour">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>10</option>
													<option>11</option>
													<option>12</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Min</span>
												<select class="form-control" name="minute">
													<option>05</option>
													<option>10</option>
													<option>15</option>
													<option>20</option>
													<option>25</option>
													<option>30</option>
													<option>35</option>
													<option>40</option>
													<option>45</option>
													<option>50</option>
													<option>55</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">AM/PM</span>
												<select class="form-control" name="time">
													<option>AM</option>
													<option>PM</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							 <script
                src="https://checkout.razorpay.com/v1/checkout.js"
                data-key="rzp_test_S5rUPdTshyLWiX"
                data-amount="10000"
                data-buttontext="Pay Now"
                data-name="NVRage"
                data-description="NVRage"
                data-image="https://www.2checkout.com/resources/e..."
                data-prefill.name=""
                data-prefill.email=""
                data-theme.color="#F37254">
        </script>
         <input type="hidden" value='hidden' name='hidden'>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php


//$second=$_REQUEST['name'];

//echo "$second";
 

$a=$_SESSION['tracking'];
$b=$_SESSION['typeofservice'];
$c=$_SESSION['truck'];
$d=$_SESSION['material'];
$e=$_SESSION['nlp'];





if($_GET['submit']){


$f=$_GET['name'];
$g=$_GET['email'];
$h=$_GET['phone'];
$i=$_GET['location'];

$j=$_GET['city'];
$k=$_GET['city1'];
$l=$_GET['location1'];


$m=$_GET['date'];
$n=$_GET['hour'];
$o=$_GET['minute'];
$p=$_GET['time'];

$second=$_REQUEST['name'];
 

if($a!="" && $b!="" && $c!="" && $d!="" && $e!="" && $f!="" && $g!="" && $h!=""  && $i!="" && $j!="" && $k!="" && $l!="" && $m!="" && $n!=""&& $o!=""&& $p!="") {

$query="INSERT INTO customer_detail (tracking,typeofservice,truck,material,nlp,name,email,phone,location,city,city1,location1,date,hour,minute,time)
VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p') ";


$data=mysqli_query($conn,$query);

if($data){
	echo"data inserted";
}




else{
	echo "insert all";
}

}
}
?>	
<script type="text/javascript">
	function pay(){
		window.location.href = 'payment.html';
	}
</script>

</body>
</html>