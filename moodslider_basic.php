<!DOCTYPE HTML>
 <meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="style.css">

 <head>
  <title>Moodslider - Sky Cinema</title>
</head>
<body>
  <div class="header">
    <img src="images/sky_cinema_logo.png" />
    <h1>Moodslider - Sky Cinema</h1>
  </div>

  <div class="upload">
    <textarea rows="2" cols="50">
    Moodslider|Upload
    </textarea>
 </div>

  <br>
  <div class="slider">
    <span id="range">Agitated</span>
    <input type="range" min="0" max="50" value="0"step="5" onchange="showValue(this.value)" />
    <span id="range">Calm</span>
      <script type="text/javascript">
        function showValue(newValue)
         {
	        document.getElementById("range").innerHTML=newValue;
         }
      </script>

  <br>

    <span id="range">Happy</span>
     <input type="range" min="0" max="50" value="0"step="5" onchange="showValue(this.value)" />
    <span id="range">Sad</span>
      <script type="text/javascript">
        function showValue(newValue)
       {
         document.getElementById("range").innerHTML=newValue;
       }
     </script>

  <br>

  <span id="range">Tired</span>
    <input type="range" min="0" max="50" value="0"step="5" onchange="showValue(this.value)" />
  <span id="range">Wide Awake</span>
    <script type="text/javascript">
      function showValue(newValue)
      {
        document.getElementById("range").innerHTML=newValue;
      }
    </script>

  <br>

  <span id="range">Scared</span>
    <input type="range" min="0" max="50" value="0"step="5" onchange="showValue(this.value)" />
  <span id="range">Fearless</span>
    <script type="text/javascript">
      function showValue(newValue)
      {
        document.getElementById("range").innerHTML=newValue;
      }
    </script>
 </div>

   <br>
  <div class="result">
     <form action="">
      <input type="text" name="nocontent" placeholder="no content"><br>
      <input type="submit" value="no content"><br>
      <input type="text" name="nocontent" placeholder="no content"><br>
      <input type="submit" value="no content"><br>
      <input type="text" name="nocontent" placeholder="no content"><br>
      <input type="submit" value="no content"><br>
      <input type="text" name="nocontent" placeholder="no content"><br>
      <input type="submit" value="no content"><br>
      <input type="text" name="nocontent" placeholder="no content"><br>
      <input type="submit" value="no content"><br>
    </form>
  </div>

</body>
