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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="style.css" media="screen" title="no title">
    <link type="text/css" rel="stylesheet" href="modal.css" media="screen" title="no title">
    <link rel="javascript" href="script.js">
    <link rel="shortcut icon" type="image/png" href="Pictures/icon.png"/>
  </head>
  <body>

    <!-- PHP, Connecting Database -->
    <?php
$servername = "mysql4.gear.host";
$username = "cock";
$password = "cocktails123!";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
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
    <div class="container">
      <!-- Trigger the modal with a button -->
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Gimlet</button>
      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Gimlet</h4>
            </div>
            <div class="modal-body">
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
                  Add 1.5 oz of the best Gin you can afford, 0.5 oz of fresh Lime Juice,
                  and 0.5 oz Simple Syrup (made by boiling sugar and water) into pre-filled-
                  with-ice Cocktail shaker. Shake like your life depends on it. Pour into a pre-
                  chilled Cocktail glass. Garnish with a fresh lime and last but most imprtantly<br>
                  <b>ENJOY!</b>
                <h2> Premium Members Instruction Video </h2>
                <iframe src="https://www.youtube.com/watch?v=8vR1N8Cu-ew&feature=youtu.be"
                 width="420" height="450" frameborder="0" allowfullscreen></iframe>
            </center>
          </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>

    </div>
    <br>
  <img src="Pictures/gimlet.jpg" alt="Gimlet" style="height: 200px; width:200px;">
    <br>
    <br>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#cosmo">Cosmopolitan</button>
  <!-- Modal -->
  <div class="modal fade" id="cosmo" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Gimlet</h4>
        </div>
        <div class="modal-body">
          <div class="Paragraph">
            <center>
              <h2>Cosmopolitan</h2>
            <p><b>Ingredients:</b><br>
              1.5 oz Vodka Citron<br>
              0.5 oz Cointreau<br>
              1 oz Cranberry juice<br>
              0.5 oz Fresh Lime Juice<br>
              Fresh Lime<br>
            </p>
            <p><b>Instructions:</b><br>
              Pour your Cointreau and cranberry juice into you gleaming cocktail shaker. Then
              add the lime juice and cranberry juice before topping it off with your finest cheap
              vodka citron. Add your ice and do the shaking thing. We all know thats the most fun part
              Pour your freshly made cocktail into a chilled glass, garnish with a lime and then all you do is<br>
              <b>ENJOY!</b><br>
              <img src="Pictures/Cocktails/Cosmo.jpg" alt="Cosmo" style="height: 100px; width:100px;">
        </center>
      </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <br>
  <br>

      <img src="Pictures/Cocktails/Cosmo.jpg" alt="Cosmo" style="height: 200px; width:200px;">
      <br>
      <br>

      <!-- Trigger the modal with a button -->
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#daq">Hemingway Daiquiri</button>
      <!-- Modal -->
      <div class="modal fade" id="daq" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Hemingway Daiquiri</h4>
          </div>
          <div class="modal-body">
            <div class="Paragraph">
              <center>
                <h2>Hemingway Daiquiri</h2>
              <p><b>Ingredients:</b><br>
                2 oz White Rum<br>
                0.5 oz Grapefruit Juice<br>
                0.5 oz Maraschino liqueur<br>
                Fresh Lime<br>
              </p>
              <p><b>Instructions:</b><br>
                I'm sure you're starting to get the drill by now. Add your lush grapefruit juice on top
                of your probably barely-affordable Maraschino liqueur. Your white rum goes in next, like
                the boss it is. You put your frozen water (A.K.A 'ice') into your shaker and then user your
                shaker as a maraca and go nuts. Then do the easiest bit of all, and also the best -<br>
                <b>ENJOY!</b><br>
                <img src="Pictures/Cocktails/Daq.jpg" alt="Daiquiri" style="height: 100px; width:100px;">
          </center>
        </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
      </div>
      <br>
      <br>
      <img src="Pictures/Cocktails/Daq.jpg" alt="Daiquiri" style="height: 200px; width:200px;">
      <br>
      <br>

    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#cosmo">Cosmopolitan</button>
    <!-- Modal -->
    <div class="modal fade" id="cosmo" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Gimlet</h4>
          </div>
          <div class="modal-body">
            <div class="Paragraph">
              <center>
                <h2>Cosmopolitan</h2>
              <p><b>Ingredients:</b><br>
                1.5 oz Vodka Citron<br>
                0.5 oz Cointreau<br>
                1 oz Cranberry juice<br>
                0.5 oz Fresh Lime Juice<br>
                Fresh Lime<br>
              </p>
              <p><b>Instructions:</b><br>
                Pour your Cointreau and cranberry juice into you gleaming cocktail shaker. Then
                add the lime juice and cranberry juice before topping it off with your finest cheap
                vodka citron. Add your ice and do the shaking thing. We all know thats the most fun part
                Pour your freshly made cocktail into a chilled glass, garnish with a lime and then all you do is<br>
                <b>ENJOY!</b><br>
                <img src="Pictures/Cocktails/Cosmo.jpg" alt="Cosmo" style="height: 100px; width:100px;">
          </center>
        </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
    <br>
    <br>

        <img src="Pictures/Cocktails/Cosmo.jpg" alt="Cosmo" style="height: 200px; width:200px;">
        <br>
        <br>

        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#negroni">Negroni</button>
        <!-- Modal -->
        <div class="modal fade" id="negroni" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Negroni</h4>
            </div>
            <div class="modal-body">
              <div class="Paragraph">
                <center>
                  <h2>Negroni</h2>
                <p><b>Ingredients:</b><br>
                  1 oz Gin<br>
                  1 oz Sweet Red Vermouth<br>
                  1 oz Campari<br>
                  Fresh Orange<br>
                </p>
                <p><b>Instructions:</b><br>
                  This one's is an easy one, but take nothing away from it, its tasty. You know the drill
                  Pour your one ounce of gin, your one ounce of Sweet Red and your one ounce campari all into your sweet
                  cocktail shaker. Shake shake shake. Put in the glass. Garnish. Then last but not by no means least-<br>
                  <b>ENJOY!</b><br>
                  <img src="Pictures/Cocktails/Negroni.jpg" alt="Negroni" style="height: 100px; width:100px;">
            </center>
          </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
        </div>
        <br>
        <br>
      <img src="Pictures/Cocktails/Negroni.jpg" alt="Negroni" style="height: 200px; width:200px;">
      <br>
      <br>

      <!-- Trigger the modal with a button -->
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#side">Sidecar</button>
      <!-- Modal -->
      <div class="modal fade" id="side" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Sidecar</h4>
          </div>
          <div class="modal-body">
            <div class="Paragraph">
              <center>
                <h2>Sidecar</h2>
              <p><b>Ingredients:</b><br>
                2 oz Cognac<br>
                0.75 oz Lemon Juice<br>
                0.75 oz triple sec<br>
              </p>
              <p><b>Instructions:</b><br>
                You will NEVER believe what you have to do for this one. Its a game changer. So, what you do is
                put your Cognac in a cocktail shaker (WOW!). Put your lemon juice into the cocktail shaker (NO WAY!).
                Add your triple sec into the very same cocktail shaker (I DONT BELIEVE IT!). Then guess what you do, you
                shake it. Shake again. Do it once more just to be safe. Then strain into a cocktail glass and as always -<br>
                <b>ENJOY!</b><br>
                <img src="Pictures/Cocktails/Negroni.jpg" alt="Negroni" style="height: 100px; width:100px;">
          </center>
        </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
      </div>
      <br>
      <br>
      <img src="Pictures/Cocktails/Sidecar.jpg" alt="Sidecar" style="height: 200px; width:200px;">
