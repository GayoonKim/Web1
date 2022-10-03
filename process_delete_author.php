<?php

$conn = mysqli_connect('localhost', 'root', 'asdf1234', 'opentutorials');

settype($_POST['id'], 'integer');
$filtered = array(
    'id'=>mysqli_real_escape_string($conn, $_POST['id'])
);

$sql = "
    DELETE FROM topic
    WHERE author_id = {$filtered['id']}
";
mysqli_query($conn, $sql);

$sql = "
    DELETE FROM author
    WHERE id = {$filtered['id']}
";

if ( !$result = mysqli_query($conn, $sql) )
{
    printf(mysqli_error($conn));
}
else
{
    header('Location: author.php');
}

mysqli_close($conn);

?>