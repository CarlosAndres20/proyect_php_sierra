<?php

 include('database.php');


 $query ="SELECT * FROM tasks";
$result= mysqli_query($connection, $query);
 if(!$result){
     die('consulta fallida'. mysqli_error($connection));
 };
 $json= array();

 while($row=mysqli_fetch_array($result)){
       echo ("<tr taskId=".$row['id'].">
            <td>".$row['id']. "</td>
            <td>
            <a href='#' class='task-item'>". $row['name'] ."</a>
            </td>
            <td>". $row['description'] ."</td>
            <td>
            <button class='task-delete btn btn-danger'>Delete
            </button>
            </td>
            </tr>");


     $json[]=array(
         'name'=> $row['name'],
         'description'=> $row['description'],
         'id'=> $row['id']
     );
 }
$jsonstring= json_encode($json);
//echo "%%%%".$jsonstring. "&&&&&".$i


?>