<?php

$connection= mysqli_connect(
    'localhost', /*el servidor*/ 
    'root', /*el usuario*/ 
    '', /*la contraseña*/
    'tasks-app'  /*Nombre de la base de datos*/


);

if(!$connection){
 echo('Database conectada');

}


?>