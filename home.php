<!DOCTYPE html>
<html>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.2/js/materialize.min.js"></script>

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="A site for planning the food storage">
        <meta name="keywords" content="Storage Planner">
        <meta name="author" content="Vanshika">
        <link rel="stylesheet" href="Plugins/font-awesome-4.7.0/css/font-awesome.css">
     
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="Plugins/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="Plugins/animate/animate.css">
        <title>Storage Planner</title>
        <link rel="stylesheet" href="Plugins/materialize/css/materialize.css">
    
        <!--Plugins-->
        <link rel="stylesheet" href="Plugins/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="Plugins/animate/animate.css">
        <!--/Plugins-->
        
        <link rel="stylesheet" href="css/styless.css">
<!--
        <link rel="stylesheet" href="css/styles.css">
-->
 <style>
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
  background-color: black; /* Green */
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
     li {
  float: right;
}
     ul {
  float: right;
}
        </style>
    </head>
    <body id="home">
        <!--NAVBAR-->

        <!--/NAVBAR-->
        <!--HEADER SHOWCASE-->
        <header id="showcase" style="background: #333 url('images/wc2.jpeg') no-repeat center center/cover;">
            <div class="showcase-content" style="back">
                <h1 class="l-heading wow fadeInDown"><span class="text-primary">Storage</span>Planner</h1>
                <p class="lead wow fadeInDown"><i>"The smart way of food storage and waste reduction"</i></p>
<!--                <a href="#lighting" class="btn">Read More</a>-->

            </div>
            
        </header>
        <!--/HEADER SHOWCASE-->
        <!--SECTION: lighting we do-->
        <section id="storages" class="py-1 bg-light top">
            <div class="container wow slideInLeft">
                <h1 class="m-heading text-center top" style="font-family: cursive;font-size: 60px;background-color: burlywood"><i>STORAGES</i></h1>
            </div>
        </section>
        <section id="warehouses" class="py-1 bg-light top">
            <div class="container wow slideInLeft">
                
                <h2 class="m-heading text-center top" style="font-family: cursive">Warehouses</h2>
                <h3 class="s-head"></h3>
                <div class="image"><img src="images/warehouse.jpeg" class="image" alt="" width="auto" height="500px">
                </div>
                <div class="content"><br><br><p>A warehouse is a building for storing goods.Warehouses are used by manufacturers, importers, exporters, wholesalers, transport businesses, customs, etc. They are usually large plain buildings in industrial parks on the outskirts of cities, towns or villages.

They usually have loading docks to load and unload goods from trucks. Sometimes warehouses are designed for the loading and unloading of goods directly from railways, airports, or seaports. They often have cranes and forklifts for moving goods, which are usually placed on ISO standard pallets loaded into pallet racks. Stored goods can include any raw materials, packing materials, spare parts, components, or finished goods associated with agriculture, manufacturing, and production. In India and Hong Kong, a warehouse may be referred to as a godown.</p>
          
         <br><br><center>  <a href="warehouses.php" method="" class="btn">Find Nearby Warehouses</a></center>
                </div>
            </div>
        </section>
        <!--/SECTION: lighting we do-->
        <!--SECTION: lighting we do-->
        <section id="cold_storages" class="py-1 bg-light top bg-dark p-2">
            <div class="container wow slideInRight">
                <h2 class="m-heading text-center top" style="font-family: cursive">Cold storages</h2>
                <h3 class="s-head"></h3>
                <div class="image"><img src="images/cold.jpeg" class="image" alt="" width="400px" height="500px">
                </div>
                <div class="content"><br><br><p>Cold storage preserves agricultural products. Refrigerated storage helps in eliminating sprouting, rotting and insect damage. Edible products are generally not stored for more than one year. Several perishable products require a storage temperature as low as −25 °C.

Cold storage helps stabilize market prices and evenly distribute goods both on demand and timely basis. The farmers get the opportunity of producing cash crops to get remunerative prices. The consumers get the supply of perishable commodities with lower fluctuation of prices.
                    
                    Location is important for the success of a cold storage facility. It should be in close proximity to a growing area as well as
                    a market,[citation needed] be easily accessible for heavy vehicles, and have an uninterrupted power supply.</p>
          
          <br><br><center> <a href="cold_storages.php" class="btn">Find Nearby Cold-Storages</a></center>
           </div>
           
            </div>
        </section>
        <!--/SECTION: lighting we do-->
          <!--SECTION: lighting we do-->
        <!--<section id="security" class="py-1 bg-light top p-2">
            <div class="container wow slideInLeft ">
                <h2 class="m-heading text-center top" style="font-family: cursive">Singapore</h2>
                <h3 class="s-head "></h3>
                <div class="image"><img src="images/singapore.jpeg" class="image" alt="" width="auto" height="500px">
                </div>
                <div class="content"><p>Singapore has been described as a playground for the rich, and it's true that the small city-state does have a certain sheen of wealth. But Singapore offers more than just high-end shopping malls, luxury hotels, and fine dining (though it's worth indulging in those a bit if you can). There is also a vibrant history and diverse ethnic quarters to discover, along with many family-friendly attractions and lovely public spaces that make visiting this slightly futuristic city worthwhile.

Singapore has an excellent public transportation system that makes getting around convenient and easy. Once you've gotten a sense of the metro map, you'll have no problem zipping from one part of town to the next. English is spoken everywhere, and signs are in English as well. In fact, Singapore is one of the easiest and most comfortable countries to navigate in Southeast Asia. And as long as you're not comparing prices to nearby Thailand or Vietnam, you're in for a lovely stay.</p>

<a href="hotels_&_cabs.html" class="btn">Take a Tour</a> </div>
                    
            </div>
        </section>-->
        <!--/SECTION: lighting we do-->
        
        
        
        
        <!--SECTION: FOOTER-->
        <footer id="main-footer" class="bg-dark text-center py-1">
            <div class="container wow slideInUp">
                <p>Copyright &copy; 2019 <span class="text-primary">TechNovation</span>, All Rights Reserved.</p>
            </div>
        </footer>
        <!--/SECTION: FOOTER-->
        
        <script src="vendors/wow.js"></script>
        <script>
            new WOW().init();
        </script>
    </body>
</html>