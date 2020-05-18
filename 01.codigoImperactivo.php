<?php
# codigo imperativo o espagueti 

$automovil1 = (objeto)["marca"=> "toyota", "modelo"=> " 4Runner "];
$automovil2 = (objeto)["marca"=> "Jeep", "modelo"=> "Renegade"];

function mostrar($automovil){
    echo "<p>hola!soy un $automovil->marca, modelo $automovil->modelo</p>";
}

mostrar($automovil1);
mostrar($automovil2);
?>