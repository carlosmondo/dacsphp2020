<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $nome_livro = $_POST["nome"];
            $autor_livro = $_POST["autor"];
            $idioma_livro = $_POST["idioma"];
            
            
            echo "Nome: $nome_livro <br/>";
            echo "Autor: $autor_livro <br/>";
            echo "Idioma: $idioma_livro <br/>";
        ?>
    </body>
</html>