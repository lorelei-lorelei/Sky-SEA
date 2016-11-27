<?php

include 'film-object.php';

function film_suggest(){
$mood = ($_GET["ag_calm"]);
  if ($mood == 0){
    echo $mood = "Agitated";
  } else {
    echo $film;
  }
}

film_suggest();
