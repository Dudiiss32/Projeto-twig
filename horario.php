<?php

require('twig_carregar.php');

use Carbon\Carbon;
date_default_timezone_set('America/Sao_Paulo');

$data = Carbon::now()->format('d/m/Y');
$dataAmanha = Carbon::now()->addDay()->format('d/m/Y');

echo $twig->render('horario.html', [
    'data' => $data,
    'dataAmanha' => $dataAmanha,
]);