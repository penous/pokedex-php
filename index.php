<?php
require('./pokemon.php');
require('./fetchData.php');

if (!empty($_GET['pokemon'])) {
    $poke = getData();
}

?>

<!DOCTYPE html>
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
                <form action="index.php" method="get">
                  <input type="text" name="pokemon" id="pokemon" placeholder="Search Pokémon" />
                  <button id="run">
                    <p>
                      < Run>
                    </p>
                  </button>
                </form>
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
                <p id="health" class="details">
                  <?php
                  if (isset($poke)) {
                      echo $poke->name;
                  } ?>
                </p>
                <p id="power" class="details">
                  <?php
                  if (isset($poke)) {
                      echo $poke->power;
                  } ?>
                </p>
                <p id="type" class="details"></p>
                <?php
                  if (isset($poke)) {
                      echo $poke->power;
                  } ?>
              </div>
              <div id="middle-screen-content">
                <div id="stats">
                  <div id="name"></div>
                  <?php
                  if (isset($poke)) {
                      echo $poke->power;
                  } ?>
                  <div id="height"></div>
                  <?php
                  if (isset($poke)) {
                      echo $poke->power;
                  } ?>
                  <div id="weight"></div>
                  <?php
                  if (isset($poke)) {
                      echo $poke->power;
                  } ?>
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

</html>