<?Php

Class persona{

    public $Nombre; // Propiedades
    private $Edad;
    protected $Altura;

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

Class Trabajador extends Persona{
    Public $Puesto;
    Public Function PresentarseComoTrabajador(){
        echo "Hola soy ".$this->Nombre." y soy un ".$this->Puesto."<br/>";
    }
}

$ObjTrabajador= New Trabajador(); // instancia o Creacion de un Objeto
$ObjTrabajador->AsignarNombre("Eliezer "); // Llamado un metodo
$ObjTrabajador->Puesto="Profesor "; // Llamado un metodo
$ObjTrabajador->PresentarseComoTrabajador();

$ObjAlumno= New Persona(); // instancia o Creacion de un Objeto
$ObjAlumno->AsignarNombre("Oscar"); // Llamado un metodo

echo $ObjAlumno->Nombre."<br/>"; // Imprimir Una Propiedad

$ObjAlumno2= New Persona(); // instancia o Creacion de un Objeto
$ObjAlumno2->AsignarNombre("Pedro"); // Llamado un metodo
$ObjAlumno2->ImprimirNombre();

echo $ObjAlumno2->Nombre;
echo $ObjAlumno2->MostrarEdad();

echo "<br/>".$ObjAlumno2->Nombre; // Imprimir Una Propiedad

?>