<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<?php
//conectamos con la bd
$servidor='localhost';
$cuenta='root';
$password='root';
$bd='bdcertificaciones';

$conexion = new mysqli($servidor,$cuenta,$password,$bd);

$sql = 'select * from examenes ';
$resultado = $conexion -> query($sql);

if ($conexion->connect_errno){
    die('Error en la conexion');
}
//conexion exitosa
else{
    $numPreg=1; //contador para identificar preguntas
    $tipo = 'python'; // se cambiará conforme el examen, se puede cambiar por metodo post que reciba el tipo
        if ($resultado -> num_rows){ //si la consulta genera registros
            ?>
            <form action="evaluador.php" method="post"> <!-- mandaremos los datos escogidos -->
            <?php 
              while( $fila = $resultado -> fetch_assoc()){ //recorremos los registros obtenidos de la tabla
                      $materia = $fila['materia'];
                      $pregunta = $fila['pregunta'];
                      $respuestac = $fila['respuestaC'];
                      $respuesta1 = $fila['respuesta1'];
                      $respuesta2 = $fila['respuesta2'];
                      $respuesta3 = $fila['respuesta3'];
                      $folio = $fila['folio'];

                      if($materia == $tipo){ //si la materia es igual a la materia que queremos mostramos
                      ?>
                      <div class="col-md-3 col-sm-6"> 
                         <p> <?php echo ".- ".$pregunta ?> </p>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?php echo $respuestac ?>" id="defaultCheck1" name="<?php echo 'r'.$numPreg ?>">
                            <label class="form-check-label" for="defaultCheck1">
                             <?php echo $respuestac ?>
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?php echo $respuesta1 ?>" id="defaultCheck1" name="<?php echo 'r'.$numPreg ?>">
                            <label class="form-check-label" for="defaultCheck1">
                             <?php echo $respuesta1 ?>
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?php echo $respuesta2 ?>" id="defaultCheck1" name="<?php echo 'r'.$numPreg ?>">
                            <label class="form-check-label" for="defaultCheck1">
                             <?php echo $respuesta2 ?>
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?php echo $respuesta3 ?>" id="defaultCheck1" name="<?php echo 'r'.$numPreg ?>">
                            <label class="form-check-label" for="defaultCheck1">
                             <?php echo $respuesta3 ?>
                            </label>
                          </div>
                      </div>
                      <br>
            
    <?php
                      }
                  $numPreg+=1;
                }
   ?>
               <button type="submit" class="btn btn-primary mb-2" name="enviar">Send</button> <!-- enviamos los datos a evaluador.php -->
               </form>
    <?php
       }
       else{
           echo "no hay datos";
       }
} 
?>