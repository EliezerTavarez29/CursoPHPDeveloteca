<?Php

if ($_POST){

    $ValorA=$_POST['ValorA'];
    $ValorB=$_POST['ValorB'];


    //Suma
    $Suma= $ValorA+$ValorB;
    $Resta= $ValorA-$ValorB; 
    $Division= $ValorA/$ValorB;
    $Multiplicacion= $ValorA*$ValorB;   

    // Suma
    echo "El resultado de la suma es ".$Suma."<br/>" ;
    // Resta
    echo "El resultado de la resta es ".$Resta."<br/>";
    // Division
    echo "El resultado de la Division es ".$Division."<br/>";
    // Multiplicacion
    echo "El resultado de la Multiplicacion es ".$Multiplicacion."<br/>";
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
    <form action="ejercicio8.php" method="POST">
        
        Valor A:
        <input type="text" name="ValorA" id="">
        <br/>
        Valor B:
        <input type="text" name="ValorB" id="">
        <br/>
        <input type="submit" value="Calcular">

    </form>
</body>
</html>