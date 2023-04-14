<?php 
if ($_POST){

//RECIBIR INFORMACION DEL FORMULARIO HTML (METODO POST)

    $Nombre=$_POST['txtNombre'];
    echo "Hola " . $Nombre;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <form action="ejercicio2.php" method="post">
        Nombre:
        <Input type="text" name="txtNombre" id="">
        <br/>
        <Input type="submit" Value="Enviar">
    </form>

</body>
</html>