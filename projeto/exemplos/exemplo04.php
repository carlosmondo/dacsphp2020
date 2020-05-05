<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <?php
            $a = array(1,"string",3);
            var_dump($a);
            
            $dict = array("a" => array(1, 2, 3), "b" => 2);
            var_dump($dict);
            var_dump($dict["a"][1]);
            print_r($dict);
        ?>
    </body>
</html>