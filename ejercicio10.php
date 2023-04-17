<?Php

if ($_POST){

    $ValorA=$_POST['ValorA'];
    $ValorB=$_POST['ValorB'];


    if (($ValorA!=$ValorB) || ($ValorA > $ValorB)) {

        echo "El valor de A es diferente que el valor de B y tambien es mayor";

    }

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
    <form action="ejercicio10.php" method="POST">
        
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