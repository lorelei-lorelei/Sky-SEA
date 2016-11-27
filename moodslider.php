<?php

include 'moodchoice_functions.php';
?>

<!DOCTYPE HTML>
 <meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="css/style.css">

 <head>
  <title>Moodslider - Sky Cinema</title>
</head>
<body>
  <div class="header">
    <img src="images/sky_cinema_logo.png" />
    <h1>Moodslider - Sky Cinema</h1>
  </div>

<ul class="navbar" id="moodslidenave">
  <li><a href="moodslider.php">Moodslider</a></li>
  <li><a href="upload.php">Upload</a></li>
</ul>

  <br>
  <form action="" method="get">
  <div class="slider">
    <span id="range">Agitated</span>
      <input name="ag_calm" type="range" min="0" max="50" value="0" step="5" />
    <span id="range">Calm</span>

  <br>

    <span id="range">Happy</span>
     <input name="happy_sad" type="range" min="0" max="50" value="0"step="5" />
    <span id="range">Sad</span>

  <br>

  <span id="range">Tired</span>
    <input name="tired_awake" type="range" min="0" max="50" value="0"step="5" />
  <span id="range">Wide Awake</span>

  <br>

  <span id="range">Scared</span>
    <input name="scared_brave" type="range" min="0" max="50" value="0"step="5"/>
  <span id="range">Fearless</span>

    <button type="submit">Submit</button>
  </form>
 </div>

 <ul class="films" >
    <li><img id="7" class="films" src="images/about-mary.jpg" width="100" height="120" padding=10px/><br>
      <label> No content </label></li>
    <li><img id="2" src="images/the-departed.jpg" width="100" height="120"/><br>
      <label> No content </label></li>
    <li><img id="9" src="images/team-america.jpg" width="100" height="120"/><br>
      <label> No content </label></li>
    <li><img id="5" src="images/notting-hill.jpg" width="100" height="120"/><br>
      <label> No content </label></li>
    <li><img id="12" src="images/amelie.jpg" width="100" height="120"/><br>
      <label> No content </label></li>
</ul>


</body>
