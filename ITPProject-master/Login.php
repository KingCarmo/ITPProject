<?php
/* Login.php */
    session_start();
    $_SESSION['message'] = '';
    $mysqli = new mysqli("mysql2.gear.host", "logintestpeter", "peter!");
    ?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cocktail Dreams</title>
    <link type="text/css" rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  </head>
  <body>
    <div id="container">
      <div class="header" style="position:absolute;z-index:0;left:0;top:0;width:100%;height:100%">
      <div class="nav">
        <div class="designed">
          <p>
            designed by french toast mafia.
          </p>
        <nav class="navbar">
          <a href="index.html">HOME</a> |
          <a href="cocktails.html">COCKTAILS</a> |
          <a href="aboutus.html">About Us</a> |
          <a href="Login.php">Login</a>          
        </nav>
        <link rel="stylesheet" href="LoginStyle.css" type="text/css">
        <div class="body-content">
          <div class="module">
            <h1>Create an account</h1>
            <form class="form" action="Process.php" method="post" enctype="multipart/form-data" autocomplete="off">
              <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
              <input type="text" placeholder="User Name" name="username" required />
              <input type="email" placeholder="Email" name="email" required />
              <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
              <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
              <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>
              <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
            </form>
          </div>
        </div>
  </div>
</div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
