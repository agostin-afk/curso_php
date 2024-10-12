<?php

    $cincodias = strtotime("5 days");
    $dia_atual_mais_cinco = date('d/F/Y', $cincodias);
    echo $dia_atual_mais_cinco;
?>