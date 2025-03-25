<?php

// Carrega o carregador do composer
require_once('vendor/autoload.php');

// Muda para o horáio brasileiro
date_default_timezone_set('America/Sao_Paulo');

use Carbon\Carbon;

// Agora
echo Carbon::now() . '<br>'; 

// Adiciona um dia
echo Carbon::now()->addDay() . '<br>'; 

// Subtrai uma semana
echo Carbon::now()->subWeek() . '<br>'; 

// Adicionar quatro anos
echo 'Próximas olimpíadas: ' . Carbon::createFromDate(2024)->addYears(4)->year . '<br>';

// Idade de alguém
echo 'Sua idade é: ' . Carbon::createFromDate(2000, 4, 1)->age . '<br>';

// Final de semana?
if(Carbon::now()->isWeekend()){
    echo 'Festa! :) <br>';
}
else{
    echo 'Aula :(  <br>';
}

// Calcular diferença entre datas
$nascimento = Carbon::createFromDate(2010, 07,23);
echo 'Diferença de data: ' . Carbon::now()->diff($nascimento); 
