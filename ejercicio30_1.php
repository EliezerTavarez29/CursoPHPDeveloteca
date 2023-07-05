<?Php

session_start();

if( isset($_SESSION["usuario"])){

    echo "Usuario: ".$_SESSION["usuario"]." Estatus: ".$_SESSION["estatus"];

}else{

    echo"No hay datos";

}



?>