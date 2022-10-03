<?php

$conn = mysqli_connect('localhost', 'root', 'asdf1234', 'opentutorials');

settype($_POST['id'], 'integer');
$filtered = array(
    'id'=>mysqli_real_escape_string($conn, $_POST['id']),
    'name'=>mysqli_real_escape_string($conn, $_POST['name']),
    'profile'=>mysqli_real_escape_string($conn, $_POST['profile'])
);

$sql = "
    UPDATE author 
    SET
        name = '{$filtered['name']}',
        profile = '{$filtered['profile']}'
    WHERE
            id = {$filtered['id']}

";

if ( !$result = mysqli_query($conn, $sql) )
{
    printf(mysqli_error($conn));
}
else
{
    header('Location: author.php?id='.$filtered['id']);
}

mysqli_close($conn);

?>