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
 <li><a href="#Moodslider">Moodslider</a></li>
 <li><a href="#Upload">Upload</a></li>
 <li class="icon">
   <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
 </li>
</ul>

  <br>
  <form action="">
  <div class="slider">
    <span id="range">Agitated</span>
    <label for="agitated_calm"></label>
      <input type="range" min="0" max="50" value="0" step="5" onchange="showValue(this.value)" />
    <span id="range">Calm</span>
      <script type="text/javascript">
        function showValue(newValue)
         {
	        document.getElementById("range").innerHTML=newValue;
         }
      </script>

  <br>

    <span id="range">Happy</span>
    <label for="happy_sad"></label>
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
  <label for="tired_awake"></label>
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
  <label for="scared_brave"></label>
    <input type="range" min="0" max="50" value="0"step="5" onchange="showValue(this.value)" />
  <span id="range">Fearless</span>
    <script type="text/javascript">
      function showValue(newValue)
      {
        document.getElementById("range").innerHTML=newValue;
      }
    </script>
    <button type="submit">Submit</button>
  </form>
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