<?Php

$servidor="127.0.0.1"; // "localhost"
$usuario="root";
$contrasenia="";

try{

    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario,$contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'jugando con la programación', 'foto.jpg');";

    $conexion->exec($sql);

    echo "Conexion establecida";

}catch(PDOException $error){

    echo "Conexion Fallida".$error;

}

?>