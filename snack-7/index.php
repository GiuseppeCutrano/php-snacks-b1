<?php

$alumns = [
    [
        'name' => 'Cristiano',
        'surname' => 'Ronaldo',
        'votes' => [9,6,7,8,9,10],
    ],
    [
        'name' => 'James ',
        'surname' => 'Howlett',
        'votes' => [10,6,7,8,9,8],
    ],
    [
        'name' => 'Amedeo',
        'surname' => 'Minghi',
        'votes' => [10,6,7,8,9,3,10],
    ],
    [
        'name' => 'Tobia',
        'surname' => 'Zio',
        'votes' => [10,6,7,8,9,3,10],
    ],
];

foreach($alumns as $alumn){
    echo $alumn['name'] . " " . $alumn['surname']  . " media voti : " . intval(array_sum($alumn['votes']) / count($alumn['votes']));
}


?>