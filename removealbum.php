<?php
    include 'dbconnect.php';
    
    $id = (int) $_GET["id"];
    
    $delete = "delete from albuns where id = ?;";
    $stmt = mysqli_prepare($con, $delete);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    header('Location: '. 'index.php');
?>