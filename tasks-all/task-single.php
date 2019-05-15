<?php
include('database.php');


$query= "SELECT * FROM tasks ";
$result=mysqli_query($connection, $query);
if(!$result){
    die('Consulta fallida'. mysqli_error($connection));
}
$json=array();
while($row=mysqli_fetch_array($result)){
    echo "
   
                        
                       
    <div class='form-group'>
    <input  id='status' name='status'  class='form-control' placeholder='Estado'>". $row['name'] ."
     </div>
   
    ");

    $json[]=array(
        'name'=> $row['name'],
        'description'=> $row['description'],
        'status'=> $row['status'],
        'id'=> $row['id']
    );
}
$jsonstring=json_encode($json);



   
    
?>