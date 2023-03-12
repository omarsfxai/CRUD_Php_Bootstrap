<?php
include "db_connect.php" ;

$id = $_GET['id'];
$sql = "DELETE FROM `crud` WHERE Id = $id";

$result = mysqli_query($conn,$sql);

if($result){
    header("location: index.php?msg= User deleted");
}
else{
    echo "Failed ".mysqli_error($conn);
}

?>