<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (isset($_SESSION['usuario'])) {
    // El usuario ha iniciado sesión, redirige a la página principal
    header('Location: principal.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/estilo.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
   <link rel="shortcut icon" href="img/perfil.jpg"> 
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair:ital,wght@1,300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Dosis&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=Dosis&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@500&display=swap');
  </style>
  <title>Chances</title>
</head>

<body>
  <header>
    <div class="portada">
      <nav class="navegacion">
        <a href="index.php" class="logo">Chances</a>
        <ul class="menu">
          <li><a href="#">¿Porque Chances?</a></li>
          <li><a href="#">Encontrar Trabajo</a></li>
          <li><a href="#">Rubros</a>
            <ul class="subrubro">
              <li><a href="#">Plomeria</a></li>
              <li><a href="#">Electricista</a></li>
              <li><a href="#">Mamposteria</a></li>
              <li><a href="#">Paisajismo</a></li>
              <li><a href="#">Niñera/o</a></li>
            </ul>
          </li>
          <li><a href="#">Contacto</a></li>
        </ul>
        
        <div class="barrabusqueda">
          <form>
            <input type="text" placeholder="Buscar..." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form> 
        </div>
        <div class="login">
              <a href="login.php">Iniciar Sesion</a>
          <ul class="registrarse">
            <li class="">
              <a href="registro.php">Registrarse</a>
            </li>
          </ul>
      </nav>
      <div class="linea"></div>
    </div>
  </header>
  <div class="gif">
    <img src="img/1.gif" alt="">
  </div>
  <article class="informacion">
    <div class="titulo">
      <span>
        Tu Trabajo<br>
        Mi Trabajo
      </span>
    </div>
    <div class="contenido">
      Esta pagina esta dedicada y orientada para los trabajadores y/o personas que busquen un servicio.
    </div>
    <div class="empleo">
      <a href="registro.php">Empezar</a>
    </div>
  </article>
  <div class="linea2"></div>
  <div class="explicacion">
    <div class="foto">
      <img src="img/2.gif">
    </div>
    <div class="tituloexpli">
      ¿Necesitas publicitar tu trabajo?
    </div>
    <div class="contenidoexpli">
      <div class="submejorar">
        <span class="material-symbols-outlined">
          system_update_alt
        </span>Mejorar
        <div class="submejorarcont">
          Mejore su propuestas de trabajo.<br>
        </div>
      </div>
      <div class="subpublicar">
        <span class="material-symbols-outlined">
          quick_reference_all
        </span>Publicar
        <div class="subpublicarcont">
          Publique un trabajo y contrate al mejor.<br>
        </div>
      </div>
      <div class="subchances">
        <span class="material-symbols-outlined">
          acute
        </span>Accesible
        <div class="subchancescont">
          Chances hace mas accesible el contacto Empleado a Empleador.
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="nombreempresa">
      2022-2023 Simuladores&copy; Global Inc<br>
      Todos los derechos reservados &copy; 2023
    </div>
  </footer>
   </main> 
</body>
</html>