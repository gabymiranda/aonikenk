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
        <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0">
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
       <!--La siguiente linea agrega linea vacia por debajo del slide -->
      <div class=""> <br> </div>       
        
      <!-- Aqui comienza menu vertical -->
      <div class="container">  
      <div class="row">
             <div class="col-md-2">
               <h3>Secciones</h3>
                    <ul class="nav nav-pills nav-stacked">
                         <li  class="active"><a data-toggle="pill" href="#jardin">Jardin de Infantes</a></li>
                         <li><a data-toggle="pill" href="#primario">Primario</a></li>
                         <li><a data-toggle="pill" href="#secundario">Secundario</a></li>
                         <li><a data-toggle="pill" href="#escuelaDeportiva">Escuela Deportiva</a></li>
                    </ul>   
               
            </div> 
          
               
            <div class="col-md-10">
                <div class="tab-content">          
                     <div id="jardin" class="tab-pane fade in active" >
                         <h3>Jardin de Infantes</h3>              
                         <p class="text-justify"> El jardín de infantes es un territorio qure abre espacio a lo público, a los recién llegados al mundo, que inicia a la puesta en juego del derecho al bien social que significa la educaión, entendida como la distribución de la herencia del conjunto de saberes y oportunidades simultánea de conocimiento de lo nuevo.</p>
                         <p class="text-justify">El Instituto Aónikenk cuenta con 3 salas en el Nivel Inicial; Sala de 3, 4 y 5 años con dos docentes a cargo de cada sala.</p>
                         <p class="text-justify">Tiene una jornada extendida de 14 a 18 hs y poseen actividades integradoras como Inglés, Informática, talleres de educación física y artística.</p>
                         <p class="text-justify">Desde este nivel se comienza con la preparación de la programación sistemática del abordaje del idioma inglés con el aval de ACII Asociación de Cultura Inglesa.</p>
                         <p class="text-justify">Se propicia la investigación científica a partir de los saberes que ponderen el interés de los pequeños, participando de muestras de ciencias escolares y extraescolares.</p>
                         <p class="text-justify">La inclusión de las familias es parte sustantiva en los distintos ejes de aprendizaje, su participación es importante para el desarrollo de los niños.</p>
                         <p class="text-justify">En los tres años, se ofrece un ambiente alfabetrizador propocio para el engranaje de los procesos de lectoescritura.</p>
                     </div>
                     
                     <div id="primario" class="tab-pane fade" >
                         <h3>Nivel Primario</h3>              
                         <p class="text-justify"> Uno de los ejes del Proyecto Institucional se vincula fuertemente con la premisa de que todos nuestros alumnos pueden aprender, por la tanto se asiste a una propuesta de enseñanza personalizada.</p>
                         <p class="text-justify"> Nivel Primario: Una jornada de 14 a 18 hs. donde se desarrollan todos los espacios curriculares obligatorios y una jornada en contraturno de 8 a 12 hs. donde se brindan 
                             espacios curriculares complementarios en el área Artística, Literatura, Ciencias, Matemáticas, Actividades Deportivas, Informática e Inglés. </p>
                         <p class="text-justify"> Todos los alumnos cuentan con Inglés por niveles rindiendo exámenes externos con profesores de la Asociación de Cultura Inglesa Argentina- AACI.</p>
                         
                     </div>
                
                     <div id="secundario" class="tab-pane fade" >
                         <h3>Nivel Secundario</h3>              
                         <p class="text-justify"> Nivel Secundario: Modalidad en Ciencias Naturales con orientación en Salud y Medio Ambiente con propuestas de talleres alternativos en Educación Sexual Integral y Orientación Vocacional. - De 1ro a 5to año.</p>
                         <p class="text-justify"> Un Ciclo Básico: De dos años. Caja Curricular: Lengua- Matemática- Biología- Química- Física- Geografía- Historia- Tecnología- Formación Ética y Ciudadana- Artística- Educación Física- Informática- Ingles- Apoyo Escolar.</p>
                         <p class="text-justify"> Ciclo Orientado: De tres años. Caja Curricular: Lengua- Matemática- Biología- Química- Física- Geografía- Historia Artística- Ingles- Economía-Problemática Ambiental- Ciencias de la Tierra- Metodología de la Investigación- Psicología- Análisis del Discurso - Formación Ética y Ciudadana - Filosofía- Introducción al Conocimiento Científico-Biología Molecular- Salud- Orientación Vocacional.</p>
                         <p class="text-justify"> Todos los alumnos cuentan con Inglés por niveles rindiendo exámenes externos con profesores de la Asociación de Cultura Inglesa Argentina- AACI.</p>
                     </div>
                    
                    
                    <div id="escuelaDeportiva" class="tab-pane fade" >
                         <h3>Escuela Deportiva</h3>  
                         <div align="right"><img src="pictures/LOGO escuela deportiva.jpg" alt="Logo escuela deportiva"/></div>
                         <p>Nuestra escuela deportiva ofrece los siguientes deportes:</p>
                         <div align="center"><img src="pictures/BASQUET.jpg" alt="Basquet" width="600" height="500"/></div>
                         <br><br>
                         <div align="center"><img src="pictures/FUTBOL FEMENINO.jpg" alt="Futbol Femenino" width="600" height="500"/></div>
                         <br><br>
                         <div align="center"><img src="pictures/FUTBOL MASCULINO.jpg" alt="Futbol Masculino" width="600" height="500"/></div>
                         <br><br>
                         <div align="center"><img src="pictures/GIMNASIA.jpg" alt="Gimnasa"width="600" height="500"/></div>
                         <br><br>
                         <h3>Nuestros horarios</h3>  
                         <div align="center"> <img src="pictures/HORARIOS ESCUELA DEPORTIVA.jpg" alt="Horarios Escuela"width="600" height="500"/></div>
                    </div>                   
                    
               </div>
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
                    <p class="small">Instituto Privado Aonikenk</p>
                    <p class="small">Nro. de Registro CO - I.P.S - 14</p>  
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
