<?php
include('database.php');


$id= $_POST['id'];
$name= $_POST['name'];
$description= $_POST['description'];
$status= $_POST['status'];

$query= "UPDATE tasks SET name=$name, description=$description ,status=$status WHERE id=$id";
$result= mysqli_query($connection,$query);
if(!$result){
    die('Consulta Fallida');
}
echo 'Tarea actualizada satisfactoriamente';


?>