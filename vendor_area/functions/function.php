<?php
include SERVER_PATH."includes/database.php";

function getCategory1Details(){
    global $conn;
    return mysqli_fetch_all(mysqli_query($conn,"select * from category1"),MYSQLI_ASSOC);
}


?>