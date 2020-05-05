<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <?php
            $nu = null;
            $i = 10;
            $nome = "Zezinho";
            $falso = FALSE;
            $valor = 10.50;
            $valor .= "10.50";
            echo "O valor eh: $valor" . " e seu tipo " . gettype($valor);
            echo "</br>is_string::" . is_string($valor);
            echo "</br>isset::" . isset($nu);
            var_dump($valor);
            var_dump($falso);
            echo (int)$valor;
            echo "</br>\"Esse texto entre aspas\""
        ?>
    </body>
</html>