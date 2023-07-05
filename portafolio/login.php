<?Php

session_start();

    if($_POST){

        if(($_POST['usuario']=="develoteca") && ( $_POST['contrasenia']=="12345")){

            $_SESSION['usuario']="develoteca";

            header("location:index.php");

        }else{

            echo "<script> alert ('Usuario o contraseña incorrecta'); </script>";

        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>

    <div class="container">

        <div class="row">

            <div class="col-md-4">
            </div>

                <div class="col-md-4">
                    <br/>
                    <div class="card">
                        <div class="card-header">
                            Iniciar sesión 
                        </div>
                            <div class="card-body">

                                <form action="login.php" method="post">
        
                                Usuario: <input class="form-control" type="text" name="usuario" id="">  
                                <br/> 
                                Contraseña: <input class="form-control" type="password" name="contrasenia" id=""> 
                                <br/>
    
                                <button class="btn btn-success" type="submit">Entrar al Portafolio</button>

                                </form>

                            </div>

                            <div class="card-footer text-muted">
                            </div>

                    </div>
                </div>
    
            <div class="col-md-4">
            </div>

        </div>
    
    </div>
    
</body>
</html>