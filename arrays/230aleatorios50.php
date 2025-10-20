<?php

        # Ejercicio 1 ARRAYS

        $array = [];
        for ($i=0; $i < 51 ; $i++) { 
                $num = rand(0, 99);
                $array [$i]= $num;
                echo "Número en la posición " . $i . " = " . "$array[$i] <br>";
        }

?>