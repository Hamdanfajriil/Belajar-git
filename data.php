<?php
     require_once('helper.php');


     $query = mysqli_query($db_connect, 'select * from notes order by id_note DESC');

     if (mysqli_num_rows($query) > 0){
         $result = array();
         $result["data"] = array();
         while ($row = mysqli_fetch_assoc($query)){
             $data['id_note'] = $row['id_note'];
             $data['note'] = $row['note'];
             array_push($result["data"], $data);
         }
         echo json_encode($result);
        
     } else {
         $result["massage"] = "langka date ngabs";
         echo json_encode($result);
     }

?>