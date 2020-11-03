<?php

$boodschap = array (
    "aardappelen<img src='aardappel.jpg' style='height: 50px'> ",
    "aardbeien <img src='aardbei.jpg' style='height: 50px'>",
    "3 pakken melk <img src='melk.jpg' style='height: 50px'>",
    "yoghurt <img src='yoghurt.png' style='height: 50px'>",

);
echo "Ik moet vandaag kopen:"."<br>";

foreach ($boodschap as $boodschappen) {
    echo  "<li>" . $boodschappen . "</li>";
}

?>
