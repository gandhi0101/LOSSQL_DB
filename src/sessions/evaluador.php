<?php
    session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificacion</title>
    <style>
        .calif{
            margin: 10% 0 0 60vh  ;
            width: 90vh;
        }
    </style>
</head>
<body>
<?php include("../layout/header.php"); ?>
<div class="calif">
    
    
<?php
$tipo = $_POST['tipo']; // aqui tmb lo podemos recibir por metodo post para especificar el tipo
$acum = 0.0;
if($_POST){
    if(isset($_POST['enviar'])){ //recibimos todas las respuestas
        if($tipo == 'php'){
            $res1 = $_POST['r1'];//cambiar por el folio perteneciente a la respuesta y/o pregunta
            $res2 = $_POST['r2'];
            $res3 = $_POST['r3'];
            $res4 = $_POST['r4'];
        }else if($tipo == 'c++'){
            $res1 = $_POST['r5'];//cambiar por el folio perteneciente a la respuesta y/o pregunta
            $res2 = $_POST['r6'];
            $res3 = $_POST['r7'];
            $res4 = $_POST['r8'];  
        }else if($tipo == 'javascript'){
            $res1 = $_POST['r9'];//cambiar por el folio perteneciente a la respuesta y/o pregunta
            $res2 = $_POST['r10'];
            $res3 = $_POST['r11'];
            $res4 = $_POST['r12'];
        }else{
            $res1 = $_POST['r13'];//cambiar por el folio perteneciente a la respuesta y/o pregunta
            $res2 = $_POST['r14'];
            $res3 = $_POST['r15'];
            $res4 = $_POST['r16'];
        }
    }
}
//conectamos con la bd
/*$servidor='localhost';
$cuenta='root';
$password='root';
$bd='bdcertificaciones';

$conexion = new mysqli($servidor,$cuenta,$password,$bd);

$sql = 'select * from examenes';
$resultado = $conexion -> query($sql);*/

include("../../DataBase/Mysql/conections.php");
                    $resultado = $db->query(getExamen());

if ($db->connect_errno){
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
    if($calif > 6.5){
        echo '<h3 style="background-color: #0f0; text-align:center;">Has acreditado el examen,<br> tu calificaci??n es :'.$calif.'</h3>';
        
    }else{
        echo '<h3 style="background-color: #0f0">Has reprobado el examen, tu calificaci??n es :'.$calif.'</h3>';
    }
}
?>
</div>

</body>
</html>
