<?php
include 'header.php';
?>
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-2">
  <h2 class="text-center">CONTACTO</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contactame para obtener mis servicios y productos.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Valdivia, Chile</p>
      <p><span class="glyphicon glyphicon-phone"></span> +569 838918xx</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>	   
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <form class="contact_form" action="contact_form.php" method="post">
              <div class="col-sm-6 form-group">
                <input class="form-control" id="nombre" name="nombre" placeholder="Nombre" type="text" required>
              </div>
              <div class="col-sm-6 form-group">
                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
              </div>
            </div>
            <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Mensaje" rows="5" required></textarea><br>
            <div class="row">
              <div class="col-sm-12 form-group">
                <button class="btn btn-default pull-right submit" type="submit">Enviar</button>
              </div>
            </div>	
        </form>    
    </div>
  </div>
</div>
<div id="googleMap" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(-39.874840, -73.394266);

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:12,
  scrollwheel:false,
  draggable:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php
include 'footer.php';
?>

</body>
</html>