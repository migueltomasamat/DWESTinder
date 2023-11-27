<div class="row featurette">
    <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading"><?=$datos['encabezado']?> <span class="text-muted"><?=$datos['subtitulo']?></span></h2>
        <?php

            foreach ($datos['mensajes']as $mensaje){
                echo "<p class='lead'>$mensaje</p>";
            }
        ?>
    </div>
    <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" role="img" src="<?=$datos['imagen']?>" focusable="false"></img>

    </div>
</div>

<hr class="featurette-divider">