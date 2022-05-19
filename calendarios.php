<!-- Tabla ponentes -->
<?php 
require_once "conexion.php";

    $query = 'SELECT * FROM ponente_ponencia ';
    if($stmt = $conn->prepare($query)){
        if($stmt->execute()){
            $result = $stmt->get_result();
            if($result->num_rows >= 0){
                $row = $result -> fetch_array(MYSQLI_ASSOC);
                $link = $row['LINK_PONENCIA']; 
                $inscripcion = $row['LINK_INSCRIPCION'];
            } else{
                echo 'Error! No existen resultados.';
                exit();
            }
        } else {
            echo "Error! Revise la conexión con la base de datos.";
            exit();
        }
    }
    $stmt ->close();
    $conn ->close();
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESPE INVESTIGA | Calendarios</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles-calendario.css">
    <script src="js/jquery-3.5.1.min.js"></script>
</head>
<body>
  <!-- Menu de Navegacion -->
  <header">
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
        <div class="banner-content1">
          <h1>BIENVENIDOS A LA FERIA DE CIENCIAS</h1>
          <h1>ESPE SANTO DOMINGO</h1>
          <h2>Conoce el calendario de proyectos<h2>
            <!--Contenido del Wave-->
            <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 35%; width: 100%;"><path d="M-8.17,91.28 C149.99,150.00 319.69,26.14 503.10,111.02 L501.41,155.42 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg>
            </div>
        </div>
    </section>
  </header>
  <main>
 


  <!--seccion de los calendarios-->
  <h2>Agenda Ponentes</h2>
  <?php 
    echo '<div class="boxes1">';
      if($result->num_rows >= 0){
        while($row = $result -> fetch_assoc()){
                    
        echo '<div class="ponenc">';
        echo '<img src="'. $row['LINK_PONENCIA'].'" width= "100%" >';
  
        echo '<div class="boton2">';
        echo  '<a href="'. $row['LINK_INSCRIPCION'].'"><button>Link de Inscripción</button></a>';
        echo '</div>';
        echo '</div>';
                                     
        }
        $result -> free();
        }else{
        echo '<p><em> No existe ponente registrado </em></p>';
      }

    echo '</div>';

  ?>
  


<!-- Acerca de nosotros -->
<div class="footer">
  <div class="deg-footer"></div>
  <div class="ejeZfooter">
  <div class="footer-content">
   <div class="footer-title">
     <h2>Conoce nuestro Calendario</h2>
   </div>
   <section class="our-projects2">
    <div class="deg-background2"></div>
      <div class="container-project2">

        <!--seccion del calendario-->
        <div class="calendar">
            <div class="calendar__info">
                <div class="calendar__prev" id="prev-month">&#9664;</div>
                <div class="calendar__month" id="month"></div>
                <div class="calendar__year" id="year"></div>
                <div class="calendar__next" id="next-month">&#9654;</div>
            </div>

            <div class="calendar__week">
                <div class="calendar__day calendar__item">LUN</div>
                <div class="calendar__day calendar__item">MAR</div>
                <div class="calendar__day calendar__item">MIE</div>
                <div class="calendar__day calendar__item">JUE</div>
                <div class="calendar__day calendar__item">VIE</div>
                <div class="calendar__day calendar__item">SAB</div>
                <div class="calendar__day calendar__item">DOM</div>
            </div>
            <div class="calendar__dates" id="dates"></div>
          </div>
     </div>
    </section>
  </div>
  </div>
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
<script src="js/scripts.js"></script>


</body>
</html>