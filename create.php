<?php
require_once('lib/print.php');
?>

<?php
require_once('view/top.php');
?>

<form action="create_process.php" method="POST">
    <p>

        <input type="text" placeholder="Title" name="title">

    </p>

    <p>

        <textarea name="description" placeholder="Description"></textarea>

    </p>

    <p>

        <input type="submit">

    </p>

</form>



<?php
require_once('view/bottom.php');
?>