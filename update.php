<?php
require_once('lib/print.php');
?>

<?php
require_once('view/top.php');
?>

<?php if (isset($_GET['id'])) { ?>
    <a href="update.php?id=<?= $_GET['id'] ?>"> Update </a>
<?php } ?>

<h2>
    <form action="update_process.php" method="POST">
        <input type="hidden" name="old_title" value="<?= $_GET['id'] ?>">
        <p>

            <input type="text" placeholder="Title" name="title" value="<?php print_title(); ?>">

        </p>

        <p>

            <textarea name="description" placeholder="Description"><?php print_description(); ?></textarea>

        </p>

        <p>

            <input type="submit">

        </p>
</h2>

<?php
require_once('view/bottom.php');
?>