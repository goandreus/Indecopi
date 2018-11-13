<?php 
    include('header.php');
?>

   <section class="cabeceraBienvenida" id="ubicacion" style="width: 100%;height: 500px;" onload="initMap()">
            <div class="metrica" style="">


            </div>
   </section>


<?php 
    include('footer.php');
?>

<script>
      var map;
        var infowindow;
        //** METODO PARA INICIALIZAR EL MAPA
        function initMap() {;
            // Creamos un mapa con las coordenadas actuales
            navigator.geolocation.getCurrentPosition(function(pos) {

                lat = pos.coords.latitude;
                lon = pos.coords.longitude;

                //OBTENER LAS COORDENADAS
                var myLatlng = new google.maps.LatLng(lat, lon);


                //CONFIGURACIONES DEL MAPA
                var mapOptions = {
                    center: myLatlng, //SETEAMOS LAS COORDENADAS
                    zoom: 12, //MIENTRAS EL NUMERO ES MAS ALTO MAS CERCA SERA EL ZOOM
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                //CREAMOS EL MAPA
                map = new google.maps.Map(document.getElementById("ubicacion"), mapOptions);

                //CREAMOS EL CUADRO DE INFORMACION
                infowindow = new google.maps.InfoWindow();

                // CONFIGURACION DE BUSQUEDA
                var request = {
                    location: myLatlng,
                    radius: 1115000,
                    name : 'Indecopi'// types :['store'] BUSQUEDA POR TIPO DE LUGAR  ; name : 'Indecopi' => busqueda por cadena de coincidencia
                };

                // Creamos el servicio PlaceService y enviamos la petición.
                var service = new google.maps.places.PlacesService(map);

                service.nearbySearch(request, function(results, status) {
                    if (status === google.maps.places.PlacesServiceStatus.OK) {
                        for (var i = 0; i < results.length; i++) {
                            crearMarcador(results[i]);
                        }
                    }
                });
            });
        }

        //** FIN METODO PARA INICIALIZAR EL MAPA


        //** METODO PARA CREAR LOS MARCADORES
        function crearMarcador(place) {
            // Creamos un marcador
            var marker = new google.maps.Marker({
                map: map,
                position: place.geometry.location
            });

            //CUANDO SE HAGA CLICK EN EL MARCADOR APARESCA EL NOMBRE DEL LUGAR EN EL INFOWINDOW
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent(place.name);
                infowindow.open(map, this);
            });
        }
</script>