</p>
</div>


<div id="Intermediate" class="tabcontent">
  <div class="ParagraphCocktails"/>
  <p><h2><u>Intermediate</u></h2>
    <br>
    <br>

    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#blue">Blue Coconut</button>
    <!-- Modal -->
    <div class="modal fade" id="blue" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Blue Coconut</h4>
        </div>
        <div class="modal-body">
          <div class="Paragraph">
            <center>
              <h2>Blue Coconut</h2>
            <p><b>Ingredients:</b><br>
              1 oz Blue Curacao<br>
              1 oz Malibu Rum<br>
              1 oz Passion fruit Rum<br>
              3 oz Coconut Water<br>
              1 oz Sprite<br>
              Simple Syrup<br>
              Granulated Sugar<br>
            </p>
            <p><b>Instructions:</b><br>
              You will need two plates to complete this cocktail. Pour sugar and syrup on to two sepreate plates. Take
              your glassware and dip the rims into first the syrup and then the sugar and then set your glass two one side.
              Now do your usual and add all your ingredients into a cocktail shaker with ice. Then do your now well-practiced
              shaking technique and shake the life out of your shaker. Then, as per usual, -<br>
              <b>ENJOY!</b><br>
              <img src="Pictures/Cocktails/Blue.jpg" alt="Negroni" style="height: 100px; width:100px;">
        </center>
      </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
    </div>
    <br>
    <br>
    <img src="Pictures/Cocktails/Blue.jpg" alt="Blue Coconut" style="height: 200px; width:200px;">
    <br>
    <br>

    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#cake">Cake By The Ocean</button>
    <!-- Modal -->
    <div class="modal fade" id="cake" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cake by the Ocean</h4>
        </div>
        <div class="modal-body">
          <div class="Paragraph">
            <center>
              <h2>Cake by the Ocean</h2>
            <p><b>Ingredients:</b><br>
              2 oz Cake favoured Vodka<br>
              2 oz Coconut rum<br>
              2 oz Pineapple juice<br>
              2 oz Orange Juice<br>
              Club Soda<br>
              *optional*: Simple Syrup, Maraschino cherries, sprinkles, pineaplle and orange slices<br>
            </p>
            <p><b>Instructions:</b><br>
              The usual, add your Vodka, rum and two juices into a cocktail shaker with ice.
              If you want to dilute the cocktail a little bit, go ahead and add your club soda. To garnish,
              use a cherry and/or wedges of pineapple and orange. To make a f
              Pour your freshly made cocktail into a chilled glass, garnish with a lime and then all you do is<br>
              <b>ENJOY!</b><br>
              <img src="Pictures/Cocktails/Cake.png" alt="Cake" style="height: 100px; width:100px;">
        </center>
      </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
    </div>
    <br>
    <br>

    <img src="Pictures/Cocktails/cake.png" alt="Daiquiri" style="height: 200px; width:200px;">
    <br>
    <br>

    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#rain">Rainbow Sangria</button>
    <!-- Modal -->
    <div class="modal fade" id="rain" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Rainbow Sangria</h4>
        </div>
        <div class="modal-body">
          <div class="Paragraph">
            <center>
              <h2>Rainbow Sangria</h2>
            <p><b>Ingredients:</b><br>
              1 refrigerated bottle dry white wine<br>
              1.5 oz Granulated Sugar/Honey<br>
              2 oz Pineapple juice<br>
              2 oz Orange Juice<br>
              Club Soda<br>
              *optional*: Simple Syrup, Maraschino cherries, sprinkles, pineaplle and orange slices<br>
            </p>
            <p><b>Instructions:</b><br>
              The usual, add your Vodka, rum and two juices into a cocktail shaker with ice.
              If you want to dilute the cocktail a little bit, go ahead and add your club soda. To garnish,
              use a cherry and/or wedges of pineapple and orange. To make a f
              Pour your freshly made cocktail into a chilled glass, garnish with a lime and then all you do is<br>
              <b>ENJOY!</b><br>
              <img src="Pictures/Cocktails/Cake.png" alt="Cake" style="height: 100px; width:100px;">
        </center>
      </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
    </div>
    <br>
    <br>
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



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
