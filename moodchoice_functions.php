<?php

include 'moodslider.php';
include 'film-object.php';

$agicalm = ($_GET["agitated_calm"]);
$happysad = ($_GET["happy_sad"]);
$tiredawake = ($_GET["tired_awake"]);
$scared = ($_GET["scared"]);

function film_suggest(){
  if ($agicalm == 0){
    echo $agitatedfilm->id = '3';
  }
}
