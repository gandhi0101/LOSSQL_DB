<?php
$tipo = "python"; // aqui tmb lo podemos recibir por metodo post para especificar el tipo
$acum = 0.0;
if($_POST){
    if(isset($_POST['enviar'])){ //recibimos todas las respuestas
      $res1 = $_POST['r13'];//cambiar por el folio perteneciente a la respuesta y/o pregunta
      $res2 = $_POST['r14'];
      $res3 = $_POST['r15'];
      $res4 = $_POST['r16'];
    }
}
//conectamos con la bd
$servidor='localhost';
$cuenta='root';
$password='root';
$bd='bdcertificaciones';

$conexion = new mysqli($servidor,$cuenta,$password,$bd);

$sql = 'select * from examenes';
$resultado = $conexion -> query($sql);

if ($conexion->connect_errno){
    die('Error en la conexion');
}else{//conexion exitosa
    while( $fila = $resultado -> fetch_assoc()){
        if($fila['materia'] == $tipo){ //solo queremos ver las respuestas de la materia que queremos
        $resC = $fila['respuestaC']; 
   //comparamos respuestas
        if($res1 == $resC){
          $acum = $acum + 1.0;
        }
        if($res2 == $resC){
            $acum = $acum + 1.0;
        }
        if($res3 == $resC){
            $acum = $acum + 1.0;
        }
        if($res4 == $resC){
            $acum = $acum + 1.0;
        }
        }
    }
    if($tipo == 'c++'){
        $acum = $acum - 2.0;
    }
    $calif = ($acum * 10.0) / 4.0; //cambiar el 4.0 por el total de preguntas que se hacen
    echo $calif;
    if($calif > 6.5){
        echo 'Has acreditado el examen, tu calificación es :'.$calif;
    }else{
        echo 'Has reprobado el examen, tu calificación es :'.$calif;
    }
}
?>