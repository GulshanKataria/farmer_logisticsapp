<?php

session_start();
?>
<!DOCTYPE html>
<html>
    
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
        
    <link rel="stylesheet" href="Plugins/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="Plugins/animate/animate.css">
       <link rel="stylesheet" href="/path/to/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
    <link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css"
    rel="stylesheet" type="text/css" />
<script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js"
    type="text/javascript"></script>
    <link href="multiselect.css" rel="stylesheet">
    <script src="multiselect.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
 

<meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: none;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
     }

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn{
    display: inline-block;
    color: #FFF;
    background: var(--primary-color);
    padding: 0.5rem 2rem;
    border-radius: 5px;
    border: none; /*useful with button tag*/
}

.btn:hover{
    cursor: pointer;
    background: #000;
    transition: background .3s;
}

.btn.active {
  background-color: #666;
  color: white;
}
    #navbar{
    display: flex;
    justify-content: space-between;
    background: #333;
    color: #FFF;
    position: sticky;
    top: 0;
    left: 0;
    z-index: 9999;
    padding: 1rem;
}

#navbar ul{
    display: flex;
    list-style: none;
    align-items: center;
}

#navbar ul li a{
    color: #FFF;
    padding: 0.75rem;
    margin: 0 0.25rem;
}

#navbar ul li a:hover{
    background: var(--primary-color);
    border-radius: 5px;
    transition: background .3s;
}
    .checked {
  color: orange;
}
   
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: orange;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: orange;
  color: white;
}
    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
      .button1 {
  background-color: orange/* Green */
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
    .button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
     /* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}

     
</style>
    <script type="text/javascript">
    $(function () {
        $('#lstFruits').multiselect({
            includeSelectAllOption: true
        });
    });
</script>
    <script>
$(document).ready(function(){
 $('#framework').multiselect({
  nonSelectedText: 'Select Framework',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
 
 $('#framework_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#framework option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#framework').multiselect('refresh');
    alert(data);
   }
  });
 });
 
 
});
</script>
</head>
<body>


    <!-- MAIN (Center website) -->
<div class="main">


<nav id="navbar">
<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('nearby_warehouses')"> Nearby Warehouses</button>
  <button class="btn" onclick="filterSelection('facilities')">Facilities</button>  
    
          <button  class="btn" >LOGOUT</button>

         

  
    </div>
    </nav>
<div class="row">    


<?php

                $conn = mysqli_connect('localhost','root');
                mysqli_select_db($conn, 'nlp');
                                $center_lat = 19.21632;
                                $center_lng = 73.1703513;
                $query = sprintf("SELECT *, ( 6371 * acos( cos( radians('%s') ) * cos( radians( lat ) ) * cos( radians( lan ) - radians('%s') ) + sin( radians('%s') ) * sin( radians( lat ) ) ) ) AS distance 
                                 FROM markers ORDER BY distance LIMIT 0 , 20",$center_lat,$center_lng,$center_lat);

                $queryfire = mysqli_query($conn,$query);


        $num = mysqli_num_rows($queryfire);
                if($num>0){
                  while ($product = mysqli_fetch_array($queryfire)) {
                                        $dist = $product['distance'];

  ?>
    
    <!-- Portfolio Gallery Grid -->

  <div class="column nearby_warehouses">
    <div class="content">
<?php        echo '<img src="data:image/jpeg;base64,'.base64_encode($product['img'] ).'" style="width:100%"/>';?>
      <!-- <img src="" alt="hotel1" style="width:100%"> -->
      <br><h3><?php echo $product['name']; ?></h3>
        <h4><i class="fa fa-automobile"><?php printf(" %.2f kms",$dist); ?></i></h4>
    
        <?php
                    for($i=0; $i<$product['max_facilities'];$i++)
                    {
                        ?>
        <span class="fa fa-star checked"></span>
        <?php
                    }
                                        ?>
<?php
                    for($i=0;$i<7-$product['max_facilities'];$i++)
                    {
                        ?>
        <span class="fa fa-star"></span>
        <?php
                    }
                                        ?><br>
        
        <i class="fa fa-user"><?php echo $product['id']; ?></i><br>
        <i class="fa fa-phone"><?php echo $product['contact']; ?></i><br>
        <i class="fa fa-map-marker"><?php echo $product['address']; ?></i><br>
        <i class="fa fa-map-marker"><?php echo $product['city']; ?></i>
        <?php
        $a=$product['name'];
        $b=$product['city'];
        $_SESSION['name1']=$a;
        $_SESSION['city1']=$b;
        ?>
         <form action="details1.php">
          <br><br><center><button class="button button" >Book Now</button></center>  

         <input type="hidden" name="longitude" value="" id="longitude">
         <input type="hidden" name="latitude" value="" id="latitude">
         
      </form>
        
        
        
      



        <!--<span><i class="fa fa-phone-volume"></i></span>-->
      
    </div>
  </div>

    
    <?php
                  }
                }
              ?>
    

<?php
                $conn = mysqli_connect('localhost','root');
                mysqli_select_db($conn, 'nlp');
                   $center_lat =  filter_input(INPUT_POST, 'latitude');
                $center_lng = filter_input(INPUT_POST, 'longitude');
             
                $query = sprintf("SELECT *, ( 6371 * acos( cos( radians('%s') ) * cos( radians( lat ) ) * cos( radians( lan ) - radians('%s') ) + sin( radians('%s') ) * sin( radians( lat ) ) ) ) AS distance 
                                 FROM markers ORDER BY max_facilities desc LIMIT 0 , 20",$center_lat,$center_lng,$center_lat);

                $queryfire = mysqli_query($conn,$query);

        $num = mysqli_num_rows($queryfire);
                if($num>0){
                  while ($product = mysqli_fetch_array($queryfire)) {
                                        $dist = $product['distance'];

  ?>
    
    <!-- Portfolio Gallery Grid -->

  <div class="column facilities">
    <div class="content">
<?php        echo '<img src="data:image/jpeg;base64,'.base64_encode($product['img'] ).'" style="width:100%"/>';?>
      <!-- <img src="" alt="hotel1" style="width:100%"> -->
      <br><h3><?php echo $product['name']; ?></h3>
        <h4><i class="fa fa-automobile"><?php printf(" %.2f kms",$dist); ?></i></h4>
    
        <?php
                    for($i=0; $i<$product['max_facilities'];$i++)
                    {
                        ?>
        <span class="fa fa-star checked"></span>
        <?php
                    }
                                        ?>
<?php
                    for($i=0;$i<7-$product['max_facilities'];$i++)
                    {
                        ?>
        <span class="fa fa-star"></span>
        <?php
                    }
                                        ?>
        <br>
        
        <i class="fa fa-user"><?php echo $product['id']; ?></i><br>
        <i class="fa fa-phone"><?php echo $product['contact']; ?></i><br>
        <i class="fa fa-map-marker"><?php echo $product['address']; ?></i><br><br>
        
        
        <?php
        if($product['Pest Control Services'] == 1)
        {
            ?>
        <p><i class="fa fa-check-circle" style="color:green"></i>Pest Control Services</p>
        <?php
        }
        if($product['Fire Prevention System'] == 1)
        {
            ?>
        <p><i class="fa fa-check-circle" style="color:green"></i>Fire Prevention System</p>
        <?php
        }
         if($product['24-Hour Guard'] == 1)
        {
             ?>
        <p><i class="fa fa-check-circle" style="color:green"></i>24-Hour Guard</p>
        <?php
        }
        if($product['Loading/Unloading Area'] == 1)
        {
            ?>
            <p><i class="fa fa-check-circle" style="color:green"></i>Loading/Unloading Area</p>
        <?php
        }
        if($product['CCTV Cameras'] == 1)
        {
            ?>
            <p><i class="fa fa-check-circle" style="color:green"></i>CCTV Cameras</p>
        <?php
        }
        if($product['Access Control Systems'] == 1)
        {
            ?>
            <p><i class="fa fa-check-circle" style="color:green"></i>Access Control Systems</p>
        <?php
        }
        ?>
           



        <!--<span><i class="fa fa-phone-volume"></i></span>-->
      
    </div>
  </div>

    
    <?php
                  }
                }
              ?>
    

    </div>
    
<!-- END MAIN -->
</div>
    

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

    window.addEventListener('load', function () {
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);

    } else { 
    alert("Geolocation is not supported by this browser.");
  }
}, false);



function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    alert("Geolocation is not supported by this browser.");
  }
}


    function showPosition(position) {
  var latitude = position.coords.latitude;
      var longitude = position.coords.longitude;
        document.getElementById("latitude").value = latitude;
  document.getElementById("longitude").value = longitude;

}
    </script>
  <!--  <script>
function getDistanceFromLatLonInKm(lat1,lon1,lat2,lon2) {
  var R = 6371; // Radius of the earth in km
  var dLat = deg2rad(lat2-lat1);  // deg2rad below
  var dLon = deg2rad(lon2-lon1); 
  var a = 
    Math.sin(dLat/2) * Math.sin(dLat/2) +
    Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * 
    Math.sin(dLon/2) * Math.sin(dLon/2)
    ; 
  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
  var d = R * c; // Distance in km
  return d;
}

function deg2rad(deg) {
  return deg * (Math.PI/180)
}
</script>-->
    
</body>
</html>