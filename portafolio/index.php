<?Php include ("cabecera.php");?>
<?Php include ("conexion.php");?>

<?Php 

    $objConexion= new conexion();
    $proyectos=$objConexion->consultar("SELECT * FROM `proyectos`");

?>

    <div class="p-5 bg-light">
        <div class="container">
            <h1 class="display-3">Bienvenid@s</h1>
            <p class="lead">Este es un portafolio privado</p>
            <hr class="my-2">
            <p>Mas informacion</p>

        </div>
    </div>

   

    <div class="row row-cols-1 row-cols-md-3 g-4">
  
        <?Php foreach ($proyectos as $proyecto) { ?>

            <div class="col">
                <div class="card h-100">
                    <img src="imagenes/<?Php echo $proyecto['imagen']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> <?Php echo $proyecto['nombre']; ?> </h5>
                            <p class="card-text"> <?Php echo $proyecto['descripcion']; ?> </p>
                        </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
                </div>
            </div>

        <?Php } ?>

    </div>

