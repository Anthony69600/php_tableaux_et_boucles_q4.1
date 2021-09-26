<?php

$movies = [
    'Indiana Jones and the Raiders of the Lost Ark'=> 1981,
    'Indiana Jones and the Last Crusade'=>1989,
    'Indiana Jones and the Temple of Doom'=>1984
];

asort($movies);

foreach($movies as $key => $movie){
    echo $movie . " - ";
    echo $key . "<br>";
}


?> 
