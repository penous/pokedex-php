<?php
function getData()
{
    $pokemon = $_GET['pokemon'];
    $data = file_get_contents("https://pokeapi.co/api/v2/pokemon/$pokemon");
    $result = json_decode($data, true);
    $abilities = $result['abilities'];
    $name = $result['name'];
    $health = $result['stats'][0]['base_stat'];
    $power = $result['stats'][1]['base_stat'];
    $height = $result['height'];
    $weight = $result['weight'];
    $type = $result['types'][0]['type']['name'];
    $sprite = $result['sprites']['front_default'];


    $poke = new Pokemon($name, $health, $power, $type, $height, $weight, $abilities, $sprite);

    // var_dump($poke);
    var_dump($result['sprites']['front_default']);
    return $poke;
}