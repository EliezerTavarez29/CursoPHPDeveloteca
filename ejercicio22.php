<?Php

$Frutas=Array("f"=>"Fresa","p"=>"Pera","m"=>"Manzana");

Print_r($Frutas);

echo "<br/>".$Frutas["m"]."<br/>";

foreach($Frutas as $Indice=>&$Valor){

    echo "El valor ".$Valor." Tiene el ".$Indice."<br/>";

}

?>