<?Php

class conexion{

    private $servidor="localhost"; // "localhost"
    private $usuario="root";
    private $contrasenia="";
    private $conexion;

    public function __construct(){

        try{

            $this->conexion= new PDO("mysql:host=$this->servidor;dbname=album",$this->usuario, $this->contrasenia);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
        }catch( PDOException $e){
    
            return "Conexion Fallida".$e;

        }

        }

        Public function ejecutar($sql){ // Insertar/ Delete/ Actualizar
            $this->conexion->exec($sql);
            return $this->conexion->lastInsertId();
        }

        Public function consultar($sql){ 
            $sentencia=$this->conexion->prepare($sql);
            $sentencia->execute();
            return $sentencia->fetchAll();
        }

    }

?>