<?php

require __DIR__ . '/vendor/autoload.php';

use \App\webService\ViaCep;

$consultaCep = ViaCep::consultaCep("74932330");

if (!$consultaCep) {
    echo "Este cep não é valido ou não existe!";
}

foreach ($consultaCep as $value) {
    var_dump($value);
}
