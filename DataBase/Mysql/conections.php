<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'id19928703_los_sql');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


   function logIn(){
    return "SELECT correo, contrasena FROM usuarios WHERE correo = (?) and contrasena = (?) ";
    
   }
   function signIn(){
    return "INSERT INTO  usuarios ( correo ,  contrasena ,  nombre  ) VALUES (?,?,?)";
   }

?>