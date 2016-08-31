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
La siguiente linea agrega una imagen fija en lugar del slide
-->
  <div align="center"><img src="pictures/slide10.jpg" alt="escuela"/></div>                 
<div class=""> <br> </div>   
        <div class="container">
       
          <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                              
                    <img src="pictures/JARDIN.jpg" width="228" height="206" alt="Jardin de Infantes"/ class="img-responsive img-rounded">
                     <div class=""> </div>  
                     <p>   
                         <a href="ensenanza.php#jardin"><h3> Jardin de Infantes</h3></a>
                       El jardín de infantes es un territorio que abre espacio a lo público, a los recién llegados al mundo, que inicia a la puesta en juego del derecho al bien social que significa la educaión, entendida como la distribución de la herencia del conjunto de saberes y oportunidades simultánea de conocimiento de lo nuevo.
                       <br>
                      
                     </p>
                </div>
                <div class=" col-xs-12 col-sm-6 col-md-3">
                     <img src="pictures/PRIMARIA.jpg" width="228" height="206" alt="Nivel Primario"/ class="img-responsive img-rounded">
                    <div class=""> </div>  
                    <p>
                        <a href="ensenanza.php#primaria">  <h3> Nivel Primario</h3>
                        </a>
                        Uno de los ejes del Proyecto Institucional se vincula fuertemente con la premisa de que todos nuestros alumnos pueden aprender, por la tanto se asiste a una propuesta de enseñanza personalizada.
                        <br>
                       
                    </p>
                </div>
                 <div class="col-xs-12 col-sm-6 col-md-3">
                     <img src="pictures/SECUNDARIA.jpg" width="228" height="206" alt="Nivel Secundario"/ class="img-responsive img-rounded">
                     <div class=""> </div>  
                     <p>
                         <a href="ensenanza.php#secundario"> <h3> Nivel Secundario</h3></a>
                        El objetivo es consolidar lo adquirido durante la escuela primaria e iniciar a los alumnos en las disciplinas y los métodos de la enseñanza secundaria. El programa ademas ofrece al alumno la posibilidad de personalizar sus estudios al presentarle seis áreas académicas, dentro de las cuales se deben elegir seis asignaturas para cursar durante los dos últimos años de su bachillerato.
                        <br>
                        
                     </p>
                </div>
               <!-- <div class="clearfix visible-sm-block"></div> -->
                <div class="col-xs-12 col-sm-6 color1 col-md-3 col-md-3">
                    <img src="pictures/DEPORTES.jpg" width="228" height="206" alt="Escuela Deportiva"/ class="img-responsive img-rounded">
                    <div class=""> </div>  
                    <p>
                        <a href="ensenanza.php#escuelaDeportiva">  <h3> Escuela Deportiva</h3></a>
                        Las practica deportiva beneficia notablemente la salud fisica y emocional de las personas. Promover el deporte, los habitos saludables son uno de los ejes de nuestra escuela deportiva.
                        <br>
                    </p>
                </div>
        
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
