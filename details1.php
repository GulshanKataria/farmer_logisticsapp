<?php
session_start();
?>


<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">

var $select1 = $( '#select1' ),
    $select2 = $( '#select2' ),
    $options = $select2.find( 'option' );
    
$select1.on( 'change', function() {
  $select2.html( $options.filter( '[value="' + this.value + '"]' ) );
} ).trigger( 'change' );

    </script>
    <title>FIND NLP</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      line-height: 55px;
      font-size: 55px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 30px 0 #a37547; 
      }
      .banner {
      position: relative;
      height: 230px;
    
  background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTQsAMMgrhs21wU471_0pBY-uaPlOTRozSGD2bAC0MGbcpOCyPh');
  
  background-size: auto;

      
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #a37547;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #a37547;
      color: #a37547;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid #a37547;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #a37547;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      .button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #6b4724;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      .button:hover {
      box-shadow: 0 0 18px 0 #3d2914;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
    option {
  margin: 0.5em;
}
      }
    </style>
  
  
  </head>
  <body>
    <div class="testbox">
    <form action="providers_nlp.php" method="POST">
      <?php
        $a=$_SESSION['name1'];
        $b=$_SESSION['city1'];
      ?>
      <div class="banner">
        <h1><strong>FIND NLP</strong></h1>
      </div>
       <div class="item">
        <p><strong>ENTER PICK UP CITY<strong></p>
        <input type="text" name="source" id="pickup" value="<?php echo $b; ?>" />
      </div>
    <div class="item">
        <p><strong>ENTER DELIEVERY CITY</strong></p>
        <input type="text" name="destination"/>
      </div>

        
      <div class="question">
        <p><strong>Tracking</strong></p>
        <div class="question-answer">
          <div>
            <input type="radio" value="yes" id="radio_1" name="tracking"/>
            <label for="radio_1" class="radio"><span>Yes</span></label>
          </div>
          <div>
            <input type="radio" value="no" id="radio_2" name="tracking"/>
            <label for="radio_2" class="radio"><span>No</span></label>
          </div>
        </div>
      </div>
    <div class="item">
        <p><strong>Type of Service</strong></p>
        <select required name="typeofservice" id="select1">
          
          <option value="Half Truck Load(500-300KG)">Half Truck Load(500-300KG)</option>
          <option selected value="Full Truck Load(>3000 KG)">Full Truck Load(>3000 KG)</option>
      <option value="Parcel(<500 kg)">Parcel(<500 kg)</option>
      
        </select>
      </div>
    <div class="item">
        <p><strong>Choose a Truck As Per Your Need</strong></p>
        <select required name="truck" id="select2">
          
          <option value="Parcel(<500 kg)"><div>Eicher 14 Feet</div>         &nbsp   <div>[Capacity:3.5ton]</div></option>
          <option value="Half Truck Load(500-300KG)"><div>Eicher 19 Feet</div>         &nbsp   <div>[Capacity:6.5ton]</div></option>
          <option value="Full Truck Load(>3000 KG)"><div>Eicher 17 Feet</div>         &nbsp   <div>[Capacity:4.5ton]</div></option>
          <option value="Parcel(<500 kg)"><div>Eicher 15 Feet</div>         &nbsp   <div>[Capacity:3.5ton]</div></option>
          <option value="Half Truck Load(500-300KG)"><div>Eicher 21 Feet</div>         &nbsp   <div>[Capacity:7.5ton]</div></option>
          <option value="Full Truck Load(>3000 KG)"><div>16 Ton Closed container</div>         &nbsp   <div>[Capacity:5.5ton]</div></option>
          <option value="Full Truck Load(>3000 KG)"><div>21ton/10Wheel</div>         &nbsp   <div>[Capacity:8.5ton]</div></option>
          <option value="Half Truck Load(500-300KG)"><div>21ton/12Wheel</div>         &nbsp   <div>[Capacity:6.5ton]</div></option>
          
        </select>
      </div>
      
      
    <div class="item">
        <p><strong>Material Name</strong></p>
        <input type="text" name="material"/>
      </div>
    <div class="question">
        <p><strong>Cold Storage</strong></p>
        <div class="question-answer">
          <div>
            <input type="radio" value="yes" id="radio_11" name="question11"/>
            <label for="radio_11" class="radio"><span>Yes</span></label>
          </div>
          <div>
            <input type="radio" value="no" id="radio_22" name="question11"/>
            <label for="radio_22" class="radio"><span>No</span></label>
          </div>
        </div>
      </div>
    
    
    
        <div class="btn-block">
          <input type="submit" name="submit" class="button">
        </div>
    </form>
    </div>

  </body>
   <script type="text/javascript">

var $select1 = $( '#select1' ),
    $select2 = $( '#select2' ),
    $options = $select2.find( 'option' );
    
$select1.on( 'change', function() {
  $select2.html( $options.filter( '[value="' + this.value + '"]' ) );
} ).trigger( 'change' );
 </script>
    
</html>
