<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Caribe Resorts</title>
    <link rel="stylesheet" href="hotel.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
  </head>
  <header class="header">
    <figure>
      <img id="logo" src="imagenes/resorts-hotel.svg" alt="Caribe Hotels" width="350" height="350">
    </figure>
    <nav>
      <ol>
        <li>
          <a href="hotel.html">Inicio</a>
        </li>
        <li>
          <a href="reservar.html">Reservar</a>
        </li>
        <li>
          <a href="habitacines.html">Habitaciones</a>
        </li>
        <li>
          <a href="hotel.html">Contáctenos</a>
        </li>
      </ol>
    </nav>
  </header>
  <body>
    <section class="formulario-contenedor">
      <form id="formulario-margen" class="formulario" action="base_de_datos.php" method="POST">
        <div id="col-1-margen" class="col-1">
          <label>Cédula</label>
          <input type="text" name="cedula" required placeholder="Coloca tu cédula">
          <label>Nombre</label>
          <input type="text" name="nombre" required placeholder="Coloca tu nombre">
          <label>Apellido</label>
          <input type="text" name="apellido"required placeholder="Coloca tu apellido">
          <label for="ciudad">Ciudad</label>
          <select name="ciudad">
            <option value="no">--Escoger--</option>
            <option value="cartagena">Cartagena</option>
            <option value="barranquilla">Santa Marta</option>
            <option value="cartagena">Barranquilla</option>
          </select>
          <label>Tipo de Habitación</label>
          <select name="habitacion">
            <option value="no">--Escoger--</option>
            <option value="sencilla">Sencilla</option>
            <option value="doble">Doble</option>
            <option value="doble-sencilla">Doble Sencilla</option>
            <option value="multiple">Múltiple</option>
          </select>
          <label>Número de Personas</label>
          <select name="personas">
            <option value="no">--Escoger--</option>
            <option value="p_una">1</option>
            <option value="p_dos">2</option>
            <option value="p_tres">3</option>
            <option value="p_cuatro">4</option>
            <option value="p_cinco">5</option>
          </select>
          <label>Fecha de Llegada</label>
          <input type="date" name="fecha">
          <label>Número de días</label>
          <select name="dias">
            <option value="no">--Escoger--</option>
            <option value="di_uno">1</option>
            <option value="di_dos">2</option>
            <option value="di_tres">3</option>
            <option value="di_cuatro">4</option>
            <option value="di_cinco">5</option>
          </select>
          <label>Incluir desayuno para:</label>
          <select name="desayuno">
            <option value="no">--Escoger--</option>
            <option value="de_una">Una persona</option>
            <option value="de_dos">Dos personas</option>
            <option value="de_tres">Tres personas</option>
            <option value="de_cuatro">Cuatro Personas</option>
            <option value="de_cinco">Cinco Personas</option>
          </select>
          <input class="button" type="submit" value="Enviar" name="button1">
        </div>
      </form>
    </section>
  </body>
</html>
