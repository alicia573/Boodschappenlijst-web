<?php
require_once('config.php');
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE)
or die ('Cannot connect to db');
$result = $conn->query("SELECT quoteid, quote, cat.catid catid, cat.name cat, scat.catid catid, scat.name scat, author FROM quotes q
                           INNER JOIN category cat ON q.catid = cat.catid LEFT OUTER JOIN category scat ON q.subcatid = scat.catid order by quoteid");
?>
<table border='1px solid black'>
    <tr>
        <td>
            <b>Category</b>
        </td>
        <td>
            <b>Sub-Category</b>
        </td>
        <td>
            <b>Quote</b>
        </td>
        <td>
            <b>Author</b>
        </td>
    </tr>

    <?php
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td>
                <?php echo $row['cat']; ?>
            </td>
            <td>
                <?php echo $row['scat']; ?>
            </td>
            <td>
                <?php echo $row['quote']; ?>
            </td>
            <td>
                <?php echo $row['author']; ?>
            </td>
            <td>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post' style="display: inline;">
                    <input type='hidden' id='quoteid' name='quoteid' value="<?php echo $row['quoteid']; ?>" />
                    <input type='submit' name='formDelete' id='formDelete' value='Delete' />
                </form>
            </td>
        </tr>
        <?php
    }
    ?>
</table>