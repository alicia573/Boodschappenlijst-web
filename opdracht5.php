<?php

session_start();

if(!isset($_SESSION['text'])){

    $_SESSION['text'] = array();
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && strlen($_POST['text']) > 0){
    $_SESSION['text'][] = htmlspecialchars($_POST['text'], ENT_QUOTES);
}

?>
<html lang="en">
<head>
    <title>Booschappenlijst </title>
</head>
<body>
<div>
    <ul>
        <?php foreach($_SESSION['text'] AS $text): ?>
            <li><?php echo $text; ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<form method="POST">
    <label>Voeg toe:
        <input type="text" name="text" />
    </label><br/>
    <input type="submit" value="Verstuur"/>
</form>
</body>
</html>
<?php
if(isset($_POST['delete']))
{

}
?>
