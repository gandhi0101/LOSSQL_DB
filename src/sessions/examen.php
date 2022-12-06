<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Examen</title>
  <style>
    .examen {
      margin: 15% 0 0 60vh;
    }
  </style>
</head>

<body>
  <?php include("../layout/header.php"); ?>
  <div class="examen">
    <?php
    if (isset($_GET['materia'])) {
    ?><?php

          //conectamos con la bd
          include("../../DataBase/Mysql/conections.php");
          $resultado = $db->query(getExamen());


          if ($db->connect_errno) {
            die('Error en la conexion');
          }
          //conexion exitosa
          else {
            $num = 1;
            $numPreg = 1; //contador para identificar preguntas
            $tipo = $_GET['materia'];
            if ($tipo == 'c') {
              $tipo = 'c++';
            } // se cambiará conforme el examen, se puede cambiar por metodo post que reciba el tipo
            if ($resultado->num_rows) { //si la consulta genera registros
          ?>
    <form action="evaluador.php" method="post">

      <!-- mandaremos los datos escogidos -->
      <?php
              echo '<h1>' . $tipo . '</h1>';
              while ($fila = $resultado->fetch_assoc()) { //recorremos los registros obtenidos de la tabla
                $materia = $fila['materia'];

                $numPreg += 1;
                if ($materia == $tipo) { //si la materia es igual a la materia que queremos mostramos
                  $pregunta = $fila['pregunta'];
                  $respuestac = $fila['respuestaC'];
                  $respuesta1 = $fila['respuesta1'];
                  $respuesta2 = $fila['respuesta2'];
                  $respuesta3 = $fila['respuesta3'];
                  $folio = $fila['folio'];
      ?>
          <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
          <div class="col-md-3 col-sm-6">
            <p> <?php echo $num . ".- " . $pregunta; ?> </p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="<?php echo $respuestac; ?>" id="defaultCheck1" name="<?php echo 'r' . $folio; ?>">
              <label class="form-check-label" for="defaultCheck1">
                <?php echo $respuestac; ?>
                <?php echo 'r' . $folio; ?>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="<?php echo $respuesta1; ?>" id="defaultCheck1" name="<?php echo 'r'. $numPreg; ?>">
              <label class="form-check-label" for="defaultCheck1">
                <?php echo $respuesta1; ?>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="<?php echo $respuesta2; ?>" id="defaultCheck1" name="<?php echo 'r'. $numPreg; ?>">
              <label class="form-check-label" for="defaultCheck1">
                <?php echo $respuesta2; ?>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="<?php echo $respuesta3; ?>" id="defaultCheck1" name="<?php echo 'r'. $numPreg; ?>">
              <label class="form-check-label" for="defaultCheck1">
                <?php echo $respuesta3; ?>
              </label>
            </div>
          </div>
          <br>

      <?php
                $num++;
                }
                
              }
      ?>
      <button type="submit" class="btn btn-primary mb-2" name="enviar">Send</button> <!-- enviamos los datos a evaluador.php -->
    </form>
<?php
            } else {
              echo "no hay datos";
            }
          }
        }
?>

  </div>

</body>

</html>