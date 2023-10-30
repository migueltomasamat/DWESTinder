<?php

    include_once "vendor/autoload.php";
    use Carbon\Carbon;

    echo "Estamos en la página principal";
    echo "<br>";
    echo Carbon::now()->subMinutes(2)->diffForHumans();