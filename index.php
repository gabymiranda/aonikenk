<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Instituto Aonikenk</title>
     <!--
        <link rel="stylesheet" href="js/libs/twitter-bootstrap/css/bootstrap.css" type="text/css"
      --> 
        <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,minium-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">

    </head>
   
    <body>
        <script src="js/libs/jquery/jquery.js"></script>  
        <script src="js/libs/twitter-bootstrap/js/bootstrap.js"></script>  

        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        
                        <img src="pictures/logoIA.png" width="228" height="206" alt="logoIA"/ class="img-responsive img-rounded">
                    </div>
                    <div class="col-md-8">
                          <h1 class="text-primary">Instituto Aonikenk<small>  Caleta Olivia - Santa Cruz  </small></h1>
                    </div>
                </div> 
            </div>
           <!-- Aqui agrego el menu dentro del header-->
           <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-gm">
                           <span class="sr-only">Desplegar / Ocultar Menu</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                   </div>
                   <!-- Inicia menu-->
                   <div class="collapse navbar-collapse" id="navegacion-gm">
                       <ul class="nav navbar-nav">
                           <li class="active"><a href="#">Inicio</a></li>
                           <!-- codigo para crear menu desplegable-->
                           <li class="dropdown">
                               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                   Institucional <span class="caret"></span>
                               </a>
                               <ul class="dropdown-menu" role="menu">
                                   <li><a href="#">Historia</a></li>
                                   <li><a href="#">Ideales</a></li>
                                   <li><a href="#">Equipo de Gestión</a></li>
                                   <li><a href="#">Proyecto Institucional</a></li>
                                   <li><a href="#">Regimen de Convivencia</a></li>
                               </ul>
                           </li>
                           <li><a href="#">Inicial</a></li>
                           <li><a href="#">Primaria</a></li>
                           <li><a href="#">Secundario</a></li>
                           
                           
                       </ul>
                   </div> 
               </div>
           </nav>
        </header>
<!--
El siguiente codigo corresponde a la incorporacion de un slider
-->
        <div class="container">
            <br>
            <div class="col-md-12">
               <div id="carousel-1" class="carousel slide" data-ride="carousel"
                    <!-- Indicadores-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                   </ol>
                    <!-- Contenedor de los slides-->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="http://lorempixel.com/1200/400" class="img-responsive">
                            <div class="carousel-caption hidden-xs hidden-sm">
                                <h3>Esta es la slide #1</h3>
                                <p> Nivel Inicial</p>
                                
                            </div>
                        </div>
                         <div class="item">
                            <img src="http://lorempixel.com/1200/400/city/1" class="img-responsive">
                            <div class="carousel-caption hidden-xs hidden-sm">
                                <h3>Esta es la slide #2</h3>
                                <p> Nivel Primario</p>
                                
                            </div>
                        </div>
                         <div class="item">
                            <img src="http://lorempixel.com/1200/400/city/2" class="img-responsive">
                            <div class="carousel-caption hidden-xs hidden-sm">
                                <h3>Esta es la slide #3</h3>
                                <p> Nivel Secundario</p>
                            </div>
                        </div>
                        <!--Controles -->
                        <a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>"
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>"
                            <span class="sr-only">Siguiente</span>
                        </a>
                    </div>
               </div>
            
        </div>
        <div class="container">
            <section class="main row">
                <article class="col-md-9">
                    <p>
                    <h3> Articulo</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <button class="btn btn-primary"> boton</button>
                </article>
                <aside class="col-md-3">
                    <p>
                         <h3> slidebar</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                </aside>
            </section>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <p>
                         <h3> Columna 1</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                     </p>
                </div>
                <div class=" col-xs-12 col-sm-6 col-md-3">
                    <p>
                          <h3> Columna 2</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-xs-12 col-sm-6 color1 col-md-3 col-md-offset-3">
                    <p>
                          <h3> Columna 3</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
       <!--
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <p>
                          <h3> Columna 4</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
       -->     
       </div>


        </div>



        <?php
        // put your code here
        ?>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <p>Instituto Privado Aonikenk</p>
                        <p>Nro. de Registro CO - I.P.S - 14</p>
                        <p> Telefono: 0297 485-1818</p>
                    </div>
                </div>
            </div>
            
        </footer>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
