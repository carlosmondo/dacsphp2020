<?php
    $id = (int) $_GET["id"];
    
    $con = mysqli_connect("localhost","bob","bob","univille");
    
    $delete = "delete from cliente where codigo = ?;";
    $stmt = mysqli_prepare($con, $delete);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    header('Location: '. 'index.php');
?>