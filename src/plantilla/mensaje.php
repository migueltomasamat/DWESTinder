
    <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1"><?=$encabezado?></h2>
                <?php
                    foreach ($mensajes as $mensaje){
                        echo "<p class='lead'>".$mensaje."</p>";
                    }
                ?>
          </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" role="img" focusable="false" src="../resources/img/felicidad.jpg"></img>

            </div>
        </div>

    <hr class="featurette-divider">
