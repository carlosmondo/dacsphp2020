<?php
    $id = (int) $_POST["Id"];
    $nome = $_POST["inputNome"];
    $endereco = $_POST["inputEndereco"];
    
    $con = mysqli_connect("localhost","bob","bob","univille");
    
    if($id == 0){
        $insert = "insert into cliente(nome, endereco) values(?, ?);";
        $stmt = mysqli_prepare($con, $insert);
        mysqli_stmt_bind_param($stmt, "ss", $nome, $endereco);
        mysqli_stmt_execute($stmt);
    }else{
        $update = "update cliente set nome = ?, endereco = ? where codigo = ?;";
        $stmt = mysqli_prepare($con, $update);
        mysqli_stmt_bind_param($stmt, "ssi", $nome, $endereco, $id);
        mysqli_stmt_execute($stmt);
    }
    
    

    header('Location: '. 'index.php');
?>