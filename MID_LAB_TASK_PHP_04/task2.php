<?php
    $amount = 2000;
    $vat = 11;

    $vat_amount = $amount * floatval($vat/100.0);

    //var_dump($vat_amount);

    echo "VAT: ".$vat_amount;

?>