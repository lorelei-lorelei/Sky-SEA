<?php

include 'film-object.php';

function film_suggest($mood, $key){
  $filmsdefault=[];
  if($calmfilm = isset($_GET[$key])){
  global $filmsArray;
  foreach ($filmsArray as $film){
    if($film->mood == $mood){
      array_push($filmsdefault, $film);
    }
  }
  }
  return $filmsdefault;
}
