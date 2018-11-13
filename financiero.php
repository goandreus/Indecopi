<?php 
    include('header.php');
?>

    <!-- ***** Wellcome Area Start ***** -->
    <section class="cabeceraBienvenida" id="home">
       

            <div class="metrica" style="">

                <div class="tituloCabecera">
                    
                    <h2 ><span style="color:#fff">|</span> Financiero</h2>

                    
                </div>
                <div class="metricaGeneral">

               
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
         
                
            </div>
            <div class="consultaProveedor">
                    <div class="get-start-area">
             
                        <form action="#" method="post" class="form-inline">
                            <input type="text" class="form-control consulta" placeholder="Proveedor a consultar">
                            <a href="proveedor-detalle.php" class="submit" >Consultar</a>
                        </form>
                   
                    </div>
                
            </div>

        </div>

        <div class="welcome-thumb wow fadeInDown" data-wow-delay="0.5s">
            <img src="img/bg-img/welcome-salud.png" alt="">
        </div>
    </section>

    <br>

    <div id="mapaRiesgo" class="mapa-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <br><br>
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
                                            <TD style="border:1px solid #ab43da">FINANCIERO</TD> 
                                        </TR>
                                        <TR>
                                            <TH style="border:1px solid #ab43da">Departamento</TH>
                                            <TD style="border:1px solid #ab43da">LIMA</TD> 
                                        </TR>
                                        <TR><TH style="border:1px solid #ab43da">% Reclamos</TH>
                                            <TD style="border:1px solid #ab43da">10%</TD> 
                                        </TR>
                          <TR>
                                            <TH style="border:1px solid #ab43da">Proveedores Sancionados</TH>
                                            <TD style="border:1px solid #ab43da">20  | <a href="denuncias.php">Descúbrelos</a></TD> 
                                        </TR>
                                    </table>

                                <br>
                                <style>
                                    th,td{width: 200px;padding: 2%}
                                </style>
                                    <table >
                                        <TR >
                                            <TH style="border:1px solid #ab43da">Total de Reclamos Presentados</TH>
                                            <TD style="border:1px solid #ab43da">150</TD> 
                                        </TR>
                                        <TR>
                                            <TH style="border:1px solid #ab43da">Reclamos Conciliados</TH>
                                            <TD style="border:1px solid #ab43da">50</TD> 
                                        </TR>
                                        <TR><TH style="border:1px solid #ab43da">No Conciliados</TH>
                                            <TD style="border:1px solid #ab43da">20</TD> 
                                        </TR>
                                        <TR><TH style="border:1px solid #ab43da">Reclamos Abandono</TH>
                                            <TD style="border:1px solid #ab43da">5</TD> 
                                        </TR>
                                    </table>
                                    <br>
                                    
                              

                            </div>
                        </div>
                    </div>

                        
                       
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Metrica Area End ***** -->
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
    <section class="dondeReclamar clearfix" style="width:100%;"">
        <div class="container" style="width:80%;display: inline-flex;margin:0 25%;">
            <h1 style="color:#fff;vertical-align: middle;">¿Dónde Reclamar?</h1>
             
             <img src="img/bg-img/sbsa.jpg" width="407" height="165" style="padding: 0 0 0 25px">

        </div>
    </section>
    <!-- ***** Donde reclamar End ***** -->

    <!-- ***** Reclamo Area Start ***** -->
        <?php include('reportar.php');?>
    <!-- ***** Reclamo Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
   <?php
        include('footer.php');
     ?>