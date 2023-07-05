<?Php

Class unaClase{

    public static function unMetodo (){

        echo "Hola soy un metodo estatico <br/>";

    }

}

$obj= new unaClase();
$obj->unMetodo();

unaClase::unMetodo();

?>