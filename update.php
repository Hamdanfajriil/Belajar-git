<?php
require_once('helper.php');

parse_str(file_get_contents('php://input'), $_PUT);

$id = $_PUT['id_note'];
$note = $_PUT['note'];

$query = "UPDATE notes SET note = '$note' WHERE id_note='$id' ";
$sql = mysqli_query($db_connect, $query);

if($sql){
    $result["message"]="sukses";
    echo json_encode($result);
} else {
    $result["message"]="gagal";
    echo json_encode($result);
}

?>