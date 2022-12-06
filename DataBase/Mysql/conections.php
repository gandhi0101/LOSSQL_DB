<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'id19928703_los_sql');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);


function logIn()//usuarios
{
   return "SELECT correo, contrasena FROM usuarios WHERE correo = (?) and contrasena = (?) ";
}
function signIn()//usuarios
{
   return "INSERT INTO  usuarios ( correo ,  contrasena ,  nombre  ) VALUES (?,?,?)";
}
function getname()//usuarios
{
   return "SELECT correo, contrasena FROM usuarios WHERE nombre = (?) ";
}
function getExamen()//examen
{
   return "SELECT * FROM examenes";
}
function addcolumn(){
   return 'ALTER TABLE certificaciones ADD imagen VARCHAR(30) NOT NULL AFTER folio';
}
function delete(){
   return 'DELETE FROM usuarios WHERE Clave_especialidad in (?)';
}

function edit_column(){
   return "ALTER TABLE examenes CHANGE respuesta respuestaC TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL";
}

function add_exam(){
   return "ALTER TABLE examenes ADD respuesta1 TEXT NOT NULL AFTER folio, ADD respuesta2 TEXT NOT NULL AFTER respuesta1, ADD respuesta3 TEXT NOT NULL AFTER respuesta2
   ";
}