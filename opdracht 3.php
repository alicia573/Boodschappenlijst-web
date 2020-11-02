<?php





$boodschap = array ("aardappelen","aardbeien"," 3 pakken melk","yoghurt");
echo "Ik moet vandaag kopen:"."<br>";

foreach ($boodschap as $boodschappen) {
    echo  "<li>" . $boodschappen . "</li>";
}
?>
