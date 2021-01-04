<?php

$myArrRand = [];

while(count($myArrRand)<15){
    $arrayNum = rand(1,15);
    if(is_numeric(array_search($arrayNum,$myArrRand))){
    }else{
        $myArrRand[] = $arrayNum;
    }
}

var_dump($myArrRand);



?>