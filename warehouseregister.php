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
	<h4 class="card-title mt-3 text-center">Warehouse Registeration</h4>
	<p class="text-center">Get your customers set in soon!</p>
	<form method="post" action="wareregister.php">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="FullName" class="form-control" placeholder="Warehouse Name" type="text">
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
		    <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i> </span>
		</div>
		<input class="form-control" placeholder="Latitude" disabled="" type="text" style="max-width: 70px;">
    	<input class="form-control" type="text" value="00:00" id="Latitude" name="Latitude">
		<input class="form-control" placeholder="Longitude" disabled type="text" style="max-width: 60px;">
    	<input class="form-control" type="text" value="00:00" id="Longitude" name="Longitude">
    </div>


  <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i> </span>
    </div>
    <!-- Default inline 1-->
    <div class="form-control">
    <label>Pest Control</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <!-- Default inline 1-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline1" name="PestControl" value="1">
  <label class="custom-control-label" for="defaultInline1">Yes</label>
</div>

<!-- Default inline 2-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline2" name="PestControl" value="0">
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
    <label>Fire Prevention System</label>
<span></span><span></span><span></span>
  <!-- Default inline 1-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline3" name="FireSystem" value="1">
  <label class="custom-control-label" for="defaultInline3">Yes</label>
</div>

<!-- Default inline 2-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline4" name="FireSystem" value="0">
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
    <label>24-Hour Guard</label>
<span></span><span></span><span></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <!-- Default inline 1-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline5" name="Guard" value="1">
  <label class="custom-control-label" for="defaultInline5">Yes</label>
</div>

<!-- Default inline 2-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline6" name="Guard" value="0">
  <label class="custom-control-label" for="defaultInline6">No</label>
</div>
</div>
</div>


  <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i> </span>
    </div>
    <!-- Default inline 1-->
    <div class="form-control">
    <label>Loading Area</label>
<span></span><span></span><span></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <!-- Default inline 1-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline7" name="Loading" value="1">
  <label class="custom-control-label" for="defaultInline7">Yes</label>
</div>

<!-- Default inline 2-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline8" name="Loading" value="0">
  <label class="custom-control-label" for="defaultInline8">No</label>
</div>
</div>
</div>


  <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i> </span>
    </div>
    <!-- Default inline 1-->
    <div class="form-control">
    <label>CCTV Cameras</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span></span><span></span><span></span>
  <!-- Default inline 1-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline9" name="Cctv" value="1">
  <label class="custom-control-label" for="defaultInline9">Yes</label>
</div>

<!-- Default inline 2-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline10" name="Cctv" value="0">
  <label class="custom-control-label" for="defaultInline10">No</label>
</div>
</div>
</div>


 <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i> </span>
    </div>
    <!-- Default inline 1-->
    <div class="form-control">
    <label>Access Control </label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span></span><span></span><span></span>
  <!-- Default inline 1-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline11" name="Access" value="1">
  <label class="custom-control-label" for="defaultInline11">Yes</label>
</div>

<!-- Default inline 2-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline12" name="Access" value="0">
  <label class="custom-control-label" for="defaultInline12">No</label>
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
    <p class="text-center">Have an account? <a href="warehouselogin.html">Log In</a> </p>   
 
</form>
</article>
</div> <!-- card.// -->
</div> 
<!--container end.//-->

</body>
</html>