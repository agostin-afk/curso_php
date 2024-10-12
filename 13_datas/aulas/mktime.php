<?php

    $data_criada = mktime(11, 37, 45,10,11, 2099);

    $data_formatada = date("Y-m-d H:i:s", $data_criada);
    echo $data_formatada;