 <!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 100% }
    </style>
    <!--jquery API-->
    <script src="jquery.js" type="text/javascript"></script>
    <!--google maps API-->
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?v=3&sensor=true">
    </script>

    <script>
    /*function for button*/

    function initiate_geolocation() {
        navigator.geolocation.getCurrentPosition(handle_geolocation_query);  
    }  
    function handle_geolocation_query(position){
    var lng = position.coords.longitude;
    var lat = position.coords.latitude;
    alert("muhaha");
       // var mapOptions = {
       //   center: new google.maps.LatLng(lat, lng),
       //   zoom: 16
       // };
       // var map = new google.maps.Map(document.getElementById("map-canvas"),
       //     mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);  

    </script>


  </head>
  <body>
    <button id="btnInit" onclick="initiate_geolocation()" >Find Me</button>
  </body>
</html>