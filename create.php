<?php
function print_title()
{
    if (isset($_GET['id'])) {
        echo $_GET['id'];
    } else {
        echo 'Welcome';
    }
}

function print_description()
{
    if (isset($_GET['id'])) {
        echo file_get_contents("data/" . $_GET['id']);
    } else {
        echo "Hello, PHP";
    }
}

function print_list()
{
    $filelist = scandir('./data');
    $i = 0;
    while ($i < count($filelist)) {
        if ($filelist[$i] != '.') {
            if ($filelist[$i] != '..') {
                echo "<li> <a href=\"index.php?id=$filelist[$i]\"> $filelist[$i] </a></li>\n";
            }
        }
        $i += 1;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> <?php print_title(); ?></title>
</head>

<body>
    <h1><a href="index.php">WEB</a></h1>

    <ol>
        <?php
        print_list();
        ?>
    </ol>

    <a href="create.php"> Create </a>
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



</body>

</html>