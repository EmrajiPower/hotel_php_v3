<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Caribe Resort</title>
    <link rel="icon" href="imagenes/favicon.png">
    <link rel="stylesheet" href="hotel.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Source+Sans+Pro" rel="stylesheet">
  </head>
  <body>
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
            <a href="#contactenos">Contáctenos</a>
          </li>
        </ol>
      </nav>
    </header>
    <section class="contenido1">
      <div class="contenedor">
        <h1>¡Encuentra un lugar <span>Especial</span>!</h1>
        <center><img src="imagenes/presentacion1.svg" alt="Especial" height="250" width="250"></center>
        <p>Estamos ubicados en las Ciudades más Importantes de la Costa Colombiana.
          Vale la pena escoger un sitio bonito con nosotros <br>¿Te ayudamos?</p>
      </div>
    </section>
    <section class="contenido2">
      <div class="contenedor">
        <h1>¡Nos encargamos de acomodarte al <span>Mejor Precio</span>!</h1>
        <center><img src="imagenes/presentacion2.svg" alt="Mejor precio" height="250" width="250"></center>
        <p>Reserva una habitación desde $80.000 con servicio de desayuno.
          Sólo tienes que darnos algunos datos e incluir tu fecha de llegada y
        ¡Listo! tienes una habitación disponible.</p>
      </div>
    </section>
    <footer id="altura-footer" class="footer">
      <div class="footer-contenedor">
        <div class="contacto">
          <img id="img-footer" src="imagenes/resorts-hotel-minimalista.svg" alt="Caribe Resorts" width="180" height="180">
          <a href="tel:+573022273287"></a>
          <strong>Teléfono: </strong>
          <span> 302 227 32 87</span>
          <a href="mailto:contacto@manu.com"></a>
          <strong>E-mail:</strong>
          <span>contacto@manu.com</span>
        </div>
        <div class="datos-contenedor">
          <form class="formulario">
            <div class="col-1">
              <label for="nombre-contacto">Nombre</label>
              <input type="text" required placeholder="Coloca tu nombre">
              <label for="e-mail">E-mail</label>
              <input type="email" required placeholder="Coloca tu e-mail">
              <div class="sexo">
                <label for="mujer">
                  <input type="radio" id="mujer" name="sexo" check value="mujer">Mujer</input>
                </label>
                <label for="hombre">
                  <input type="radio" id="hombre" name="sexo" check value="hombre">Hombre</input>
                </label>
              </div>
              <div class="intereses">
                <label for="alojamiento">
                  <input type="checkbox" id="alojamiento" checked name="intereses" value="alojamiento">Alojamiento
                </label>
                <label for="reclamos">
                  <input type="checkbox" id="reclamos" checked name="intereses" value="reclamos">Reclamos
                </label>
                <label for="comentarios">
                  <input type="checkbox" id="comentarios" checked name="intereses" value="comentarios">Comentarios
                </label>
                <label for="otros">
                  <input type="checkbox" id="otros" checked name="intereses" value="otros">Otros
                </label>
              </div>
            </div>
            <div class="col-2" id="contactenos">
              <label for="comentarios">Comentarios</label>
              <textarea name="comentarios" rows="10" cols="30" id="comentarios"></textarea>
              <input class="button" type="submit" value="Enviar" id="buttom1">
            </div>
          </form>
        </div>
      </div>
    </footer>
  </body>
</html>
