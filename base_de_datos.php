<?php
if (isset($_POST["button1"])) {
  $server = "localhost";
  $usuario = "manu";
  $contrasena = "12345";
  $bd = "hotel_bd";
  $enlace = new mysqli($server,$usuario,$contrasena,$bd);
  if ($enlace->connect_error) {
    die("<p>Error, sin conexión al Servidor </p>");
  }
  $ced = $_POST['cedula'];
  $nom = $_POST['nombre'];
  $ape = $_POST['apellido'];
  $ciu = $_POST['ciudad'];
  $hab = $_POST['habitacion'];
  $per = $_POST['personas'];
  $fec = $_POST['fecha'];
  $dia = $_POST['dias'];
  $des = $_POST['desayuno'];
  $consulta = ("INSERT INTO hotel
                VALUES ('$ced','$nom','$ape','$ciu','$hab','$per','$fec','$dia','$des')");
  if ($enlace->query($consulta)) {
    echo "<h1>Se guardó la información en la base de datos 👀</h1>";
    echo "<br>";
    echo "<br>";
    echo "<h1>Resumen</h1>";
    echo "<br>";
    echo $nom." ".$ape." se registró el: ".$fec;
    echo "<br>";

    $acum_desayuno = 0;
    $acum = 0;
    $habitacion = 0;

    $escoger1 = isset($_POST['ciudad']);
    $escoger2 = isset($_POST['habitacion']);
    $escoger3 = isset($_POST['dias']);
    $escoger4 = isset($_POST['personas']);
    $escoger5 = isset($_POST['desayuno']);

    if ($escoger1) {
      if ($escoger1 == 'cartagena') {
        echo "<h2>La ciudad de destino es Cartagena 🏖</h2>";
      }else if ($escoger1 == 'Santa Marta') {
        echo "<h2>La ciudad de destino es Santa Marta 🛤</h2>";
      }else if ($escoger1 == 'Barranquilla') {
        echo "<h2>La ciudad de destino es Barranquilla 😎</h2>";
      }
    }

    if ($escoger2) {
      if ($escoger2 == 'sencilla'){
        $habitacion = 80000;
      } else if ($escoger2 == 'doble') {
        $habitacion = 100000;
      } else if ($escoger2 == 'doble-sencilla') {
        $habitacion = 100000;
      } else if ($escoger2 == 'multiple') {
        $habitacion = 120000;
      } else if ($escoger2 == 'no') {
        echo "<br>";
        die("<h1>Tienes que escoger el tipo de Habitación ... 🤦‍♀️</h1>");
      }
    }

    if ($escoger3) {
      if ($escoger3 == 'di_uno'){
        $acum = $habitacion * 1;
      } else if ($escoger3 == 'di_dos') {
        $acum = $habitacion * 2;
      } else if ($escoger3 == 'di_tres') {
        $acum = $habitacion * 3;
      } else if ($escoger3 == 'di_cuatro') {
        $acum = $habitacion * 4;
      } else if ($escoger3 == 'di_cinco') {
        $acum = $habitacion * 5;
      } else if ($escoger3 == 'no') {
        echo "<br>";
        die("<h1>Tienes que escoger los días ... 🤦‍♀️</h1>");
      }
    }

    if ($escoger4) {
      if ($escoger4 == 'p_una'){
        echo "<p>Habitación para una persona</p>";
      } else if ($escoger4 == 'p_dos') {
        echo "<p>Habitación para dos personas</p>";
      } else if ($escoger4 == 'p_tres') {
        echo "<p>Habitación para tres personas</p>";
      } else if ($escoger4 == 'p_cuatro') {
        echo "<p>Habitación para cuatro personas</p>";
      } else if ($escoger4 == 'p_cinco') {
        echo "<p>Habitación para cinco personas</p>";
      } elseif (condition) {
        echo "<br>";
        die("<h1>Tienes que escoger la cantidad de personas ...  🤦‍♀️</h1>");
      }
    }

    if ($escoger5) {
      $costo = 8000;
      if ($escoger5 == 'de_una'){
        $acum_desayuno = $acum + ($costo *1);
      } else if ($escoger5 == 'de_dos') {
        $acum_desayuno = $acum + ($costo *2);
      } else if ($escoger5 == 'de_tres') {
        $acum_desayuno = $acum + ($costo *3);
      } else if ($escoger5 == 'de_cuatro') {
        $acum_desayuno = $acum + ($costo *4);
      } else if ($escoger5 == 'de_cinco') {
        $acum_desayuno = $acum + ($costo *5);
      } else if ($escoger5 == 'no') {
        echo "<br>";
        echo "<p>El total a cancelar es de: ".$acum." </p>";
        echo "<br>";
      }
        echo "<p>El total a cancelar es de: ".$acum_desayuno." </br>";
        echo "<br>";
      }

  }else {
    echo "<br>";
    echo "<p>No se pudo enviar la información :( </p>";
  }
}
?>
