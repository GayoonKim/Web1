<?php
$conn = mysqli_connect('localhost', 'root', 'asdf1234', 'opentutorials');

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';
while ($row = mysqli_fetch_array($result)) {
    $escaped_title = htmlspecialchars($row['title']);
    $list = $list . "<li><a href=\"index.php?id={$row['id']}\">{$escaped_title}</a></li>";
}

$update_link = '';
$delete_link = '';
$article = array(
    'title' => "Welcome",
    'description' => "Hello, Web"
);
if (isset($_GET['id'])) {
    $filtered = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM topic WHERE id={$filtered}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $article['title'] = htmlspecialchars($row['title']);
    $article['description'] = htmlspecialchars($row['description']);
    

    $update_link = '<a href="update.php?id='.$_GET['id'].'">Update</a>';
    $delete_link = '
        <form action="process_delete.php" method="POST">
            <input type="hidden" name="id" value="'.$_GET['id'].'">
            <input type="submit" value="Delete">
        </form>
    ';
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
    <?= $update_link ?>
    <?= $delete_link ?>

    <h2><?= $article['title'] ?></h2>
    <?= $article['description'] ?>
</body>

</html>