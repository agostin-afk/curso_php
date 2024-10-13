<?php

    $data = new DateTime();
    echo $data->format("d-M-Y") . "<br>";
    $data->modify("+ 5 days");
    echo $data->format("d-M-Y") . "<br>";
?>