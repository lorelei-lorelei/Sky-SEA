<?php
$filmsArray = [];
$xml = simplexml_load_file('filmchoice.xml');
  foreach ($xml as $film) {
    $film = new Film($film->name, $film->mood, $film->image);
    array_push($filmsArray, $film);
  }

class Film {
  var $title;
  var $mood;
  var $id;
  var $image;
  function __construct($new_title, $new_mood, $new_image) {
			$this->title = $new_title;
      $this->mood = $new_mood;
      $this->image = $new_image;
    return $this->title;
    return $this->mood;
    return $this->id;
    return $this->image;
  }
}



 ?>
