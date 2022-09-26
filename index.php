<?php
require_once('lib/print.php');
?>

<?php
require_once('view/top.php');
?>

<?php if (isset($_GET['id'])) { ?>

    <a href="update.php?id=<?= $_GET['id'] ?>">update</a>

    <form action="delete_process.php" method="POST">

        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <input type="submit" value="Delete">

    </form>

<?php } ?>

<h2> <?php print_title(); ?> </h2>

<?php

print_description();

?>

<?php
require_once('view/bottom.php');
?>