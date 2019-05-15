<?php

 include('database.php');

$search=$_POST['search'];
if(!empty($search)){
    $query= "SELECT * FROM tasks WHERE name LIKE '$search'";
   // echo $query;
   $result= mysqli_query($connection, $query);
   if(!$result){
       die('error de consulta'. mysqli_error($connection));
   }
   $json=array();
  while($row=mysqli_fetch_array($result)){
      echo(
          "
        <table class='table'>
        <thead>
            <tr class='bg-danger text-white'>
            <th scope='col'>#</th>
            <th scope='col'>Nombre</th>
            <th scope='col'>Descripcion</th>
            
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope='row'>3</th>
            <td> &squf; ". $row['name'] ." </td>
            <td> &squf; ". $row['description'] ."</td>
            </tr>
        </tbody>
        </table>
           "
      );
      $json[]=array(  
          'name'=> $row ['name'],
          'description' => $row['description'],
          'id'=> $row ['id']
      );
   }
   $jsonstring = json_encode($json);

   
   

}



?>