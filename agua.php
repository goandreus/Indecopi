<?php 
    include('header.php');
?>

    <!-- ***** Wellcome Area Start ***** -->
    <section class="cabeceraBienvenida" id="home">
       

            <div class="metrica" style="">

                <div class="tituloCabecera">
                    
                    <h2 ><span style="color:#fff">|</span> Agua</h2>

                    
                </div>
                <div class="metricaGeneral">

                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="counter-area">
                            <h3><span class="counter">190</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-sad-outline"></i>
                            <p>Casos <br> Reportados</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="counter-area">
                            <h3><span class="counter">120</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-happy-outline"></i>
                            <p>Casos <br> Solucionados</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="counter-area">
                            <h3><span class="counter">40</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-person"></i>
                            <p>Empresas <br>Sancionadas</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                
            </div>
            <div class="consultaProveedor">
                    <div class="get-start-area">
                        <!-- Form Start -->
                        <form action="#" method="post" class="form-inline">
                            <input type="text" class="form-control consulta" placeholder="Proveedor a consultar">
                            <a href="proveedor-detalle.php" type="submit" style="border:0px solid #000" class="submit" >Consultar</a>
                        </form>
                        <!-- Form End -->
                    </div>
                
            </div>

        </div>
        <!-- Welcome thumb -->
        <div class="welcome-thumb wow fadeInDown" data-wow-delay="0.5s">
            <img src="img/bg-img/welcome-salud.png" alt="">
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->
<br>
        <!-- ***** Mapa Area Start ***** -->
    <div class="video-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Mapa Area Start -->
                    <div  class="mapasEstadistico">
                        <div class="mapaRiesgo">
                            <h1 style="color: #a865e1">Mapa de Riesgo</h1><br>
                            <div id="map"></div>
                        </div>
                        <div class="detalleRiesgo">
                        <h1 style="color:#ccc;">Detalles de Riesgo</h1>
                            <div id="sitio" style="display:block;padding: 4%">
                       
                                    <table >
                                        <TR >
                                            <TH style="border:1px solid #ab43da">Actividad Económica</TH>
                                            <TD style="border:1px solid #ab43da">SALUD</TD> 
                                        </TR>
                                        <TR>
                                            <TH style="border:1px solid #ab43da">Provincia</TH>
                                            <TD style="border:1px solid #ab43da">LIMA</TD> 
                                        </TR>
                                        <TR><TH style="border:1px solid #ab43da">% Reclamos</TH>
                                            <TD style="border:1px solid #ab43da">10%</TD> 
                                        </TR>
                                        <TR><TH style="border:1px solid #ab43da">Abandono</TH>
                                            <TD style="border:1px solid #ab43da">5</TD> 
                                        </TR>
                                    </table>

                                <br>
                                <style>
                                    th,td{width: 200px;padding: 2%}
                                </style>
                                    <table >
                                        <TR >
                                            <TH style="border:1px solid #ab43da">Total Reportados</TH>
                                            <TD style="border:1px solid #ab43da">150</TD> 
                                        </TR>
                                        <TR>
                                            <TH style="border:1px solid #ab43da">Conciliados</TH>
                                            <TD style="border:1px solid #ab43da">50</TD> 
                                        </TR>
                                        <TR><TH style="border:1px solid #ab43da">No Conciliados</TH>
                                            <TD style="border:1px solid #ab43da">20</TD> 
                                        </TR>
                                        <TR><TH style="border:1px solid #ab43da">Abandono</TH>
                                            <TD style="border:1px solid #ab43da">5</TD> 
                                        </TR>
                                    </table>
                                    <br>
                                    <table >
                                        <TR>
                                            <TH style="border:1px solid #ab43da">Proveedores Sancionados</TH>
                                            <TD style="border:1px solid #ab43da">20  | <a href="denuncias.php">Descúbrelos</a></TD> 
                                        </TR>
                                      
                                    </table>
                              

                            </div>
                        </div>
                    </div>

                        
                       
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- ***** metrica Area End ***** -->

  <!-- ***** POpup Area  ***** -->
<div class="popup" style="z-index: 9999999">
  <div class="popup-content">
    <h3 style="color:#833ce8; font-weight: 700;">Haz tu reclamo</h3>
    <p>
    </p>

       <button class="accordion">Virtual</button>
        <div class="panel">
          <p><img src="img/bg-img/aqui.svg" width="30px"><a href="#reporta">Ir a Presentar Reclamo</a></p>
        </div>

        <button class="accordion">Presencial</button>
        <div class="panel">
          <p><img src="img/bg-img/ubicacion.svg" width="30px"><a href="ubicanos-indecopi.php">Oficina más cercana</a></p>
        </div>
  </div>  
  <a class="button" ><img src="img/bg-img/reclamo.svg" width="40" /></a>
</div>
 <!-- ***** POpup Area end ***** -->



    <!-- ***** Donde reclamar ***** -->
    <section class="dondeReclamar clearfix">
        <div class="container" style="display: inline-flex;padding: 0% 15%">
            <h1 style="color:#fff">¿Dónde Reclamar?</h1> <img src="img/bg-img/opsitel.png" style="padding: 0 0 0 25px">

        </div>
    </section>
    <!-- ***** Cool Facts Area End ***** -->

       <!-- ***** Reclamo Area Start ***** -->
        <?php include('reportar.php');?>
    <!-- ***** Reclamo Area End ***** -->

   <!-- ***** Footer Area Start ***** -->
   <?php
        include('footer.php');
     ?>