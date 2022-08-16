<?php

    //creamos la sesion
    session_start();
    //validamos si se ha hecho o no el inicio de sesion correctamente
    //si no se ha hecho la sesion nos regresará a login.php
    if(!isset($_SESSION['usuario'])) 
    {
        
        header('Location: index.php'); 
        
        exit();
     }

?>




<div class="container-fluid ">
 <body>
       <div class="row justify-content-center">
          <div class="col-5">
        <div class="p-3 mb-2 bg-primary text-white">
      <center><h3>Bienvenido al Sistema SIDI </h3></center>
      <p class="p-5 text-justify">
        Sistema creado por Danny Jose JImenez Gutierrez Programador Web con la finalidad de llevar todo lo que
        es el control de las Gerencias de Tecnologia ,Ingenieria, Servicio a la Producciom y VST .Este trabajo aborda los aspectos teóricos conceptuales del funcionamiento del control de inventarios y de los requisitos funcionales y técnicos en almacenes. En él se ofrece el análisis y diseño del sistema integral de inventarios (SII) que contribuya a dar solución a la ausencia de un sistema informático para el control del inventario de mercancías en los almacenes, compatible con el resto de los sistemas de gestión económica utilizados en la Unión de Empresas del Níquel. La realización de este trabajo se basa en investigaciones realizadas con vista a garantizar el eficiente control de los recursos que se encuentran en los almacenes, abastecimientos oportunos en tiempo y con la calidad apropiada de los productos
      
      </div>
    </div>   





    <div class="col-5">
      

          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/carrusel-1.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/carrusel-2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/carrusel-3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">SIGUIENTE</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">NUEVO</span>
            </a>
          </div>
           </div>
            </div>
            </div>
            </div>
         <div class="col-1">
            </div>
                </div>
            </div>
<div class="row justify-content-around ">
            <div class="col-5">
              <div class="p-5 mb-2 bg-success text-white">
                                   
                   <center><h3>Tecnología e Informatica </h3></center>
                          <p class="p-4 text-justify ">
                          Sin embargo, la tecnología también puede ser usada para proteger el medio ambiente, buscando soluciones innovadoras y eficientes para resolver de forma sostenible las crecientes necesidades de la sociedad, sin provocar un agotamiento o degradación de los recursos materiales y energéticos del planeta o aumentar las desigualdades sociales. Ciertas tecnologías humanas han llevado a un avance descomunal en los estándares y calidad de vida de miles de millones de personas en el planeta, logrando simultáneamente una mejor conservación del medio ambiente.
                          
    </div>
                </div>
                                <div class="col-6">
                                  <div class="p-15 mb-2 bg-info text-white">
                                    <center><h3>Redes</h3></center>
                                                <p class="p-5 text-justify">
                                                Los almacenes son centros que están estructurados y planificados para llevar a cabo funciones de almacenamiento tales como: conservación, control y expedición de mercancías y productos, recepción, custodia, etc. El almacén es el encargado de regular el flujo de existencias.Cumplido el primer paso, el segundo es planificar la ubicación, distribución y diseño de los espacios, los equipamientos de las instalaciones, así como los medios mecánicos y los recursos humanos para manipulación y almacenaje de las mercancías.
                                              </div>
                                            </div>
                                            
                </div>
                </div>








            
<div class="container-fluid">
 
       <div class="row justify-content-center">
          <div class="col-5">
        <div class="p-5 mb-2 bg-primary text-white">
      <center><h3>Computadoras </h3></center>
      <p class="p-5 text-justify">
        El Departamento de Servicios Generales se encarga de proporcionar oportuna y eficientemente, los servicios que requiera el Centro en materia de comunicaciones, transporte, correspondencia, archivo, reproducción de documentos, revelado de material fotográfico, intendencia, vigilancia, mensajería y el suministro de mantenimiento preventivo y correctivo al mobiliario, equipo de oficina y equipo de transporte.
      </div>
    </div>   





    <div class="col-5">
      

          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/carrusel-4.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/carrusel-5.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/carrusel-6.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
           </div>
            </div>
            </div>
            </div>
         <div class="col-1">
            </div>
                </div>
                
            </div>
