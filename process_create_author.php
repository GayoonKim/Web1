<?php

$conn = mysqli_connect('localhost', 'root', 'asdf1234', 'opentutorials');

$filtered = array(
    'name'=>mysqli_real_escape_string($conn, $_POST['name']),
    'profile'=>mysqli_real_escape_string($conn, $_POST['profile'])
);

$sql = "
    INSERT INTO author
    (name, profile)
    VALUES(
        '{$filtered['name']}',
        '{$filtered['profile']}'
    )
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