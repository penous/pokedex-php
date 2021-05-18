<h1>Pokedex for life</h1>

<?php if (isset($_GET['pokemon'])) {
  $pokemon = $_GET['pokemon'];
  $data = file_get_contents("https://pokeapi.co/api/v2/pokemon/$pokemon");
  $result = json_decode($data, true);
  $rr = $result['abilities'][0]['ability']['name'];
  echo $rr;
}
// echo $data;

// var_dump(json_decode($data, true));
// $rr = $result['abilities'][0];
// $rr = $result['abilities'][0][0];

// var_dump($rr);

// $rr = $result['abilities'][0][0]['name'];
// echo $rr;

// var_dump($result);

// if (3 > 5):
//   echo 'yes';
// elseif (1 < 3):
//   echo 'hello';
//   echo ' hurra';
// endif;

// $a = [
//   'one' => 1,
//   'two' => 2,
//   'three' => 3,
//   'seventeen' => 17,
// ];
// $arr = [1, 2, 3, 4];

// var_dump($a);
// echo '<br \>';
// foreach ($a as $k => &$v) {
//   $v += 2;
//   echo "\$a[$k] => $v.<br \>";
// }
// // unset($v);
// var_dump($a);
?>


<form action="index.php" method="get">
<input type="text" name="pokemon" id="pokemon"></form>
<p>Hs</p>








<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <script src="./js/script.js" defer></script>
    <title>Pokedex</title>
  </head>
  <body>
    <div id="container">
      <div id="pokedex">
        <div class="right-bar">
          <div id="right-bar-inner">
            <img src="./images/pokemon.svg" id="sticker1" alt="Hello" />
            <div id="right-screen">
              <div id="right-middle-screen">
                <div id="moves">
                  <template id="tpl-moves">
                    <li class="move"></li>
                  </template>
                  <ol id="move-target"></ol>
                </div>
                <div id="input-field">
                  <input type="text" id="input" placeholder="Search Pokémon" />
                  <button id="run"><p>< Run ></p></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="left-bar">
          <div id="left-bar-inner">
            <img src="./images/pokemon4.png" id="sticker2" alt="Made by Oak" />
            <div id="left-screen">
              <div id="left-middle-screen">
                <div id="title" class="text">
                  <p id="health" class="details"></p>
                  <p id="power" class="details"></p>
                  <p id="type" class="details"></p>
                </div>
                <div id="middle-screen-content">
                  <div id="stats">
                    <div id="name"></div>
                    <div id="height"></div>
                    <div id="weight"></div>
                  </div>
                  <div id="image-main"></div>
                </div>
                <div id="evo-chain"></div>
              </div>
            </div>
            <div id="left-bottom-buttons">
              <div id="left-run">
                <div id="left-btn"></div>
              </div>
              <div id="start-select">
                <div id="start-select-group">
                  <div id="start"></div>
                  <div id="select"></div>
                </div>
              </div>
              <div id="cross">
                <div id="cross-inner">
                  <div id="cross-up"></div>
                  <div id="cross-right"></div>
                  <div id="cross-bottom"></div>
                  <div id="cross-left"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="middle-bar"></div>
      </div>
    </div>
  </body>
</html> -->
