<?Php 

    $url="https://api.dailymotion.com/videos?channel=sport&limit=10";
    
    $opciones=array("ssl"=>array("verify_peer"=>false, "verify_peer_name"=>false));

    $respuesta=file_get_contents($url,false,stream_context_create($opciones));

    $objRespuesta=json_decode($respuesta);

    //print_r($objRespuesta);

    foreach ($objRespuesta -> list as $video){

       // print_r($video->title);
       // print_r($video->channel);

    }

?>

<ul>

    <?Php  foreach ($objRespuesta -> list as $video){ ?>
        <li> <?Php echo ($video->title); ?> | <?Php echo ($video->channel); ?> </li>

    <?Php } ?>

</ul>