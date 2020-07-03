<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006288/BBBootstrap/choices.min.css?version=7.0.0">
<script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006273/BBBootstrap/choices.min.js?version=7.0.0"></script>

<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="nlp.css">
<link rel="text/javascript" href="nlp.js">
</head>
<body>
<div class="container">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Logistic Network Provider Registeration</h4>
	<p class="text-center">Get your customers set in soon!</p>
	<form method="post" action="register.php">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="FullName" class="form-control" placeholder="Full name" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="Email" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->
     <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-address-book"></i> </span>
		 </div>
        <input name="Address" class="form-control" placeholder="Full Address" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">+91</option>
		    <option value="1">+022</option>
		</select>
    	<input name="Phone" class="form-control" placeholder="Phone number" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select class="form-control" id="ServiceType">
			<option value="FullTruck">Full Truck >3000kg</option>
			<option value="PartTruck">Part Truck 500-3000kg</option>
			<option value="Parcel">Parcel <500kg</option>
		</select>
	</div> <!-- form-group end.// -->

<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
 		<select class="form-control" id="choices-multiple-remove-button" placeholder="Select Delivery cities" multiple>
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
            <option value="Chennai">Chennai</option>
            <option value="Bangalore">Bangalore</option>
            <option value="Bhopal">Bhopal</option>
            <option value="Nagpur">Nagpur</option>
            <option value="Pune">Pune</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Ahemadabad">Ahemadabad</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Surat">Surat</option>
            <option value="Lucknow">Lucknow</option>
            <option value="Agra">Agra</option>
        </select> 
</div>

<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
		</div>
 		<select class="form-control" id="workingdays" placeholder="Select working days" multiple>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
        </select> 
</div>

  <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i> </span>
		</div>
		<input class="form-control" placeholder="From " disabled="" type="text" style="max-width: 70px;">
    	<input class="form-control" type="time" value="13:45:00" id="example-time-input">
		<input class="form-control" placeholder="To" disabled type="text" style="max-width: 60px;">
    	<input class="form-control" type="time" value="13:45:00" id="example-time-input">
    </div>


      
  <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i> </span>
		</div>
		<!-- Default inline 1-->
		<div class="form-control">
		<label>Tracking available?</label>
<span></span><span></span><span></span>
	<!-- Default inline 1-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample" value="1">
  <label class="custom-control-label" for="defaultInline1">Yes</label>
</div>

<!-- Default inline 2-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadiosExample" value="0">
  <label class="custom-control-label" for="defaultInline2">No</label>
</div>
</div>
</div>

 <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i> </span>
		</div>
		<!-- Default inline 1-->
		<div class="form-control">

		<label>Cold storage </label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<!-- Default inline 1-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline3" name="inlineDefaultRadiosExample3" value="1">
  <label class="custom-control-label" for="defaultInline3">Yes</label>
</div>

<!-- Default inline 2-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline4" name="inlineDefaultRadiosExample3" value="0">
  <label class="custom-control-label" for="defaultInline4">No</label>
</div>
</div>
</div>

 <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i> </span>
		</div>
		<!-- Default inline 1-->
		<div class="form-control">
		<label>Online support</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<!-- Default inline 1-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline5" name="inlineDefaultRadiosExample5" value="1">
  <label class="custom-control-label" for="defaultInline5">Yes</label>
</div>

<!-- Default inline 2-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline6" name="inlineDefaultRadiosExample5" value="0">
  <label class="custom-control-label" for="defaultInline6">No</label>
</div>
</div>
</div>


    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="Password" class="form-control" placeholder="Create password" type="password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="ConfirmPassword" class="form-control" placeholder="Repeat password" type="password">
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" id="submitbutton" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="nlplogin.php">Log In</a> </p>   

<input type="hidden" name="serv" id="serv" value="">      
<input type="hidden" name="work" id="work" value="">      
<input type="hidden" name="city" id="city" value="">   
<input type="hidden" name="track" id="track" value="">   
<input type="hidden" name="cold" id="cold" value="">                                                              
<input type="hidden" name="on" id="on" value="">   
</form>
</article>
</div> <!-- card.// -->
</div> 
<!--container end.//-->
<script>
	 $(document).ready(function(){

    $('#submitbutton').click(function() {
    var e=$('#ServiceType').val();
    $('#serv').val(e);
  var working=$('#workingdays').val();
  var c=$('#choices-multiple-remove-button').val();
  $('#work').val(working);
  $('#city').val(c);
  var tracks=$('input[name="inlineDefaultRadiosExample"]:checked').val();
  var colds=$('input[name="inlineDefaultRadiosExample3"]:checked').val();
  var ons=$('input[name="inlineDefaultRadiosExample5"]:checked').val();
  $('#track').val(tracks);
  $('#cold').val(colds);
  $('#on').val(ons);
});

 var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
 removeItemButton: true,
 maxItemCount:10,
 searchResultLimit:10,
 renderChoiceLimit:10
 });


 var workingdays = new Choices('#workingdays', {
 removeItemButton: true,
 maxItemCount:7,
 searchResultLimit:7,
 renderChoiceLimit:7
 });
});

// var selected=[];
//  $('#choices-multiple-remove-button :selected').each(function(){
//      selected[$(this).val()]=$(this).text();
//     });
// var selected1=[];
//  $('#workingdays :selected').each(function(){
//      selected1[$(this).val()]=$(this).text();
//     });
//  });
</script>
</body>
</html>