<!DOCTYPE html>
<html>
  <head>
    <script>
    function openTab(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click()
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cocktail Dreams</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="style.css" media="screen" title="no title">
    <link type="text/css" rel="stylesheet" href="modal.css" media="screen" title="no title">
    <link rel="javascript" href="script.js">
    <link rel="shortcut icon" type="image/png" href="Pictures/icon.png"/>
  </head>
  <body>
    <!-- PHP, Connecting Database -->
    <?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

  <div id="container">
    <div class="header1" >
    <div class="nav">
      <div class="designed">
        <p>
          designed by french toast mafia.
        </p>
      <nav class="navbar">
        <a href="index.html">HOME</a> |
        <a href="cocktails.html">COCKTAILS</a> |
        <a href="aboutus.html">About Us</a> |
      </nav>
        <center><img src="Pictures/Logo.png" alt="logo" style="width:1080px;height:500px;"></center>


      </div>
    </div>
  </div>


    <center>
    <div class="tab">
  <button class="tablinks" onclick="openTab(event, 'Beginner')">Beginner</button>
  <button class="tablinks" onclick="openTab(event, 'Intermediate')">Intermediate</button>
  <button class="tablinks" onclick="openTab(event, 'Expert')">Expert</button>
  <button class="tablinks" onclick="openTab(event, 'Summer')">Summer</button>
  <button class="tablinks" onclick="openTab(event, 'Premium')">Premium</button>
</div>

<div id="Beginner" class="tabcontent">
  <center><h2><u>Beginner</u></h2></center>
  <p>
    <!-- Trigger/Open The Modal -->
    <button id="myBtn">Gimlet</button>

    <!-- The Modal -->
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <div class="Paragraph">
          <center>

            <h2>Gimlet</h2>
          <p><b>Ingredients:</b><br>
            1.5 oz Gin<br>
            0.5 oz Lime juice<br>
            0.5 oz Simple syrup<br>
            Fresh Lime<br>
          </p>
          <p><b>Instructions:</b><br>
            Add 1.5 oz of the best Gin you can afford, 0.5 oz of fresh Lime Juice,<br>
            and 0.5 oz Simple Syrup (made by boiling sugar and water) into pre-filled-<br>
            with-ice Cocktail shaker. Shake like your life depends on it. Pour into a pre-<br>
            chilled Cocktail glass. Garnish with a fresh lime and last but most imprtantly<br>
            <b>ENJOY!</b>
          <h2> Premium Members Instruction Video </h2>
          <video width="700" height="450" controls>
          <source src="Pictures/Cocktails.mp4" type="video/mp4">
        </video>
      </center>
    </div>
      </div>
    </div>

  <img src="Pictures/gimlet.jpg" alt="Gimlet" style="height: 200px; width:200px;">

      <h3>Cosmopolitan</h3>
      <img src="Pictures/Cocktails/Cosmo.jpg" alt="Cosmo" style="height: 200px; width:200px;">
      <h3>Hemingway Daiquiri</h3>
      <img src="Pictures/Cocktails/Daq.jpg" alt="Daiquiri" style="height: 200px; width:200px;">
      <h3>Negroni</h3>
      <img src="Pictures/Cocktails/Negroni.jpg" alt="Negroni" style="height: 200px; width:200px;">
      <h3>Sidecar</h3>
      <img src="Pictures/Cocktails/Sidecar.jpg" alt="Sidecar" style="height: 200px; width:200px;">
</p>
</div>


<div id="Intermediate" class="tabcontent">
  <div class="ParagraphCocktails"/>
  <p><h2><u>Intermediate</u></h2>
    <h3>Blue Coconut</h3>
    <img src="Pictures/Cocktails/Blue.jpg" alt="Blue Coconut" style="height: 200px; width:200px;">
    <h3>Cake by the Ocean</h3>
    <img src="Pictures/Cocktails/Daq.jpg" alt="Daiquiri" style="height: 200px; width:200px;">
    <h3>Rainbow Sangria</h3>
    <img src="Pictures/Cocktails/Rainbow.jpg" alt="Rainbow Sangria" style="height: 200px; width:200px;">
    <h3>Malibu Sunset</h3>
    <img src="Pictures/Cocktails/Malibu.jpg" alt="malibu" style="height: 200px; width:200px;">
</p>
</div>
</div>

<div id="Expert" class="tabcontent">
  <div class="ParagraphCocktails"/>
  <p><h2><u>Expert</u></h2>
    <h3>Mai Tai</h3>
    <img src="Pictures/Cocktails/Mai.jpg" alt="Mai Tai" style="height: 200px; width:200px;">
    <h3>Old-Fashioned</h3>
    <img src="Pictures/Cocktails/Old.jpg" alt="Old Fashioned" style="height: 200px; width:200px;">
    <h3>Alien Sky</h3>
    <img src="Pictures/Cocktails/Alien.jpg" alt="Alien Sky" style="height: 200px; width:200px;">
    <h3>Chocolate Mintini</h3>
    <img src="Pictures/Cocktails/Choco.jpg" alt="Chocolate Mintini" style="height: 200px; width:200px;">
</p>
</div>
</div>

<div id="Summer" class="tabcontent">
  <div class="ParagraphCocktails"/>
  <p><h2><u>Summer</u></h2>
    <h3>Piña Colada</h3>
    <img src="Pictures/Cocktails/Pina.jpg" alt="Piña Colada" style="height: 200px; width:200px;">
    <h3>Cuba Libre</h3>
    <img src="Pictures/Cocktails/cuba.jpg" alt="Cuba Libre" style="height: 200px; width:200px;">
    <h3>Hurricane</h3>
    <img src="Pictures/Cocktails/Hurricane.jpg" alt="Hurricane" style="height: 200px; width:200px;">
    <h3>Blackberry Mojito</h3>
    <img src="Pictures/Cocktails/black.jpg" alt="Blackberry Mojito" style="height: 200px; width:200px;">
</p>
</div>
</div>
<div id="Premium" class="tabcontent">
  <div class="ParagraphCocktails"/>
  <p><h2><u>Premium Content</u></h2>
    <img src="Pictures/lock.jpg" alt="Lock" style="height: 300px; width:300px;">
    <h2>Sorry!</h2>
    <h3>This is content is for our Premium Members only!</h3>

</p>
</div>
</div>
</div>
</div>
</center>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
    modal.style.display = "none";
}
}
</script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
