<!DOCTYPE html>
<html>
    <head>
        <title>Result Page</title>
    </head>
<body>
    <ul>
            <?php foreach ($msg as $item):?>
            <li><?php echo $item;?></li>
            <?php endforeach; ?>
    </ul>
<!--p id="demo">Click the button to get your coordinates:</p>
<button onclick="getLocation()">Try It</button>
<script>
var x=document.getElementById("demo");
function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition);
    }
  else{x.innerHTML="Geolocation is not supported by this browser.";}
  }
function showPosition(position)
  {
  x.innerHTML="Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;	
  }
</script-->
</body>
</html>
