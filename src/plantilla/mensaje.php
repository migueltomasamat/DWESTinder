<div class="container marketing">
    <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1"><?=$datosMensaje['encabezado']?></h2>
                <?php
                    foreach ($datosMensaje['mensajes'] as $mensajeIterado){?>
                        <p class='lead'><?=$mensajeIterado?></p>

                    <?php }
                ?>
          </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="<?=$datosMensaje['imagen']?>" width="500" height="500" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"></img>
            </div>

        </div>

    <hr class="featurette-divider">
</div><!-- /.container -->