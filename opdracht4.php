<?php
if ( isset( $_POST['text'] ) ) {
    $text = $_POST['text'];

    if ( isset( $_POST['previous'] ) ) {
        $current = $_POST['previous'] . "," . $_POST['text'];
    } else {
        $current = $_POST['text'];
    }
}
?>
<html lang="en">
<head>
    <title>Booschappenlijst </title>
</head>

    <body>
        <div>
            <?php
            if ( isset( $_POST['text'] ) ) {
                $text_arr = explode(",", $current);
                echo "<ul>";
                foreach ( $text_arr as $text ) {
                    echo "<li>".$text."</li>";
                }
                echo "</ul>";
            }
            ?>
        </div>

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

            <?php if ( isset( $_POST['text'] ) ) { ?> # If the previous form submitted some text
                <input type="hidden" name="previous" value="<?php echo $current ?>"
             }
            <?php } ?>

            <label> Voeg toe:
                <input type="text" name="text" />
            </label><br/>
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>

