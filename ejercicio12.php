<?Php

if ($_POST){

    $ValorA=$_POST['ValorA'];
    $ValorB=$_POST['ValorB'];


    if ($ValorA!=$ValorB){

        echo "El valor de A es diferente que el valor de B";

    }else{

        echo "El valor de A es igual al de B";

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
    <form action="ejercicio12.php" method="POST">
        
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