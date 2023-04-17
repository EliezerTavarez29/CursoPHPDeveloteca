<?Php

if($_POST){

$botton=$_POST['btnValor'];

switch($botton){

    Case 1:
        echo "Presiono el boton 1";
    Break;

    Case 2:
        echo "Presiono el boton 2";
    Break;

    Case 3:
        echo "Presiono el boton 3";
    Break;

}


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>
<body>
    <form action="ejercicio13.php" method="post">
        
       <input type="submit" name="btnValor" value="1">
       <br/>
       <input type="submit" name="btnValor" value="2">
       <br/>
       <input type="submit" name="btnValor" value="3">
       <br/>

    </form>
</body>
</html>