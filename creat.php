<?php

    require_once('helper.php');

    $data = $_POST['note'];
    $query = "INSERT INTO notes(note) VALUES ('$data')";
    $sql = mysqli_query($db_connect, $query);

    if($sql){
        $result["massage"] = "sukses";
        echo json_encode($result);
    } else {
        $result["massage"] = "tidak ada data";
        echo json_encode($result);
    }

?>