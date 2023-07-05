<?Php

    $txtNombre="";
    $rdgLenguaje="";
    
    $chkphp="";
    $chkhtml="";
    $chkcss="";

    $lsAnime="";
    $txtComentario="";



    If ($_POST){
        $txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
        $rdgLenguaje=(isset($_POST['lenguaje']))?$_POST['lenguaje']:"";

        $chkphp=(isset($_POST['chkphp'])=="si")?"checked":"";
        $chkhtml=(isset($_POST['chkhtml'])=="si")?"checked":"";
        $chkcss=(isset($_POST['chkcss'])=="si")?"checked":"";

        $lsAnime=( isset($_POST['lsAnime']) )?$_POST['lsAnime']:"";

        $txtComentario=(isset($_POST['txtComentario']))?$_POST['txtComentario']:"";

        //Instruccion de insertar
        //Rutina de algun calculo
        //Aqui puedes alterar esos valores para mostrar diferentes valores modificados
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
</head>
<body>
    <?Php if($_POST){?>
    <strong>Hola</strong>: <?Php echo $txtNombre;?>
    <br/>
    <strong>Su lenguaje es: </strong>: <?Php echo $rdgLenguaje;?>
    <br/>
    <strong>Estas aprendiendo: </strong>: <br/>
    <?Php echo ($chkphp=="checked")?"PHP":""; ?> <br/>
    <?Php echo ($chkhtml=="checked")?"HTML":""; ?> <br/>
    <?Php echo ($chkcss=="checked")?"CSS":""; ?> <br/>
    
    <strong>Su Anime favorito: </strong>: 
    <?Php echo $lsAnime; ?>
    <br/>
    
    <strong>Su Mensaje es: </strong>: <?Php echo $txtComentario; ?>
    <br/>
    
    <?Php } ?>

    <form action="ejercicio31.php" method="post">

        <input value="<?Php echo $txtNombre;?>" type="Text" name="txtNombre" id="">
        <br/>
        <br/>

        ¿Te gusta?: <br/>

        <br/> Php:  <input type="radio" <?Php echo ($rdgLenguaje=="Php")?"checked":""; ?> name="lenguaje" Value="Php" id=""> <br/>
        <br/> Html: <input type="radio" <?Php echo ($rdgLenguaje=="Html")?"checked":""; ?> name="lenguaje" Value="Html" id=""> <br/>
        <br/> CSS:  <input type="radio" <?Php echo ($rdgLenguaje=="Css")?"checked":""; ?> name="lenguaje" Value="Css" id=""> <br/>
        <br/>

        Estas aprendiendo...<br/>

        <br/> Php:  <input type="checkbox" <?Php echo $chkphp;?>  name="chkphp"  value="si" id=""> <br/>
        <br/> Html:  <input type="checkbox" <?Php echo $chkhtml;?>  name="chkhtml"  value="si" id=""> <br/>
        <br/> Css:  <input type="checkbox" <?Php echo $chkcss;?> name="chkcss"  value="si" id=""> <br/>

        ¿Que anime te gusta?...<br/>
        <select name="lsAnime" id="" >
            <option Value="">[Ninguna Serie]</option>
            <option Value="naruto" <?Php echo ($lsAnime=="naruto")?"selected":""; ?> >Naruto</option>
            <option Value="bleach" <?Php echo ($lsAnime=="bleach")?"selected":""; ?> >Bleach</option>
            <option Value="dragon" <?Php echo ($lsAnime=="dragon")?"selected":""; ?> >Dragon Ball</option>
        </select>
        <br/> <br/>

        ¿Tienes alguna Duda? <br/>
        <textarea name="txtComentario" id="" cols="30" rows="10"> 
            <?Php echo $txtComentario?>
        </textarea>
        <br/>

        <input type="submit" value="Enviar informacion">

    </form>

</body>
</html>