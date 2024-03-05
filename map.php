<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="LabourFriend.in - We Help Labours To Get Work In Their Locality Easily  And Hirers To Find Their Required Labours Within Their Locality In Less Time.">
  <meta name="keywords" content="LabourFriend,labour friend,labour in my panchayat,find labour in odisha,construction labours in my panchayat,plumbers in my panchayat,masons in my panchayat,wall painter in my panchayat,carpenters in my panchayat,electricians in my panchayat,tite setters in my panchayat,labours in odisha,hire labour in odisha,plumbers in our area,electricians in our area,masons in our area,tile setters in our area,painters in our area,carpenters in our area,find labours in our area,nayak groups,chandan,chandan kumar nayak">
  <meta name="owner" content="Chandan Kumar Nayak">
   <title>Find Us | LabourFriend</title>
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="image/lf.jpg"/>
<link rel="stylesheet" href="about-us-1.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
 <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 700px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
</head>
<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.html" class="w3-bar-item w3-button w3-padding-large">HOME</a>
   
   <a href="about.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT US</a>
	<a href="follow.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">FOLLOW US</a>
	
    
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  
   <a href="about.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ABOUT US</a>
   <a href="follow.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">FOLLOW US</a>
   
</div>
  
   
    <!--The div element for the map -->
    <div id="map"></div>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: 20.316552 , lng: 86.611363};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap">
    </script>
  <!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <p class="w3-medium">Copyright © 2019 LabourFriend.in (a NAYAK GROUPS Venture) All Rights Reserved.</p>
</footer>

<script>

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>