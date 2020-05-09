<?php
    $id = (int) $_POST["id"];
    $artista = $_POST["inputArtista"];
    $nome = $_POST["inputNome"];
    $genero = (int) $_POST["inputGenero"];
    
    $con = mysqli_connect("localhost","bob","bob","univille");
    
    if($id == 0){
        $insert = "insert into albuns(artist, name, genre) values(?, ?, ?);";
        $stmt = mysqli_prepare($con, $insert);
        mysqli_stmt_bind_param($stmt, "sss", $artista, $nome, $genero);
        mysqli_stmt_execute($stmt);
    }else{
        $update = "update albuns set artist = ?, name = ?, genre = ? where id = ?;";
        $stmt = mysqli_prepare($con, $update);
        mysqli_stmt_bind_param($stmt, "sssi", $artista, $nome, $genero, $id);
        mysqli_stmt_execute($stmt);
    }
    
    
    header('Location: '. 'index.php');
?>