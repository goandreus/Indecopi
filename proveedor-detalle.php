<?php 
    include('header.php');
?>

   <section class="cabeceraBienvenida" id="home">
            <div class="metrica" style="">
                <div class="tituloCabecera">
                    
                    <h2 ><span style="color:#fff">|</span> Detalles del Proveedor</h2><br>
                	
                </div>
                <div class="columna1" style="padding-left: 150px;padding-top: 2%;padding-bottom: 2%">
	            <style>
                    th,td{width: 200px;padding: 2%}
                </style>
                <div class="columna1" style="float: left;width: 50%">
                	<table style="width: 70%">
                    <tr>
                        <th style="border:1px solid #d0cfcf;color:#4c444b">Razon Social</th>
                        <td style="border:1px solid #d0cfcf;color:#fff">Banco de Crédito del Perú SA</td> 
                    </tr>

                  
                    <tr><th style="border:1px solid #d0cfcf;color:#4c444b">Rubro</th>
                        <td style="border:1px solid #d0cfcf;color:#fff">Agencia Bancaria</td> 
                    </tr>
                     <tr>
                        <th style="border:1px solid #d0cfcf;color:#4c444b">Departamento</th>
                        <td style="border:1px solid #d0cfcf;color:#fff">LIMA</td> 
                    </tr>
                </table>
                <br><br><br>
                </div>

                	<div class="columna2" style="float: right;width: 50%;top:20px">
                    <article>
                    	<img src="img/bg-img/metrica.png" width="auto" />
                    </article>
                    
                	</div>
                    <br>
                    <div class="" style="left:12px;padding: 2% 0">
                        
                        <div class="sing-up-button d-none d-lg-block" style="text-align: left;">
                            <a href="financiero.php#reporta">Reportar reclamo</a>
                        </div>
                </div>
				</div>

            </div>
   </section>
    <section class="awesome-feature-area bg-white section_padding_0_50 clearfix" id="ubicacion" style="width: 100%;height: 500px;" onload="initMap()">


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
                    zoom: 16, //MIENTRAS EL NUMERO ES MAS ALTO MAS CERCA SERA EL ZOOM
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                //CREAMOS EL MAPA
                map = new google.maps.Map(document.getElementById("ubicacion"), mapOptions);

                //CREAMOS EL CUADRO DE INFORMACION
                infowindow = new google.maps.InfoWindow();

                // CONFIGURACION DE BUSQUEDA
                var request = {
                    location: myLatlng,
                    radius: 500,
                    name : 'BCP'// types :['store'] BUSQUEDA POR TIPO DE LUGAR  ; name : 'Indecopi' => busqueda por cadena de coincidencia
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