<?php
$conn = mysqli_connect('localhost', 'root', 'asdf1234', 'opentutorials');

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';
while ($row = mysqli_fetch_array($result)) {

    $list = $list . "<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
}

$article = array(
    'title' => "Welcome",
    'description' => "Hello, Web"
);
if (isset($_GET['id'])) {
    $sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $article['title'] = $row['title'];
    $article['description'] = $row['description'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Web</title>
</head>

<body>
    <h1> <a href="index.php">WEB</a></h1>

    <ol>
        <?= $list ?>
    </ol>

    <a href="create.php">Create</a>

    <h2><?= $article['title'] ?></h2>
    <?= $article['description'] ?>
</body>

</html>