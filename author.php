<?php
$conn = mysqli_connect('localhost', 'root', 'asdf1234', 'opentutorials');



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Web</title>
</head>

<body>
    <h1> <a href="index.php">WEB</a></h1>
    <p><a href="index.php"> Topic </a></p>
    <table border="1">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>profile</td>
            <?php
            $sql = "SELECT * FROM author";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                $filtered = array(
                    'id' => htmlspecialchars($row['id']),
                    'name' => htmlspecialchars($row['name']),
                    'profile' => htmlspecialchars($row['profile'])

                );
            ?>
        <tr>
            <td><?= $filtered['id'] ?></td>
            <td><?= $filtered['name'] ?></td>
            <td><?= $filtered['profile'] ?></td>
        </tr>

    <?php
            }
    ?>
    </tr>
    </table>
    <form action="process_create_author.php" method="POST">
            <p><input type="text" name="name" placeholder="Name"></p>
            <p><textarea name="profile" placeholder="Profile"></textarea></p>
            <p><input type="submit" value="Create author"></p>
        </form>
</body>

</html>