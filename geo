
<script>
function maPosition(position) {
  var infopos = "Position déterminée :\n";
  infopos += "Latitude : "+position.coords.latitude +"\n";
  infopos += "Longitude: "+position.coords.longitude+"\n";
  infopos += "Altitude : "+position.coords.altitude +"\n";
  document.getElementById("infoposition").innerHTML = infopos;
}

if(navigator.geolocation)
  navigator.geolocation.getCurrentPosition(maPosition);
</script>


<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>HTML5 : Géolocalisation</title>
</head>
<body>

<!-- Un élément HTML pour recueillir l’affichage -->
<div id="infoposition"></div>

</body>
</html>