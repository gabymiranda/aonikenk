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
                    <div class="col-md-6">
                          <h1 class="text-primary">Instituto Aonikenk<small>  Caleta Olivia - Santa Cruz  </small></h1>
                    </div>
                   <div class="col-md-2" align="center">
                       <a href="#">Aula Virtual</a>
                        &shortmid;
                      <a href="#">Portal Familiar</a>
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
                           <li class="active"><a href="index.php">Inicio</a></li>
                           <li><a href="NuestroInstituto.php">Nuestro Instituto</a></li>
                           <li><a href="ensenanza.php">Enseñanza</a></li>
                           <li><a href="#">Novedades</a></li>
                           <li><a href="#">Inscripciones</a></li>
                           
                           
                       </ul>
                       <form action="" class="navbar-form navbar-right" role="search">
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Buscar">
                               
                           </div>
                       </form>
                   </div> 
               </div>
           </nav>
        </header>
<!--
El siguiente codigo corresponde a la incorporacion de un slider
-->
        <div class="container">
            <br>
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div id="carousel-1" class="carousel slide" data-ride="carousel">
                    <!-- Indicadores-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                   </ol>
                    <!-- Contenedor de los slides-->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="pictures/slide8.jpg" alt="jardin">
                            <div class="carousel-caption hidden-xs hidden-sm">
                                <h3>Esta es la slide #1</h3>
                                <p> Nivel Inicial</p>
                                
                            </div>
                        </div>
                        <div class="item">
                            <img src="pictures/slide10.jpg" alt="primario" class="img-responsive">
                            <div class="carousel-caption hidden-xs hidden-sm">
                                <h3>Esta es la slide #2</h3>
                                <p> Nivel Primario</p>
                                
                            </div>
                        </div>
                        <div class="item">
                             <img src="pictures/secundaria1.jpg" alt="secundaria" class="img-responsive">
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
        </div>                  
<div class=""> <br> </div>   
        <div class="container">
         <!-- 
            <section class="main row">
                <article class="col-md-3">
                    <p>
                    <h3> Jardin de Infantes</h3>
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
          -->
         
          <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                              
                    <img src="pictures/JARDIN.jpg" width="228" height="206" alt="Jardin de Infantes"/ class="img-responsive img-rounded">
                     <div class=""> </div>  
                     <p>   
                         <h3> Jardin de Infantes</h3>
                       El jardín de infantes es un territorio que abre espacio a lo público, a los recién llegados al mundo, que inicia a la puesta en juego del derecho al bien social que significa la educaión, entendida como la distribución de la herencia del conjunto de saberes y oportunidades simultánea de conocimiento de lo nuevo.
                       <br>
                       <a href="#">Más información</a>
                     </p>
                </div>
                <div class=" col-xs-12 col-sm-6 col-md-3">
                     <img src="pictures/PRIMARIA.jpg" width="228" height="206" alt="Nivel Primario"/ class="img-responsive img-rounded">
                    <div class=""> </div>  
                    <p>
                          <h3> Nivel Primario</h3>
                        Uno de los ejes del Proyecto Institucional se vincula fuertemente con la premisa de que todos nuestros alumnos pueden aprender, por la tanto se asiste a una propuesta de enseñanza personalizada.
                        <br>
                        <a href="#">Más información</a>
                    </p>
                </div>
                 <div class="col-xs-12 col-sm-6 col-md-3">
                     <img src="pictures/SECUNDARIA.jpg" width="228" height="206" alt="Nivel Secundario"/ class="img-responsive img-rounded">
                     <div class=""> </div>  
                     <p>
                         <h3> Nivel Secundario</h3>
                        El objetivo es consolidar lo adquirido durante la escuela primaria e iniciar a los alumnos en las disciplinas y los métodos de la enseñanza secundaria. El programa ademas ofrece al alumno la posibilidad de personalizar sus estudios al presentarle seis áreas académicas, dentro de las cuales se deben elegir seis asignaturas para cursar durante los dos últimos años de su bachillerato.
                        <br>
                        <a href="#">Más información</a>
                     </p>
                </div>
               <!-- <div class="clearfix visible-sm-block"></div> -->
                <div class="col-xs-12 col-sm-6 color1 col-md-3 col-md-3">
                    <img src="pictures/DEPORTES.jpg" width="228" height="206" alt="Escuela Deportiva"/ class="img-responsive img-rounded">
                    <div class=""> </div>  
                    <p>
                          <h3> Escuela Deportiva</h3>
                        Las practica deportiva beneficia notablemente la salud fisica y emocional de las personas. Promover el deporte, los habitos saludables son uno de los ejes de nuestra escuela deportiva.
                        <br>
                        <a href="#">Más información</a>
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
         <div class=""> <br> </div>  
            <div class="panel-body">
                <div class="col-md-6">
                    <p class="small" class="small">Instituto Privado Aonikenk</p>
                      <p>Nro. de Registro CO - I.P.S - 14</p>  
                </div>
                <div class="col-md-6">
                    <p class="small">  <span class="glyphicon glyphicon-phone-alt"> </span> Telefono: 0297 485-1818</p>
                        
                    <p class="small">  <span class="glyphicon glyphicon-envelope"></span> E-mail: 4854656</p>
                </div>
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-xs-6">
                        <p class="small">Mapa del sitio &shortmid;  Sitio desarrollado por MGM Sistemas</p>
                        
                    </div>
                    <div class="col-xs-6">
                        <ul class="fa-ul">
                            <p class="small">
                            <img src="fonts/glyphicons-social-31-facebook.png" alt=""/> Facebook
                             &shortmid;              
                            <img src="fonts/glyphicons-social-39-skype.png" alt=""/> Skype
                            </p>
                        </ul>
                    </div>
                </div>
            </div>
            
        </footer>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        
        
        
        
        
    </body>
</html>
