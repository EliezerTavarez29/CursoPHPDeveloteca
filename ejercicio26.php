<?Php

Class persona{

    public $Nombre; // Propiedades
    private $Edad;
    protected $Altura;

    function __construct($NuevoNombre){

        $this->Nombre=$NuevoNombre;

    }

    Public Function AsignarNombre($NuevoNombre){ //Acciones o metodos...

        $this->Nombre=$NuevoNombre;
        
    }

    Public Function ImprimirNombre(){

            echo "Hola soy ".$this->Nombre."<br/>";

    }
    Public Function MostrarEdad(){
        $this->Edad=20;
        return $this->Edad;

    }

}

$ObjAlumno= New Persona("Eliezer"); // instancia o Creacion de un Objeto
//$ObjAlumno->AsignarNombre("Oscar"); // Llamado un metodo
$ObjAlumno->ImprimirNombre();

?>