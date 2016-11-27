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

<ul class="films">
  <?php if(isset($_GET['ag_calm']) && ($_GET['ag_calm']<25)){
    $suggestedfilms = film_suggest("Agitated", 'ag_calm');
    foreach ($suggestedfilms as $showfilm){?><li><img src=<?php echo $showfilm->image; ?> width="100" height="120" padding=15px/><br>
  <label><?php echo $showfilm->title; ?></label></li><?php } }
    elseif(isset($_GET['ag_calm'])){
    $suggestedfilms = film_suggest("Calm", 'ag_calm');
     foreach ($suggestedfilms as $showfilm){?><li><img src=<?php echo $showfilm->image; ?> width="100" height="120" padding=15px/><br>
   <label><?php echo $showfilm->title; ?></label></li><?php } } ?>
   <?php if(isset($_GET['happy_sad']) && ($_GET['happy_sad']<25)){
     $suggestedfilms = film_suggest("Happy", 'happy_sad');
     foreach ($suggestedfilms as $showfilm){?><li><img src=<?php echo $showfilm->image; ?> width="100" height="120" padding=15px/><br>
   <label><?php echo $showfilm->title; ?></label></li><?php } }
    elseif(isset($_GET['happy_sad'])){
     $suggestedfilms = film_suggest("Sad", 'happy_sad');
     foreach ($suggestedfilms as $showfilm){?><li><img src=<?php echo $showfilm->image; ?> width="100" height="120" padding=15px/><br>
   <label><?php echo $showfilm->title; ?></label></li><?php } } ?>
   <?php if(isset($_GET['tired_awake']) && ($_GET['tired_awake']<25)){
     $suggestedfilms = film_suggest("Tired", 'tired_awake');
     foreach ($suggestedfilms as $showfilm){?><li><img src=<?php echo $showfilm->image; ?> width="100" height="120" padding=15px/><br>
   <label><?php echo $showfilm->title; ?></label></li><?php } }
    elseif(isset($_GET['tired_awake'])){
     $suggestedfilms = film_suggest("Awake", 'tired_awake');
     foreach ($suggestedfilms as $showfilm){?><li><img src=<?php echo $showfilm->image; ?> width="100" height="120" padding=10px/><br>
   <label><?php echo $showfilm->title; ?></label></li><?php } } ?>
   <?php if(isset($_GET['scared_brave']) && ($_GET['scared_brave']<25)){
     $suggestedfilms = film_suggest("Scared", 'scared_brave');
     foreach ($suggestedfilms as $showfilm){?><li><img src=<?php echo $showfilm->image; ?> width="100" height="120" padding=10px/><br>
   <label><?php echo $showfilm->title; ?></label></li><?php } }
    elseif(isset($_GET['scared_brave'])){
     $suggestedfilms = film_suggest("Fearless", 'scared_brave');
     foreach ($suggestedfilms as $showfilm){?><li><img src=<?php echo $showfilm->image; ?> width="100" height="120" padding=10px/><br>
   <label><?php echo $showfilm->title; ?></label></li><?php } } ?>
</ul>

<ul class="films" >
    <li><img id="7" class="films" src="images/about-mary.jpg" width="100" height="120" padding=15px/><br>
      <label> No content </label></li>
    <li><img id="2" src="images/the-departed.jpg" width="100" height="120" padding=15px/><br>
      <label> No content </label></li>
    <li><img id="9" src="images/team-america.jpg" width="100" height="120" padding=15px/><br>
      <label> No content </label></li>
    <li><img id="5" src="images/notting-hill.jpg" width="100" height="120" padding=15px/><br>
      <label> No content </label></li>
    <li><img id="12" src="images/amelie.jpg" width="100" height="120" padding=15px/><br>
      <label> No content </label></li>
</ul>



</body>
