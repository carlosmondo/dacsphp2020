<?php
    include 'dbconnect.php';
    
    $id = (int) $_POST["id"];
    $artist = $_POST["inputArtist"];
    $name = $_POST["inputName"];
    $genre = $_POST["inputGenre"];
    
    
    if($id == 0){
        $insert = "insert into albuns(artist, name, genre) values(?, ?, ?);";
        $stmt = mysqli_prepare($con, $insert);
        mysqli_stmt_bind_param($stmt, "sss", $artist, $name, $genre);
        mysqli_stmt_execute($stmt);
    }else{
        $update = "update albuns set artist = ?, name = ?, genre = ? where id = ?;";
        $stmt = mysqli_prepare($con, $update);
        mysqli_stmt_bind_param($stmt, "sssi", $artist, $name, $genre, $id);
        mysqli_stmt_execute($stmt);
    }
    
    
    header('Location: '. 'index.php');
?>