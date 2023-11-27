<div class="row">
    <?php
        foreach ($testimonios as $testimonio)
        {?>
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" src="<?=$testimonio['imagen']?>" focusable="false"></img>
                <h2><?=$testimonio['titulo']?></h2>
                <p><?=$testimonio['parrafo']?></p>
                <p><a class="btn btn-secondary" href="<?=$testimonio['enlace']?>"><?=$testimonio['descripcion']?></a></p>
            </div><!-- /.col-lg-4 -->
<?php   } ?>
</div>