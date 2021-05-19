<?php
function getData()
{
    $pokemon = $_GET['pokemon'];
    $data = file_get_contents("https://pokeapi.co/api/v2/pokemon/$pokemon");
    $dataSpecies = file_get_contents("https://pokeapi.co/api/v2/pokemon-species/$pokemon");
    // $evolutionChain = file_get_contents("https://pokeapi.co/api/v2/pokemon-species/$pokemon");
    $result1 = json_decode($data, true);
    $result2 = json_decode($dataSpecies, true);
    $result = array_merge($result1, $result2);

    $evolutionChain = file_get_contents($result['evolution_chain']['url']);
    $chainData = json_decode($evolutionChain, true);
    $result = array_merge($result, $chainData);

    $abilities = $result['moves'];
    $name = $result['name'];
    $health = $result['stats'][0]['base_stat'];
    $power = $result['stats'][1]['base_stat'];
    $height = $result['height'];
    $weight = $result['weight'];
    $type = $result['types'][0]['type']['name'];
    $sprite = $result['sprites']['front_default'];

    // var_dump($chainData['chain']['evolves_to'][0]['species']);
    $chain = [];
    $chain = getChainNames(($chainData['chain']));
    var_dump($chain);


    $poke = new Pokemon($name, $health, $power, $type, $height, $weight, $abilities, $sprite);

    // var_dump($chainData['chain']['evolves_to'][0]['evolves_to'][0]['species']['name']);
    // var_dump($poke->abilities);
    // var_dump($result['sprites']['front_default']);
    // foreach ($poke->abilities as $move) {
    //     var_dump($move['move']['name']);
    // }
    return $poke;
}


    function getChainNames($chain)
    {
        $names = [];
        foreach ($chain as $key => $value) {
            if ($key === 'species') {
                array_push($names, $value['name']);
            };
            if ($key === 'evolves_to' && !empty($value)) {
                $result = getChainNames($value[0]);
                $names = array_merge($names, $result);
            }
        }
        return $names;
    }