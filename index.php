<?php

require_once "conexion.php";

  $query = $conn->prepare("SELECT * FROM publico");
  $query->execute();
  $query->store_result();

  $rows = $query->num_rows;

  
  $query1 = $conn->prepare("SELECT * FROM ponente_ponencia");
  $query1->execute();
  $query1->store_result();

  $rows1 = $query1->num_rows;

  $query2 = $conn->prepare("SELECT * FROM ponente_charla");
  $query2->execute();
  $query2->store_result();

  $rows2 = $query2->num_rows;

  $conn -> close();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>SITARA | Inicio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Llamado a los estilos CSS -->
  <link rel="icon" type="image/png" href="img/icon.png" />
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/jquery.easing-1.3.js"></script>
</head>

<body>

  <!-- Menu de Navegacion -->
  <header>
    <nav class="menu">
      <div class="logo">
        <a href="index.php"><img src="img/logo.png"></a>
          <!--Pequeño boton para que aprece cuando es responsive la página-->
          <span class="btn-menu"><i class="fas fa-bars"></i></span>
      </div>
      <!-- Elementos del menu -->
      <div class="list-container">
        <ul class="lists">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="calendarios.php">Calendarios</a></li>
          <li><a href="nosotros.php">Nosotros</a></li>
          <li><a href="formatos.php">Documentación</a></li>
        </ul>
      </div>
    </nav>
  <!-- Imagen Header -->
    <section class="banner">
        <div class="banner-content">
          <h1>SEMINARIO INTERNACIONAL</h1>
          <h1>TÉCNICAS AVANZADAS DE REPRODUCCIÓN ASISTIDA</h1>
          <h2>100 AÑOS DE INNOVACIÓN Y EXCELENCIA</h2><br>
            <div class="boton">
              <a href="https://forms.gle/rwq6FXYpGmRguH9XA">
                <button>INSCRÍBETE</button>
              </a>
            </div>
            <!--Cuenta Regresiva del Evento -->
            <div id="cuentaRegresiva"></div> 

            <!--Contenido del Wave-->
            <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 35%; width: 100%;"><path d="M-8.17,91.28 C149.99,150.00 319.69,26.14 503.10,111.02 L501.41,155.42 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg>
            </div>
        </div>
    </section>
  </header>

<!-- Acerca de nosotros -->
<h2>SITARA</h2>
  <section class="info">
    <img class="post_sitara" src="img/SITARA.png">
    <div class="info_contenido">
      <p>
      TCRN E.M Ing. Jorge Fierro Villacís, Mgs
      <br>
      <b>Director de la Universidad de las Fuerzas Armadas ESPE Sede Santo Domingo de los Tsáchilas.</b>
      <br>
      Tiene el honor de extender una cordial invitación a la ceremonia de inauguración del evento científico, <b>“SEMINARIO INTERNACIONAL DE TÉCNICAS AVANZADAS DE REPRODUCCIÓN ANIMAL ASISTIDA”</b>, organizado en conmemoración de los 100 Años de vida institucional de la Universidad de las Fuerzas Armadas ESPE.
      <br>
      <b> Fecha: </b> 22 al 24 de junio de 2022 <br>
      <b> Hora: </b> 08:00 am <br>
      <b> Modalidad Virtual: </b> https://cedia.zoom.us/meeting/register/tZIufu-orzgoHdca9vCNTW7D-3XuiWqKNHfU
      </p>
      <div class="boton">
        <a href="nosotros.php">
          <button>CONOCE MÁS</button>
        </a>
      </div>
    </div>
  </section>

   <!--Informacion de Nuestros Congreso -->
   <h2>Nuestro Congreso</h2>
   <section class="our-projects">
   <div class="contenido_num">
      <div class="fila_num">
          <div class="columna_num">
              <h1><?php echo $rows ?></h1><br>
              <p>Asistentes</p>
          </div>
          <div class="columna_num">
            <h1>17</h1><br>
            <p>Ponentes</p>
          </div>
          <div class="columna_num">
            <h1>5</h1><br>
            <p>Paises</p>
          </div>
      </div>
  </div>
  </section>
  
   <!--Seccion Categorias -->
   <h2>Nuestras Carreras</h2>
   <section class="boxes">
    <div class="box3">
        <a href="https://santodomingo.espe.edu.ec/ingenieria-agropecuaria/"><img src="img/planta.png" id="img3"></a>
        <h3>AGROPECUARIA</h3>
      </div>
      <div class="box2">
        <a href="https://santodomingo.espe.edu.ec/ingenieria-en-biotecnologia/"><img src="img/biologia.png" id="img2"></a>
        <h3>BIOTECNOLOGÍA</h3>
      </div>
      <div class="box1">
        <a href="https://santodomingo.espe.edu.ec/ingenieria-en-tecnologias-de-la-informacion/"><img src="img/computadora.png" id="img1"></a>
        <h3>ITIN</h3>
      </div> 
  </section>
 

  <!--seccion del mapa-->
  <h2>Ubícanos en Google</h2>
  <section class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7979.43148665111!2d-79.3082637295403!3d-0.4108535411987204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sec!4v1596391694180!5m2!1ses!2sec" 
    width="100%" height="350" frameborder="0" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </section>

</div>

<!--seccion del pie de pagina-->
<footer class="pie_pagina">
  <div class="contenido_ppg">
      <div class="fila">
          <div class="columna_ppg">
              <img src="img/footer/logo_blanco.png" class="logo-blanco">
          </div>
          <div class="columna_ppg">
            <h3>Hda. Zoila Luz, Vía Santo Domingo – Quevedo Km. 24</h3>
            <ul>
                <li>Santo Domingo – Ecuador</li>
                <li>Telf: (593) 2-2722-246</li>
                <li><a href="https://santodomingo.espe.edu.ec/">Campus Santo Domingo</a></li>
                <li><a href="https://www.espe.edu.ec/">Campus Matriz Sangolqui</a></li>
                <li><a href="https://espe-el.espe.edu.ec/">Campus Latacunga Centro</a></li>
            </ul>
          </div>
          <div class="columna_ppg">
              <h3>Encuéntranos en</h3>
                  <a href="https://www.facebook.com/ESPE.U.SD/"><img src="img/footer/facebook.png" ></a>
                  <a href="https://twitter.com/ESPEU"><img src="img/footer/twitter.png"  ></a>
                  <a href="https://api.whatsapp.com/send?phone=+593978681164&text=%C2%BFQu%C3%A9%20servicios%20ofrecen?"><img src="img/footer/whatsapp.png" ></a>
                  <a href="https://ec.linkedin.com/school/espe-escuela-politecnica-del-ejercito/"><img src="img/footer/linkedin.png" ></a>
          </div>
      </div>
  </div>
  <div class="derechos_reservados">
      <div class="container">
          ESPE Santo Domingo - SITARA
          &copy; 2022 - Todos los derechos reservados
      </div>
  </div>
</footer>




<!-- Scripts -->

<script src="https://kit.fontawesome.com/35db202371.js"></script>
<script src="js/interacciones.js"></script>
<script src="js/cuenta.js"></script>
</body>
</html>